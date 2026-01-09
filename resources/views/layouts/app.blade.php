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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.css">
        <link href="https://fonts.cdnfonts.com/css/koulen" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/alatsi-2" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/alfa-slab-one" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/abeezee" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/alegreya-sans" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/albert-sans" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/krub" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/be-vietnam-pro" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/m-plus-rounded-1c@5.1.0/index.min.css">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen" style="background-color: rgb(18,14,45);">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                   
                </header>
            @endisset
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @include('layouts.footer')
        </div>
    </body>
</html>
