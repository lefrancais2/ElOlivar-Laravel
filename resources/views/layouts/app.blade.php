<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>


<body class="font-sans antialiased bg-white">
    {{-- <x-jet-banner /> --}}
    @livewire('header')

    <x-carousel/>

    <x-present/>

    <x-listmenu/>

    {{-- arreglar parallax para movil --}}
    <x-parallax/>

    <x-iconssection/>

    @livewire('footer')

    <x-last-footer-area/>

    {{-- <div class="phone-page d-none d-lg-block">
        <i class="fas fa-phone-volume"></i>
    </div> --}}

    <!-- Page Content -->
    {{-- <main class="container my-5">
        {{ $slot }}
    </main> --}}

    @stack('modals')

    @livewireScripts

    @stack('scripts')
</body>

</html>
