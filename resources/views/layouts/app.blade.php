<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 50 50'%3E%3Crect width='50' height='50' rx='8' fill='%23f53003'/%3E%3Crect x='10' y='15' width='30' height='20' rx='2' fill='none' stroke='%23fff' stroke-width='2'/%3E%3Cline x1='17.5' y1='15' x2='17.5' y2='35' stroke='%23fff' stroke-width='1.5' opacity='0.5'/%3E%3Cline x1='25' y1='15' x2='25' y2='35' stroke='%23fff' stroke-width='1.5' opacity='0.5'/%3E%3Cline x1='32.5' y1='15' x2='32.5' y2='35' stroke='%23fff' stroke-width='1.5' opacity='0.5'/%3E%3Cg transform='translate(25,25)'%3E%3Cpath d='M 6 -3 A 5 5 0 1 1 3 -5.5' stroke='%23fff' stroke-width='2' stroke-linecap='round' fill='none'/%3E%3Cpath d='M 3 -5.5 L 5 -3.5 L 2.5 -4 Z' fill='%23fff'/%3E%3Cpath d='M -6 3 A 5 5 0 1 1 -3 5.5' stroke='%23fff' stroke-width='2' stroke-linecap='round' fill='none'/%3E%3Cpath d='M -3 5.5 L -5 3.5 L -2.5 4 Z' fill='%23fff'/%3E%3C/g%3E%3C/svg%3E">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" style="background: #0a0a0a;">
        <div class="min-h-screen" style="background: #0a0a0a;">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header style="background: #0a0a0a; border-bottom: 1px solid #222;">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h2 style="font-weight: 600; font-size: 1.25rem; color: white; line-height: 1.25;">{{ $header }}</h2>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
