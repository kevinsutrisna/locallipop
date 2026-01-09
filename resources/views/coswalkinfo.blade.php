<x-app-layout>
    <style>
        .btn-next:hover {
            background-color: #D7D3BF;
            transform: scale(1.05);
        }

        .responsive-text {
            font-size: 50px;
        }

        @media (max-width: 1200px) {
            .responsive-text {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 992px) {
            .responsive-text {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .responsive-text {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .responsive-text {
                font-size: 1.5rem;
            }
        }
    </style>

    <div class="position-relative" style="padding-bottom: 5%; margin-top: 2%; padding: 0.5rem;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-transparent">
                <div class="pt-2">
                    <div class="container" style="font-size: 3em; font-weight: bold; display: inline-block;">
                        <div class="line" style="display: flex; justify-content: left; position: relative;">
                            <h1 class="mobile" style="background: linear-gradient(88.98deg, #FFE100 14.09%, #63A54A 89.18%); -webkit-background-clip: text; color: transparent;">Coswalk</h1>
                        </div>
                    </div>
    
                    <div class="container" style="font-family: 'Albert Sans', sans-serif;">
                        <h4 style="margin-top: 1.5em; margin-bottom: 1em; font-size: 1.5em; font-weight: bold; color: white;">Coswalk</h4>
                        <p style="color: white;">Selamat datang di pendaftaran Coswalk yang diadakan sebagai bagian dari Locallipop 2024! Ini adalah kesempatanmu untuk menunjukkan gayamu di depan semua orang.</p>
                    </div>

                    <div class="container" style="color: white; margin-top: 1rem; font-family: 'Albert Sans', sans-serif;">
                        <p><b>Detail Acara</b></p>
                        <p>- Tanggal Acara: 17-20 Desember 2024</p>
                        <p>- Lokasi: BINUS Anggrek Campus</p>
                        <p>- Biaya Pendaftaran: Rp 20.000/individu</p>
                    </div>

                    <div class="container" style="margin-top: 2rem;">
                        <div class="row align-items-center">
                            <p style="color: gray; font-family: 'Albert Sans', sans-serif;">Hadiah Sebesar</p>
                            <div class="col-6">
                                <h1 class="responsive-text" style="background: linear-gradient(90deg, #FFE101 0%, #63A449 57%); -webkit-background-clip: text; color: transparent; font-weight: bold; display: inline-block; font-family: 'Be Vietnam Pro', sans-serif;">900.000</h1>
                            </div>

                            <div class="col-6 d-flex justify-content-end align-items-center">
                                <a href="{{ route('coswalkterms') }}">
                                    <button class="btn btn-light" 
                                        style="border-radius: 25px; padding: 0.5em 2.5em; transition: transform 0.2s ease-in-out; font-family: 'Krub', sans-serif;">
                                        <b>Next</b>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>