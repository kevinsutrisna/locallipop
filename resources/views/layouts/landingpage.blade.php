<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locallipop Festival 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            background-color: rgba(14, 16, 24, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 2em;
        }

        .logo-left {
            position: absolute;
            top: 3em;
            left: 8em;
        }

        .logo-right {
            position: absolute;
            top: 1.25em; 
            right: 1.25em;
            height: auto;
        }

        h1 {
            font-size: 4.5rem;
            line-height: 1.2;
            margin-left: 0.6em;
            margin-top: 1.2em;
        }

        h2 {
            font-size: 0.7rem;
            margin-bottom: 0.625em;
        }

        .btn {
            background-color: #000000;
            color: #fff;
            border: 2px solid;
            border-radius: 25px;
            padding-top: 0.5em;
            padding-bottom: 0.5em;
            padding-left: 0.5em;
            padding-right: 0.5em;
            position: absolute;
            overflow: hidden;
            bottom: 6em;
            left: 7.5em;
            transition: transform 0.2s ease-in-out;
            box-shadow: 0 20px 50px rgb(255, 255, 255 / 5%);
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .footer {
            font-size: 0.5rem;
            text-align: center;
            margin-top: 10em;
        }

    </style>
</head>
<body>
    <img src="{{ asset('images\circle1.png') }}" alt="error" loading="lazy"  class="img-fluid position-absolute right-[0%] top-[0%]">
    <img src="{{ asset('images\circle2.png') }}" alt="error" loading="lazy"  class="img-fluid position-absolute right-[0%] bottom-[0%]">
    <img src="{{ asset('images\circle3.png') }}" alt="error" loading="lazy"  class="img-fluid position-absolute left-[0%] bottom-[-5%]">
    <img src="{{ asset('images\circle4.png') }}" alt="error" loading="lazy"  class="img-fluid position-absolute left-[-5%] top-[-25%]">
    <div class="container">
        <div class="logo-left">
            <img style="width: 60%;" src="{{ asset('images\locallipoplogo.png') }}" alt="">
        </div>

        <img src="{{ asset('images/Binus-Hotel-&-Tourismm-Logo-(Transparent-White).png') }}" alt="Binus Logo" style="width: 20%; margin-right: 2em;" loading="lazy" class="logo-right">
    </div>


    <div class="container d-flex flex-column justify-content-center" style="flex-grow: 1;">
        <h1><b>LOCALLIPOP<br> FESTIVAL <br> 2024</b></h1>
        <div class="container" style="display: flex; gap: 1em; margin-left: 3.5em; font-size: 0.6rem; align-items: center;">
                <p>BINUS UNIVERSITY ANGGREK, KEMANGGISAN</p>
                <p><span style="display: inline-block; font-size: 0.3125em; color: #000000; vertical-align: -1px;">⚪</span></p>
                <p>17 - 20 DESEMBER 2024</p>
        </div>
    </div>

    <div class="container">
        <a href="/home" class="btn"><b>GET TICKETS</b></a>
    </div>

    <div class="footer">
        AN EVENT PRESENTED BY TOURISM FACULTY BY BINUS UNIVERSITY
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>