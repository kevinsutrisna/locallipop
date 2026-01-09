<?php

namespace App\Http\Controllers;

use Crypt;
use Illuminate\Http\Request;
use App\Models\Cw;
use Storage;
use Str;

class CWController extends Controller
{
    public function showForm()
    {
        return view('coswalk'); 
    }
    public function showInfo(){
        return view('coswalkinfo');
    }

    public function showTerms(){
        return view('coswalkterms');
    }

    public function termCheck(Request $request){
        $validated = $request->validate([
            'agree' => 'required|boolean',
            'agree1' => 'required|boolean',
            'agree2' => 'required|boolean',
        ]);
        return redirect()->route('coswalk');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|regex:/^[0-9]{1,20}$/',
            'institution' => 'required|string|max:255',
            'phone' => 'required|string|max:20|regex:/^[0-9]{10,15}$/',
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

        Cw::create([
            'name' => $validated['name'],
            'nim' => $validated['nim'],
            'institution' => $validated['institution'],
            'phone' => $validated['phone'],
            'receipt_path' => $fileName,
        ]);
        return back()->with('success', 'Registrasi berhasil disimpan.');
    }

}
