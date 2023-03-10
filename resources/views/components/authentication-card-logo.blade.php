{{--  Set the logo to public/img/logo.png --}}

<x-slot name="logo">
    <a href="/">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-20 h-20" />
    </a>