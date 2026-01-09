<x-app-layout>
    <div style="margin-top: 1rem; margin-bottom: 3rem;">
        <div class="container-md" style="margin-bottom: 4%;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="text-white text-center mt-3 fw-bold fs-1" style="padding-top: 5%;">REGISTRATION</h1>
            <h1 class="text-white text-center fs-6 mt-2">Mobile Legend LOCALLIPOP 2024</h1>
        </div>
            
        <div class="container-md text-white">
            <form action="{{ route('mobilelegendregistration') }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @csrf

                <div class="container-md">
                    <h2>INFORMATION</h2>
                    <div class="border-top border-1 mb-4 border-primary my-2 border-white"></div>
                    <div class="mb-3">
                        <label for="team" class="form-label">Nama tim <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('team') is-invalid @enderror" id="team" name="team"
                            value="{{ old('team') }}" placeholder="Enter your team name" required>
                        @error('team')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="capt" class="form-label">Nama Kapten <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('capt') is-invalid @enderror" id="capt" name="capt"
                            value="{{ old('capt') }}" placeholder="Enter your Captain name" required>
                        @error('capt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor WhatsApp Kapten <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                            value="{{ old('phone') }}" placeholder="Masukkan nomor WA" required>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="p1" class="form-label">In-Game Name, ID Pemain Inti 1 (Kapten) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('p1') is-invalid @enderror" id="p1" name="p1"
                            value="{{ old('p1') }}" placeholder="Ex. nickname1, 0123456789" required>
                        @error('p1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="p2" class="form-label">In-Game Name, ID Pemain Inti 2 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('p2') is-invalid @enderror" id="p2" name="p2"
                            value="{{ old('p2') }}" placeholder="Ex. nickname2, 3298278776" required>
                        @error('p2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="p3" class="form-label">In-Game Name, ID Pemain Inti 3 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('p3') is-invalid @enderror" id="p3" name="p3"
                            value="{{ old('p3') }}" placeholder="Ex. nickname3, 7194608913" required>
                        @error('p3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="p4" class="form-label">In-Game Name, ID Pemain Inti 4 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('p4') is-invalid @enderror" id="p4" name="p4"
                            value="{{ old('p4') }}" placeholder="Ex. nickname4, 3778092706" required>
                        @error('p4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="p5" class="form-label">In-Game Name, ID Pemain Inti 5 <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('p5') is-invalid @enderror" id="p5" name="p5"
                            value="{{ old('p5') }}" placeholder="Ex. nickname5, 8679985054" required>
                        @error('p5')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="p6" class="form-label">In-Game Name, ID Pemain Cadangan (jika ada)</label>
                        <input type="text" class="form-control" id="p6" name="p6"
                            value="{{ old('p6') }}" placeholder="Ex. nickname6, 5970539686">
                    </div>

                    <div class="mb-3">
                        <div for="payment" class="pb-2">Unggah bukti transfer senilai <b>Rp100.000,00</b> ke rekening berikut: <span class="text-danger">*</span></div>
                        <div for="payment">BCA 6043622086</div>
                        <div for="payment">Account Name: Dina Tunggala</span></div>
                        <div for="payment" class="mt-2">Sertakan berita: MLBB - Nama Tim</div><br>
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