@extends('layouts.master')
@section('content')
    @if (request('action') == 'menu')
        <x-order-menu />
        {{-- <x-menu /> --}}
    @else
        <x-slider />
    @endif
@endsection
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection
