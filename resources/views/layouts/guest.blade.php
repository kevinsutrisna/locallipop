<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.cdnfonts.com/css/konkhmer-sleokchher" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/krub" rel="stylesheet">

        <!-- style -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.css">
        
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .flip-clock-wrapper{
                display: flex;
                justify-content: start;
                align-items: start;
                margin: 0%;
            }
            .flip-clock-wrapper ul{
                background: none;
            }

            .flip-clock-wrapper ul li a div div.inn{
                color: white;
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

            .html, body{
                margin: 0;
                padding: 0;
            }

            .boxxss{
                transform: scale(0.9);
            }

            @media (min-width: 768px) and (max-width: 1024px) {
                .boxxss{
                    transform: scale(0.7);
                }
            }
        </style>
    </head>
    <body class="font-sans text-white antialiased" style="background-color: rgba(14, 16, 24, 1);">
        <div class="w-100 h-100 position-fixed">
            <img src="{{ asset('images\circle1.png') }}" alt="error" loading="lazy"  class="img-fluid position-absolute right-[0%] top-[0%]">
            <img src="{{ asset('images\circle2.png') }}" alt="error" loading="lazy"  class="img-fluid position-absolute right-[0%] bottom-[0%]">
            <img src="{{ asset('images\circle3.png') }}" alt="error" loading="lazy"  class="img-fluid position-absolute left-[0%] bottom-[0%]">
            <img src="{{ asset('images\circle4.png') }}" alt="error" loading="lazy"  class="img-fluid position-absolute left-[0%] top-[0%]">
        </div>
        <div class="boxxss row d-flex justify-content-center align-items-center" style="padding: 1rem; gap: 2rem;">
            <div class="col-6 d-none d-lg-block flex flex-col px-0">
                <div class="flex flex-col fw-bold" style="font-size: 4rem; font-family: 'Konkhmer Sleokchher', sans-serif;">
                    <span style="z-index: 1;">LOCALLIPOP</span>
                    <span style="z-index: 1;">FESTIVAL</span>
                    <span style="z-index: 1;">2024</span>
                </div>
                <div class="mt-4" style="font-family: 'Krub', sans-serif;">
                    <span class="d-block" style="font-size: 1.5rem; font-weight: bold; color: #FFFFFFBF;">WE ARE COMING SOON!</span>
                    <span class="d-block mt-2" style="font-size: 1.2rem; color: #FFFFFFBF;">The clock is ticking, we are providing an immersive experience</span>
                </div>
                <div class="mt-4" id="clock1" style="padding-top: 2rem; width: auto;"></div>
            </div>
            <div class="col-6 px-0" style="z-index: 1; background-color: hsla(0, 0%, 50%, 0.8);  border-radius: 40px; width: 40rem;">
                <div class="d-flex flex-row justify-content-start" style="margin-left: 3rem; font-size: 1.5rem; gap: 3rem; padding: 1rem; padding-bottom: 0.5rem; font-family: 'Krub', sans-serif;">
                    <a href="{{ route('register') }}" style="text-decoration: {{ Request::routeIs('register') ? 'underline' : 'none' }}; text-decoration-color: #D63A3A; text-decoration-thickness: 3px; text-underline-offset: 15px; color: {{ Request::routeIs('register') ? 'white' : '#888a90' }}">
                        Sign Up 
                    </a>
                    <a href="{{ route('login') }}" style="text-decoration: {{ Request::routeIs('login') ? 'underline' : 'none' }}; text-decoration-color: #D63A3A; text-decoration-thickness: 3px; text-underline-offset: 15px; color: {{ Request::routeIs(patterns: 'login') ? 'white' : '#888a90' }}">
                        Sign In
                    </a>
                </div>
                <div style="background-color: #6b6d72; border-radius: 40px; width: 100%; padding: 8%; box-shadow: 0px -10px 20px 0px rgb(0 0 0 / 28%);">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <div style="margin-top: 5rem;">
            @include('layouts/footer')
        </div>
    </body>
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
    </script>
</html>
