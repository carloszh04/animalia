<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
    <head>
        {{-- Required meta tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- Favicon Icon --}}
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
        <title>Animalia</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/website.css') }}">
        @livewireStyles
    </head>
    <body>
        <x-layouts.header/>
        {{ $slot }}
        <x-layouts.footer/>
        
        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')    
    </body>
</html>