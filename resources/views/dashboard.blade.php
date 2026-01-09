@php
    $textcolor = '#E6FF00';
    $white = '#FFFFFF';
@endphp

<x-app-layout>  
    <style>
        .flip-clock-wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
        
        }
        .flip-clock-wrapper ul{
            background: none;
        }

        .flip-clock-wrapper ul li a div div.inn{
            color: #e9ecef;
            text-shadow: 10px 10px 3px #00000066;
            background-color: gray;
        }

        .flip-clock-wrapper ul li a div .shadow{
            z-index: 0;
        }
        
        span.flip-clock-dot.top{
            background-color: white;
        }
        span.flip-clock-dot.bottom{
            background-color: white;
        }

        .flip-clock-wrapper .flip{
            box-shadow: 13px 16px 20px 0px rgba(0, 0, 0, 0.7);
        }

        .flip-clock-divider.seconds .flip-clock-label{
            right: -120px;
        }

        .flip-clock-divider.minutes .flip-clock-label{
            right: -120px;
        }

        .flip-clock-divider .flip-clock-label{
            right: -100px;
        }

        .event-card {
            position: relative;
            height: 25rem;
            border-radius: 15%;
            padding-top: 10%;
            color: white;
            display: flex;
            align-items: start;
            justify-content: start;
            text-align: start;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s;
            overflow: hidden; 
        }

        .event-card::before {
            border-radius: 15%;
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            backdrop-filter: blur(50px);
            z-index: 1;
        }

        .event-card span {
            z-index: 1;
            margin-left: 10%;
            font-size: 250%;
        }

        .event-card:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .event-card::before:hover{
            transform: scale(1.05);
        }

        .poster {
            border-radius: 103px;
        }

        .card {
            border: none;
            text-align: center;
            background-color: rgb(18,14,45);
            color: white;
            padding: 5%;
        }

        .card img {
            border-radius: 60px;
            width: 100%;
            height: 20rem;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.55rem;
            font-family: 'Koulen', sans-serif;
        }

        .card-text {
            font-weight: none;
            font-size: 1rem;
            color: rgba(255, 255, 255, 1);
            font-family: 'Alegreya Sans', sans-serif;
        }

        @media(min-width: 320px) and (max-width: 767px) {
            #clock1{
                transform: scale(0.5);
            }

            .flip-clock-wrapper{
                width: auto;
            }

            .events {
                max-width: 90%;
            }

            .event-card {
                width: auto;
                border-radius: 25px;
                height: 13rem;
                z-index: 1;
            }

            .event-card::before {
                border-radius: 25px;
            }

            .event-card span {
                font-size: 120%;
            }

            .poster {
                border-radius: 40px;
            }

            .card {
                border: none;
                text-align: center;
                background-color: rgb(18,14,45);
                color: white;
                padding: 0%;
            }

            .card img {
                border-radius: 20px;
                width: 100%;
                height: 7rem;
                object-fit: cover;
            }

            .card-title {
                font-size: 0.75rem;
                font-weight: bold;
            }

            .card-text {
                font-size: 0.5rem;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            #clock1{
                transform: scale(0.6);
            }

            .poster {
                border-radius: 80px;
            }
        }

        @media (min-width: 1200px) {
            #clock1{
                transform: scale(1);
            }
        }
    </style>
    <div class="position-relative" style="padding-bottom: 5%;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-transparent">
                <div class="pt-2">
                    <div class="d-flex justify-content-center align-items-center">
                        <img loading="lazy" style="width: 65%; margin-top: -2%;" class="img-fluid" src="{{ asset('/images/Viral Eats Fashion Beats Music Treats.png') }}" alt="error">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center" style="margin-top: 3%; text-align: center;">
                        <span style="font-family: 'Alatsi', sans-serif; color: {{ $white }}; font-size: 1em; width: 90%; margin-bottom: 1%;">{{ "AT BINUS ANGGREK, KEMANGGISAN" }}</span>
                        <span style="font-family: 'Alfa Slab One', sans-serif; color: {{ $white }}; font-size: 1.2em; width: 90%">{{"Desember 17 - 20"}}
                            <span class="text-white" style="font-family: 'ABeeZee', sans-serif;">{{ " / " }}{{"Locallipop Festival 2024"}}</span>
                        </span>
                        <div id="eventClosed" class="alert alert-danger mt-4 fw-bold" role="alert" style="display: none;">
                            REGISTRATION CLOSED!
                        </div>
                        <button class="px-4" style="background-color: #FF269D; margin: 3%; color:white; padding: 1%; border-radius: 15px;" 
                        onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <a href="#eventss" id="getbutton" style="font-family: 'Koulen', sans-serif; color: #FFF0CB;">
                                Get Ticket
                            </a>
                        </button>
                    </div>
                    
                    <div class="d-flex flex-column justify-content-center align-items-center" style="margin-top: 5%;">
                        <h1 style="color: {{ $white }}; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl text-center">OUR FESTIVAL STARTING AT</h1>
                        <div style="margin-top: 5%" id="clock1"></div>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center" style="margin-top: 10%;">
                        <h1 style="color: {{ $white }}; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl">EVENT POSTER</h1>
                        <img loading="lazy" class="poster p-4" src="{{ asset('images\Locallipop Festival 2024 Final 1.png') }}" alt="poster" style="margin-top: 2%; margin-bottom: 10%;">
                    </div>

                    <div class="container-fluid text-center mx-auto p-4"
                        style="color: white; padding: 2rem 1rem; width: 100%; box-sizing: border-box; margin-bottom: 10%;" id="aboutuss">
                        <h1 style="color: {{ $white }}; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl">ABOUT LOCALLIPOP</h1>
                        <p style="font-family: 'Alatsi', sans-serif; margin-top: 5%; font-size: 1rem; line-height: 1.6; word-wrap: break-word; text-align-justify">
                            Welcome to locallipop 2024, the 2nd binus tourism festival, where the vibrant pulse of jakarta comes alive! this event is a true celebration of culture, creativity, and community, designed to unite people in unforgettable ways. step into a world filled with the enticing aromas of jakarta’s viral dishes and the latest streetwear trends.
                        </p>
                        <br>
                        <p style="font-family: 'Alatsi', sans-serif; margin-top: 1rem; font-size: 1rem; line-height: 1.6; word-wrap: break-word; text-align-justify">
                            At locallipop, you can savor delicious street food, enjoy live music from talented local artists, and explore unique fashion showcases that capture the city’s spirit. this year, we’re raising the excitement with a thrilling coswalk competition, where participants showcase their creativity by transforming into beloved characters through incredible costumes. for those seeking adventure, our wall climbing competition offers an adrenaline rush, while gamers can compete in the action-packed mobile legends tournament. adding to the excitement, binus got talent will shine the spotlight on amazing student talents, from singing and dancing to unique performances, while live band performances keep the energy alive. for those with a creative streak, our art & craft workshop provides a hands-on opportunity to explore and develop artistic skills.
                        </p>
                        <br>
                        <p style="font-family: 'Alatsi', sans-serif; margin-top: 1rem; font-size: 1rem; line-height: 1.6; word-wrap: break-word; text-align-justify">
                            Locallipop is more than just an event, it’s a platform for students and the community to connect and grow. organized by binus university’s tourism and event courses, this festival empowers students to engage with jakarta’s diverse cultures and contribute to local economies. join us at locallipop 2024! whether you're a foodie, fashion enthusiast, or music lover, there’s something for everyone. experience the joy of community, creativity, and culture in one vibrant space. 
                        </p>
                        <br>
                        <p style="font-family: 'Alatsi', sans-serif; margin-top: 1rem; font-size: 1rem; line-height: 1.6; word-wrap: break-word; text-align-justify">
                            We can’t wait to welcome you!
                        </p>
                    </div>
                    <div class="events container text-center" style="margin-top: 5%; margin-bottom: 5%; max-width: 960px;" id="eventss">
                        <h1 style="color: {{ $white }}; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl">OUR EVENTS</h1>
                        <div class="row g-4" style="margin-top: 5%; font-family: 'Alatsi', sans-serif;">
                            <div class="col-6 col-md-6 col-lg-4">
                                <a href="{{ route('mobilelegendinfo') }}">
                                    <div class="event-card" style="background: url('{{ asset('images/Vector 2.png') }}'); background-size: cover;">
                                        <span>Mobile Legends</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4">
                                <a href="{{ route('binusgottalentinfo') }}">
                                    <div class="event-card" style="background: url('{{ asset('images/Vector 3.png') }}'); background-size: cover;">
                                        <span>BINUS Got Talent</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4">
                                <a href="{{ route('artcraftworkshop') }}">
                                    <div class="event-card" style="background: url('{{ asset('images/Vector 4.png') }}'); background-size: cover;">
                                        <span>Art & Craft Workshop</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4">
                                <a href="{{ route('instagramreels') }}">
                                    <div class="event-card" style="background: url('{{ asset('images/Vector 5.png') }}'); background-size: cover;">
                                        <span>Instagram Reels Competition</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4">
                                <a href="{{ route('coswalkinfo') }}">
                                    <div class="event-card" style="background: url('{{ asset('images/Vector 6.png') }}'); background-size: cover;">
                                        <span>Coswalk</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="container" style="max-width: 1000px; margin-top: 10%;">
                        <h1 style="color: {{ $white }}; margin-bottom: 5%; margin-top: 5%; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl text-center">TALKSHOW SPEAKER</h1>
                        <div class="row g-4">
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <img loading="lazy" src="{{ asset('images\Fianty_Owner Soap Me Please 1.png') }}" alt="Fianty">
                                    <div class="card-body">
                                        <h5 class="card-title">FIANTY</h5>
                                        <p class="card-text">Owner Soap Me Please</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <img loading="lazy" src="{{ asset('images\Nathanael Yoga Langi S. _ Mr.World 2024 Lmen 1.png') }}" alt="Nathanael Yoga Langi">
                                    <div class="card-body">
                                        <h5 class="card-title">NATHANAEL YOGA LANGI</h5>
                                        <p class="card-text">Mr. World 2024 L-men</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <img loading="lazy" src="{{ asset('images\speaker.png') }}" alt="Lina Mardiyah">
                                    <div class="card-body">
                                        <h5 class="card-title">LINA MARDIYAH</h5>
                                        <p class="card-text">Owner PT. Sinar Selira Interfood</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <img loading="lazy" src="{{ asset('images\Miss Talitha_HR Emina 1.png') }}" alt="Miss Talitha">
                                    <div class="card-body">
                                        <h5 class="card-title">MISS TALITHA</h5>
                                        <p class="card-text">HR Emina</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <img loading="lazy" src="{{ asset('images\Hilda Savista_Speaker Facetology_Kelompok 4 1.png') }}" alt="Miss Talitha">
                                    <div class="card-body">
                                        <h5 class="card-title">HILDA SAVISTA</h5>
                                        <p class="card-text">Facetology</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <img loading="lazy" src="{{ asset('images\Paulus Rudy Kurnianto -Es teh Indonesia 1.png') }}" alt="Miss Talitha" class="bg-white">
                                    <div class="card-body">
                                        <h5 class="card-title">PAULUS RUDY KURNIANTO</h5>
                                        <p class="card-text">Es Teh Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <img loading="lazy" src="{{ asset('images\Akyunia Labiba_speaker atourin 1.png') }}" alt="Miss Talitha">
                                    <div class="card-body">
                                        <h5 class="card-title">AKYUNIA LABIBA</h5>
                                        <p class="card-text">Atourin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <img loading="lazy" src="{{ asset('images\Screenshot 2024-12-09 at 14.03.49 1.png') }}" alt="Miss Talitha">
                                    <div class="card-body">
                                        <h5 class="card-title">DICKY PARDOSI</h5>
                                        <p class="card-text">Founder Atrium community</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center gap-4 px-[55px] py-4 text-center text-[32px] font-semibold leading-none text-white md:gap-8 md:px-20 md:py-7 md:text-5xl lg:gap-12 lg:px-32 lg:py-9 lg:text-[56px] xl:gap-16 xl:px-[150px]  xl:py-12 xl:text-[64px]" style="margin-top: 5%;">
                        <h1 style="color: {{ $white }}; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl text-center">OUR SPONSOR</h1>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="d-flex flex-row justify-content-center align-items-center" style="gap: 5%;">
                                <div>
                                    <img loading="lazy" src="{{ asset('images\white-logo 1.png') }}" alt="error">
                                </div>
                                <div>
                                    <img loading="lazy" src="{{ asset('images\jne.png') }}" alt="error">
                                </div>
                                <div>
                                    <img loading="lazy" src="{{ asset('images\CELEBON-KOREAN-SKINCARE-white 1.png') }}" alt="error">
                                </div>
                            </div>
                            <div>
                                <img loading="lazy" src="{{ asset('images\FA Logo Lenovo Original 1.png') }}" alt="error" style="transform: scale(0.7);">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-4 px-[55px] py-4 text-center text-[32px] font-semibold leading-none text-white md:gap-8 md:px-20 md:py-7 md:text-5xl lg:gap-12 lg:px-32 lg:py-9 lg:text-[56px] xl:gap-16 xl:px-[150px]  xl:py-12 xl:text-[64px]" style="margin-top: 5%;">
                        <h1 style="color: {{ $white }}; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl text-center">SUPPORTED BY</h1>
                        <div class="d-flex flex-row justify-content-center align-items-center" style="gap: 5%;">
                            <div>
                                <img loading="lazy" src="{{ asset('images\Hotel Management 1.png') }}" alt="error">
                            </div>
                            <div>
                                <img loading="lazy" src="{{ asset('images\logo sso 1.png') }}" alt="error">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-4 px-[55px] py-4 text-center text-[32px] font-semibold leading-none text-white md:gap-8 md:px-20 md:py-7 md:text-5xl lg:gap-12 lg:px-32 lg:py-9 lg:text-[56px] xl:gap-16 xl:px-[150px]  xl:py-12 xl:text-[64px]" style="margin-bottom: 5%; margin-top: 5%;">
                        <div class="flex w-full flex-col">
                            <h1 style="color: {{ $white }}; margin-bottom: 5%; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl text-center">OUR TENANTS</h1>
                            <div class="flex justify-center" style="padding: 5%; background-color: white; border-radius: 30px;">
                                <img loading="lazy" src="{{ asset('images\tenants.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-4 px-[55px] py-4 text-center text-[32px] font-semibold leading-none text-white md:gap-8 md:px-20 md:py-7 md:text-5xl lg:gap-12 lg:px-32 lg:py-9 lg:text-[56px] xl:gap-16 xl:px-[150px]  xl:py-12 xl:text-[64px]" style="margin-bottom: 5%;">
                        <div class="flex w-full flex-col">
                            <h1 style="color: {{ $white }}; margin-bottom: 5%; font-family: 'Alatsi', sans-serif;" class="text-2xl md:text-4xl lg:text-5xl text-center">MEDIA PARTNERS</h1>
                            <div class="flex justify-center" style="padding: 5%; background-color: white; border-radius: 30px;">
                                <img loading="lazy" src="{{ asset('images\mediapartners.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var targetDate = new Date();
        targetDate.setMonth(11);
        targetDate.setDate(17);
        targetDate.setHours(00, 00, 00, 000);   

        var now = new Date();
        var diff = (targetDate.getTime() - now.getTime()) / 1000;

        var clock = $('#clock1').FlipClock(diff, {
            clockFace: 'DailyCounter',
            countdown: true,
            showSeconds: true,
            labels: ['Days', 'Hours', 'Minutes', 'Seconds'],
        });

        var timer = setInterval(function () {
        var currentValue = clock.getTime().time;

        if (currentValue <= 0) {
                clock.setTime(0);
                clock.stop();
                clearInterval(timer); 
                document.getElementById('eventClosed').style.display = 'block';
                document.getElementById('getbutton').style.pointerEvents = 'none';
                document.getElementById('getbutton').style.color = '#aaaaaa';
            }
        });

        $('.flip-clock-label').css({
            'text-align': 'center',
            'font-size': '20px',
            'text-transform': 'uppercase',
            'color': 'white',
            'font-weight': 'bold'
        });

        document.getElementById("getbutton").addEventListener("click", function (event) {
            event.preventDefault();
            const targetElement = document.getElementById("eventss");
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 50;
                window.scrollTo({
                    top: offsetTop,
                    behavior: "smooth"
                });
            }
        });
        document.getElementById("eventbutton").addEventListener("click", function (event) {
            event.preventDefault();
            const targetElement = document.getElementById("eventss");
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 50;
                window.scrollTo({
                    top: offsetTop,
                    behavior: "smooth"
                });
            }
        });
        document.getElementById("aboutusbutton").addEventListener("click", function (event) {
            event.preventDefault();
            const targetElement = document.getElementById("aboutuss");
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 50;
                window.scrollTo({
                    top: offsetTop,
                    behavior: "smooth"
                });
            }
        });
    </script>
</x-app-layout>

