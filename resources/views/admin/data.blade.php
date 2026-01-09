@extends('layouts.admin') <!-- Pastikan Anda memiliki layout admin -->

@section('title', 'Data Registrasi Mobile Legend')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Data Registrasi Mobile Legend</h1>

    <!-- Tampilkan pesan sukses atau error -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Tabel Data -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Tim</th>
                    <th>Nama Kapten</th>
                    <th>WhatsApp Kapten</th>
                    <th>Pemain 1</th>
                    <th>Pemain 2</th>
                    <th>Pemain 3</th>
                    <th>Pemain 4</th>
                    <th>Pemain 5</th>
                    <th>Pemain Cadangan</th>
                    <th>Bukti Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($registrations as $index => $registration)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $registration->team_name }}</td>
                        <td>{{ $registration->captain_name }}</td>
                        <td>{{ $registration->captain_whatsapp }}</td>
                        <td>{{ $registration->player1 }}</td>
                        <td>{{ $registration->player2 }}</td>
                        <td>{{ $registration->player3 }}</td>
                        <td>{{ $registration->player4 }}</td>
                        <td>{{ $registration->player5 }}</td>
                        <td>{{ $registration->player6 ?? '-' }}</td>
                        <td>
                            @if(Storage::exists($registration->receipt_path))
                                <a href="{{ route('admin.ml.download', $registration->id) }}" class="btn btn-sm btn-primary">Download</a>
                            @else
                                <span class="text-danger">File tidak tersedia</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('admin.ml.delete', $registration->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="12" class="text-center">Tidak ada data registrasi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
