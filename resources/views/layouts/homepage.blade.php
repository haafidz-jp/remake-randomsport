<!DOCTYPE html>
    <html lang="en"><head>
        
        <title>{{ $title }}</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Accept-CH" content="DPR,Width,Viewport-Width" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  />
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans">
        
        <div id="content">
            <main class="font-medium text-gray-200 bg-gray-900">
        
            {{-- OPEN HEADER --}}
            @include('components.header')
            {{-- CLOSE HEADER --}}

            {{-- OPEN HERO --}}
            @include('components.hero')
            {{-- CLOSE HERO --}}

            {{-- OPEN LOGO --}}
            @include('components.testi')
            {{-- CLOSE LOGO --}}
            
            {{-- OPEN PRICING --}}
            @include('components.statistic')
            {{-- CLOSE PRICING --}}

            {{-- OPEN RATING --}}
            @include('components.maps')
            {{-- CLOSE RATING --}}

            {{-- OPEN FOOTER --}}
            @include('components.footer')
            {{-- CLOSE FOOTER --}}

            </main>
        </div>


    <script src="../../js/app.bf0dc4900e0ffc459ba088aebb0bcc6c0b1065748bbb6a39c7920ab77d60fcbf.js"  defer></script>

    </body>
</html>