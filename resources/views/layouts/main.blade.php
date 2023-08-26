<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('public/images/favicon.ico') }}" type="image/ico">

    @vite('resources/js/app.js')
</head>

<body>
    {{-- HEADER --}}
    @include('components/header')
    {{-- HERO --}}
    @include('components/hero')

    {{-- MAIN --}}
    <main>
        @yield('main-content')

        {{-- PROVIDERS --}}
        @include('components/providers')
    </main>

    @include('components/footer')

</body>

</html>
