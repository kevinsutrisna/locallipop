<x-app-layout>
    <div style="margin-top: 1rem; margin-bottom: 3rem;">
        <div class="container-md" style="margin-bottom: 4%;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="text-white text-center mt-3 fw-bold fs-1" style="padding-top: 5%;">REGISTRATION</h1>
            <h1 class="text-white text-center fs-6 mt-2">BINUS Got Talent</h1>
        </div>
            
        <div class="container-md text-white">
            <form action="{{ route('binusgottalentregistration') }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @csrf
                
                <div class="container-md">
                    <h2>INFORMATION</h2>
                    <div class="border-top border-1 mb-4 border-primary my-2 border-white"></div>
                    @if ($option === 'individu')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                                value="{{ old('nama') }}" placeholder="Enter your name" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nomorinduk" class="form-label">NIM <span class="text-danger">*</span></label>
                            <label for="nomorinduk" class="form-label">(Jika Non Binusian silahkan isi -)</label>
                            <input type="text" class="form-control @error('nomorinduk') is-invalid @enderror" id="nomorinduk" name="nomorinduk"
                                value="{{ old('nomorinduk') }}" placeholder="Ex. 0123456789" required>
                            @error('nomorinduk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor WhatsApp <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor"
                                value="{{ old('nomor') }}" placeholder="Ex. 0123456789" required>
                            @error('nomor')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label">Asal Instansi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('institusi') is-invalid @enderror" id="institusi" name="institusi"
                                value="{{ old('institusi') }}" placeholder="Ex. BINUS University" required>
                            @error('institusi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    @elseif ($option === 'berkelompok')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Tim <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') }}" placeholder="Enter Team Name" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kapten" class="form-label">Nama Ketua Tim <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('kapten') is-invalid @enderror" id="kapten"
                                name="kapten" value="{{ old('kapten') }}" placeholder="Ex. Rudy" required>
                            @error('kapten')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="anggota1" class="form-label">Nama Anggota 1  <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('anggota1') is-invalid @enderror" id="anggota1"
                                name="anggota1" value="{{ old('anggota1') }}" placeholder="Ex. Dian" required>
                            @error('anggota1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="anggota2" class="form-label">Nama Anggota 2 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('anggota2') is-invalid @enderror" id="anggota2"
                                name="anggota2" value="{{ old('anggota2') }}" placeholder="Ex. Dian" required>
                            @error('anggota2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="anggota3" class="form-label">Nama Anggota 3 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('anggota3') is-invalid @enderror" id="anggota3"
                                name="anggota3" value="{{ old('anggota3') }}" placeholder="Ex. Dian" required>
                            @error('anggota3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="anggota4" class="form-label">Nama Anggota 4 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('anggota4') is-invalid @enderror" id="anggota4"
                                name="anggota4" value="{{ old('anggota4') }}" placeholder="Ex. Dian" required>
                            @error('anggota4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="flex flex-col">
                                <label for="nomorinduk" class="form-label">NIM Seluruh Anggota <span class="text-danger">*</span></label>
                                <label for="nomorinduk" class="form-label">Tuliskan Nama dan NIM</label>
                                <label for="nomorinduk" class="form-label">(Jika non Binusian silahkan berikan -)</label>
                            </div>
                            <input type="text" class="form-control @error('nomorinduk') is-invalid @enderror" id="nomorinduk"
                            name="nomorinduk" value="{{ old('nomorinduk') }}" placeholder="Ex: Anggita Putri - 270881789" required>
                            @error('nomorinduk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="institusi" class="form-label">Asal Instansi <span class="text-danger">*</span></label>
                            <label for="institusi" class="form-label">(Dapat diisi lebih dari 1 instansi)</label>
                            <input type="text" class="form-control @error('institusi') is-invalid @enderror" id="institusi"
                                name="institusi" value="{{ old('institusi') }}" placeholder="Ex: Binus university & Untar" required>
                            @error('institusi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    @endif

                    <div class="mb-3">
                        <div for="payment">Unggah bukti transfer senilai <b>Individual (Rp25.000,00) & Berkelompok (Group) (Rp25.000,00)</b> ke rekening berikut: <span class="text-danger">*</span></div>
                        <div for="payment">Account Name: Dina Tunggala</span></div>
                        <div for="payment">A/C: 6043622086</div>
                        <div for="payment" class="mt-3 mb-3">Sertakan berita: BGT - Nama</div>
                        <input type="file" class="form-control bg-white @error('payment') is-invalid @enderror" id="payment" name="payment"
                            value="{{ old('payment') }}" style="border: 2px solid; padding: 10px; font-size: 14px;" required>
                        @error('payment')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-5 text-dark">
                        <x-primary-button type="submit">REGISTER</x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>