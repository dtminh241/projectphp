@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/food/foodchil.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="title">
        <h1>{{ $data->title }}</h1>
    </div>
    <div class="main-body">
        <div class="image">
            <img src="{{ $data->thumbnail }}" alt="">
        </div>
        <div class="info">
            @if ($data->href_param != 'mambo-nando-s-new-2021')
                <p>{{ $data->note }}</p>
            @else
                <p>{!! $data->note !!}</p>
            @endif
            <div class="back">
                <a href="{{ route('food-showfood') }}">View All Eateries</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection