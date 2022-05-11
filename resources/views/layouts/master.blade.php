<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title ?? '' }}</title>
</head>

<body class="bg-slate-50 font-robotoMono">
    <div class="w-full">
        @include('layouts.navbar')
        <div class="container mx-auto py-2 border-2 px-4 rounded border-x-slate-400 border-b-slate-400">
            @yield('content')
        </div>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('scripts')

</html>
