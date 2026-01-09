<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ml;
use Storage;
use Crypt;

class AdminController extends Controller
{
    public function index()
    {
        $registrations = Ml::all(); // Ambil semua data registrasi
        return view('admin.data', compact('registrations'));
    }

    public function download($id)
    {
        $registration = Ml::findOrFail($id);

        try {
            $fileContent = Storage::get($registration->receipt_path);
            $decryptedContent = Crypt::decrypt($fileContent);
        } catch (\Exception $e) {
            return redirect()->route('admin.ml.index')->with('error', 'File tidak dapat diunduh.');
        }

        $fileExtension = pathinfo($registration->receipt_path, PATHINFO_EXTENSION);
        $mimeType = $fileExtension === 'pdf' ? 'application/pdf' : 'image/' . $fileExtension;

        return response($decryptedContent, 200)
            ->header('Content-Type', $mimeType)
            ->header('Content-Disposition', 'attachment; filename="receipt_' . $registration->team_name . '.' . $fileExtension . '"');
    }

    public function destroy($id)
    {
        $registration = Ml::findOrFail($id);

        // Hapus file dari storage
        if (Storage::exists($registration->receipt_path)) {
            Storage::delete($registration->receipt_path);
        }

        $registration->delete(); // Hapus data dari database

        return redirect()->route('admin.ml.index')->with('success', 'Data berhasil dihapus.');
    }
}
