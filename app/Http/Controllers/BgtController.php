<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bgt;

class BgtController extends Controller
{
    public function showForm(Request $request)
    {
        $request->validate([
            'option' => 'required|in:individu,berkelompok',
        ]);

        return view('binusgottalent', ['option' => $request->option]);
    }

    public function showInfo(){
        return view('binusgottalentinfo');
    }
    
    public function showTerms(){
        return view('binusgottalentterms');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kapten' => 'nullable|string|max:255',
            'anggota1' => 'nullable|string|max:255',
            'anggota2' => 'nullable|string|max:255',
            'anggota3' => 'nullable|string|max:255',
            'anggota4' => 'nullable|string|max:255',
            'nomorinduk' => 'required|string|max:255',
            'nomor' => 'nullable|string|max:255',
            'institusi' => 'required|string|max:255',
            'receipt' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'kategori' => 'required|in:Drama,Musik,Dance',
        ]);

        $receiptPath = $request->file('receipt')->store('receipts', 'public');

        Bgt::create([
            'name' => $validated['nama'],
            'captain' => $validated['kapten'],
            'member1' => $validated['anggota1'],
            'member2' => $validated['anggota2'],
            'member3' => $validated['anggota3'],
            'member4' => $validated['anggota4'],
            'nim' => $validated['nomorinduk'],
            'phone' => $validated['nomor'],
            'institution' => $validated['institusi'],
            'receipt' => $receiptPath,
            'category' => $validated['kategori'],
        ]);

        return back()->with('success', 'Registrasi berhasil disimpan!');
    }
}
