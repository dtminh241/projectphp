@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/information/history.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>History</h1>
    </div>
    <div class="main-body">
        @foreach ($data as $item)
            @if ( $count++ != 0)
                <hr>
            @endif
            <div class="row">
                <div class="content">
                    <h1>{{ $item->description }}</h1>
                    <h1>{{ $item->title }}</h1>
                    <p>{{ $item->note }}</p>
                </div>
                <div class="image">
                    <img src="{{ $item->thumbnail }}" alt="">
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection