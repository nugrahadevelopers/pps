<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? false ? $title . ' / ' . config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
    </title>

    <!-- Datatables -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css')
</head>

<body class="font-sans antialiased">
    <div class="flex h-screen overflow-hidden bg-gray-50">
        <div class="hidden md:flex md:flex-shrink-0">
            @include('layouts.navigation')
        </div>
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <main class="relative flex-1 overflow-y-auto focus:outline-none">
                <x-theme.breadcrumbs :name="$breadCrumbsName" :data="$breadCrumbsData ?? null" />
                <div class="pb-6">
                    <div class="px-4 mx-auto 2xl:max-w-7xl">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.6.3.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script>

    @stack('js')
</body>

</html>
