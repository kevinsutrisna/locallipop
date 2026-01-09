<?php

namespace App\Http\Controllers;

use Crypt;
use Illuminate\Http\Request;
use App\Models\Ml;
use Storage;
use Str;

class MlController extends Controller
{
    public function showForm()
    {
        return view('mobilelegend'); 
    }

    public function showInfo(){
        return view('mobilelegendinfo');
    }

    public function showTerms(){
        return view('mobilelegendterms');
    }
    
    public function termCheck(Request $request){
        $validated = $request->validate([
            'agree' => 'required|boolean',
            'agree1' => 'required|boolean',
            'agree2' => 'required|boolean',
        ]);

        return redirect()->route('mobilelegend');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'team' => 'required|string|max:255',
            'capt' => 'required|string|max:255',
            'phone' => 'required|string|max:20|regex:/^[0-9]{10,15}$/',
            'p1' => 'required|string|max:255',
            'p2' => 'required|string|max:255',
            'p3' => 'required|string|max:255',
            'p4' => 'required|string|max:255',
            'p5' => 'required|string|max:255',
            'p6' => 'nullable|string|max:255',
            'payment' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $file = $request->file('payment');
        $mimeType = $file->getMimeType();

        if (!in_array($mimeType, ['image/jpeg', 'image/png', 'application/pdf'])) {
            return back()->withErrors(['payment' => 'File yang diunggah tidak valid.']);
        }

        if ($file->getSize() > 2048 * 1024) {
            return back()->withErrors(['payment' => 'Ukuran file tidak boleh lebih dari 2MB.']);
        }

        $fileName = 'payment/' . Str::uuid() . '.' . $file->getClientOriginalExtension();

        try {
            $encryptedContent = Crypt::encrypt(file_get_contents($file->getRealPath()));
            Storage::put($fileName, $encryptedContent, 'private');
        } catch (\Exception $e) {
            return back()->withErrors(['payment' => 'Terjadi kesalahan saat menyimpan file.']);
        }

        Ml::create([
            'team_name' => $validated['team'],
            'captain_name' => $validated['capt'],
            'captain_whatsapp' => $validated['phone'],
            'player1' => $validated['p1'],
            'player2' => $validated['p2'],
            'player3' => $validated['p3'],
            'player4' => $validated['p4'],
            'player5' => $validated['p5'],
            'player6' => $validated['p6'],
            'receipt_path' => $fileName,
        ]);
        $request->session()->put('registration_success', true);
        return redirect()->route('whatsapp.group')->with('success', 'Registrasi berhasil disimpan.');
    }

    public function showWhatsAppGroup(Request $request)
    {
        if (!$request->session()->has('registration_success')) {
            return redirect()->route('mobilelegend')->withErrors('Anda tidak diizinkan mengakses halaman ini.');
        }

        $request->session()->forget('registration_success');

        return view('whatsapp-group');
    } 
}