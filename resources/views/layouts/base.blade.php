<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('logo.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- sweet alert 2 -->
        <link href="{{ asset('assets') }}/css/sweetalert2.css" rel="stylesheet" />

        <!-- animate css -->
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- tooltip -->
        <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />

        <wireui:scripts />
        @livewireStyles
        @livewireScripts

        <!-- plugin for sweetalert2  -->
        <script src="{{ asset('assets') }}/js/sweetalert2.js" async></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body x-data="{ theme: localStorage.getItem('theme') || 'light' }"
    :class="{ 'dark': theme === 'dark', 'bg-slate-800': theme === 'dark', 'bg-gray-50': theme === 'light' }">
        <x-dialog z-index="z-50" blur="sm" align="center" />
        @yield('body')
    </body>

    <script>
        window.addEventListener('swal',function(e){Swal.fire(e.detail);});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @stack('js')
</html>
