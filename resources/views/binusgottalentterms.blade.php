<x-app-layout>
    <style>
        .container {
            position: relative;
        }

        .btn-handle {
            background-color: #fff;
            border-radius: 25px;
            padding-top: 0.5em;
            padding-bottom: 0.5em;
            padding-left: 1.7em;
            padding-right: 1.7em;
            bottom: -6em;
            left: 4.5em;
            transition: transform 0.2s ease-in-out;
        }

        .btn-handle:hover {
            background-color: #D7D3BF;
            transform: scale(1.05);
        }

        .rules-list li {
            padding-left: 1em;
            text-indent: -1em;
        }

        .form-check {
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }

        .form-check-input {
            vertical-align: middle;
            margin: 0;
        }

        .form-check-label {
            line-height: 1.5;
            margin: 0; 
            text-align: center;
        }

    </style>

    <div style="margin-top: 3rem; margin-bottom: 5rem; padding: 0.5rem;">
        <div class="container">
            <h1 class="text-center" style="font-size: 2em; color: white; font-family: 'M PLUS Rounded 1c', sans-serif;"><b>TERMS AND CONDITION</b></h1>
            <h6 class="text-center mt-4 text-white" style="font-family: 'Albert Sans', sans-serif;"><b>Binus Got Talent</b></h6>
        </div>
        <div class="container text-center">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-transparent">
                    <div class="pt-2" style="font-family: 'Albert Sans', sans-serif;">
                        <div class="row flex justify-center">
                            <div class="col-12" style="font-size: 1em; color: white; text-align: left;">
                                <p class="mt-5" style="font-size: 1em; color: white; text-align: left;"><b>Syarat dan
                                        ketentuan</b></p>
                                <ol class="rules-list list-group-numbered mt-1">
                                    <li class="list-group-item">
                                        Lomba bakat antara mahasiswa/i antar kampus, serta siswa/i SMA. 
                                    </li>
                                    <li class="list-group-item">
                                        Lomba yang dapat diikutsertakan dapat berupa menyanyi, menari, akting, puisi, menggambar/melukis onsite dalam 10 menit, public speaking, debat, stand up comedy, dll. 
                                    </li>
                                    <li class="list-group-item">
                                        Lomba ini dapat diikuti secara individu maupun berkelompok (satu kelompok maksimal 5 orang).
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('binusgottalent') }}" method="POST">
                        @csrf
                        <div class="row mt-4">
                            <div class="col-12 " style="font-size: 1em; color: white; text-align: left;">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Mengikuti Binus Got Talent secara? <span class="text-danger">*</span></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="option" id="individu" value="individu" required>
                                        <label class="form-check-label" for="individu">
                                            Individu
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="option" id="berkelompok" value="berkelompok">
                                        <label class="form-check-label" for="berkelompok">
                                            Berkelompok
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center pt-4" style="font-family: 'Albert Sans', sans-serif;">
                            <div class="form-check mt-5 mb-3 d-flex justify-content-center align-items-center gap-2">
                                <input type="checkbox" class="form-check-input @error('agree') is-invalid @enderror" id="agree"
                                    name="agree" {{ old('agree') ? 'checked' : ''}} required>
                                <label for="agree" class="form-check-label ms-3"
                                    style="color: #fff; margin: 0; line-height: 1.4;">
                                    Saya telah membaca dan memahami S&K yang berlaku. <span class="text-danger">*</span>
                                </label>
                                @error('agree')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
        
                        <div class="container text-center">
                            <div class="form-check mb-3 d-flex justify-content-center align-items-center gap-2">
                                <input type="checkbox" class="form-check-input mt-1 @error('agree') is-invalid @enderror"
                                    id="agree1" name="agree1" {{ old('agree') ? 'checked' : ''}} required>
                                <label for="agree1" class="form-check-label"
                                    style="color: #fff; max-width: 600px; text-align: center; margin: 0; line-height: 1.4;">
                                    Saya dan tim telah membaca dan memahami S&K serta peraturan in-game yang berlaku, dan
                                    bersedia didiskualifikasi jika melanggar. <span class="text-danger">*</span>
                                </label>
                                @error('agree1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
        
                        <div class="container text-center">
                            <div class="form-check mb-3 d-flex justify-content-center align-items-center gap-2">
                                <input type="checkbox" class="form-check-input mt-1 @error('agree2') is-invalid @enderror"
                                    id="agree2" name="agree2" {{ old('agree2') ? 'checked' : ''}} required>
                                <label for="agree2" class="form-check-label"
                                    style="color: #fff; max-width: 600px; text-align: center; margin: 0; line-height: 1.4;">
                                    Saya bersedia bertanggung jawab atas segala resiko yang mungkin terjadi selama mengikuti
                                    permainan ini. <span class="text-danger">*</span>
                                </label>
                                @error('agree2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
        
                        <div class="container flex justify-between" style="margin-top: 5em; font-family: 'Krub', sans-serif;">
                            <a class="btn-handle" href="{{ route('binusgottalentinfo') }}">
                                <b>Back</b>
                            </a>
                            <button class="btn-handle"><b>Next</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 