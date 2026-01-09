<x-app-layout>
    <div style="margin-top: 1rem; margin-bottom: 3rem;">
        <div class="container-md" style="margin-bottom: 4%;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="text-white text-center mt-3 fw-bold fs-1" style="padding-top: 5%;">REGISTRATION</h1>
            <h1 class="text-white text-center fs-6 mt-2">Coswalk LOCALLIPOP 2024</h1>
        </div>
            
        <div class="container-md text-white">
            <form action="{{ route('coswalkregistration') }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @csrf

                <div class="container-md">
                    <h2>INFORMATION</h2>
                    <div class="border-top border-1 mb-4 border-primary my-2 border-white"></div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            value="{{ old('name') }}" placeholder="Enter your name" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                            value="{{ old('nim') }}" placeholder="Enter your NIM" required>
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="institution" class="form-label">Asal Instansi <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('institution') is-invalid @enderror" id="institution" name="institution"
                            value="{{ old('institution') }}" placeholder="Ex. BINUS University" required>
                        @error('institution')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor WhatsApp <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                            value="{{ old('phone') }}" placeholder="Ex. 0123456789" required>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div for="payment" class="pb-2">Unggah bukti transfer senilai <b>Rp20.000,00</b> ke rekening berikut: <span class="text-danger">*</span></div>
                        <div for="payment">BCA 6043622086</div>
                        <div for="payment">Account Name: Dina Tunggala</span></div>
                        <div for="payment">Sertakan berita: Coswalk - Nama</div><br>
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