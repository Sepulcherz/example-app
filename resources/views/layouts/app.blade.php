<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/index.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>

                {{ $slot }}

            
        </main>
        <footer><img src="{{ asset('/storage/img/LogoAfpa.png') }}" class="kek">
            <a target="blank">TOU</a> <a target="blank">Legal Mentions</a>
        </footer>
        <div id="credits">
            <p>©AFPA & DWWM 2021</p>
        </div>
    </div>
</body>

</html>