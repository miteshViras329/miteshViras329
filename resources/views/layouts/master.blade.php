<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <title>{{ $title ?? '' }}</title>
</head>

<body class="bg-slate-50 font-robotoMono">
    <div class="w-full">
        @include('layouts.navbar')
        <div class="container mx-auto md:pt-16 pt-12 md:pb-2 border-2 md:px-4 bg-slate-900 text-white rounded border-x-slate-400 border-b-slate-400">
            @yield('content')
        </div>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')

</html>
