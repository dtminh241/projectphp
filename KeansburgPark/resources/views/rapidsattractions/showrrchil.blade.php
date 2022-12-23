@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/rapidsattractions/runawayrapidschil.css") }}">
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
            <p>{{ $data->note }}</p>
            <div class="back">
                <a href="{{ route('rides-showRR') }}">View All Rides</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection