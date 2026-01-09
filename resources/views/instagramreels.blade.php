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
                            <h1 class="mobile" style="background: linear-gradient(88.98deg, #520D5F 14.09%, #FF5CCB 51.63%, #01A3FB 89.18%); -webkit-background-clip: text; color: transparent;">Instagram</h1>
                        </div>
    
                        <div class="line" style="display: flex; justify-content: left; position: relative;">
                            <h1 class="compe" style="background: linear-gradient(88.98deg, #520D5F 14.09%, #FF5CCB 51.63%, #01A3FB 89.18%); -webkit-background-clip: text; color: transparent;">Reels Competition</h1>
                        </div>
                    </div>
    
                    <div class="container" style="font-family: 'Albert Sans', sans-serif;">
                        <h4 style="margin-top: 1.5em; margin-bottom: 1em; font-size: 1.5em; font-weight: bold; color: white;">Instagram Reels Competition</h4>
                        <p style="color: white;">Ngonten seru-seruan di event Locallipop bisa mendapatkan Rp. 300.000,00 untuk 3 pemenang utama yang kontennya paling asyik!</p>
                    </div>
                    <div class="container" style="margin-top: 15%;">
                        <div class="row align-items-center">
                            <p style="color: gray; font-family: 'Albert Sans', sans-serif;">Hadiah Sebesar</p>
                            <div class="col-6">
                                <h1 class="responsive-text" style="background: linear-gradient(90deg, #E51077 0%, #0095FF 57%); -webkit-background-clip: text; color: transparent; font-weight: bold; display: inline-block; font-family: 'Be Vietnam Pro', sans-serif;">300.000</h1>
                            </div>

                            <div class="col-6 d-flex justify-content-end align-items-center">
                                <div class="container d-flex align-items-end justify-end" style="font-family: 'Krub', sans-serif;">
                                    <button class="btn-next"
                                        style="background-color: #fff; border-radius: 25px; padding-top: 0.5em; padding-bottom: 0.5em; padding-left: 1.7em; padding-right: 1.7em; transition: transform 0.2s ease-in-out;"><b>Onsite Registration</b>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>