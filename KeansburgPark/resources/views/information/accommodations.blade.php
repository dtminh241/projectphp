@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/information/accommodations.css') }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Accommodations</h1>
    </div>
    <div class="main-body">
        @foreach ($data as $item)
            <div class="row">
                <div class="title">
                    <h3>{{ $item->title }}</h3>
                </div>
                <div class="body-row">
                    <div class="info">
                        <div class="description">
                            <h4>Description</h4>
                            <p>{{ $item->note }}</p>
                        </div>
                        <div class="contact-info">
                            <h4>Contact Info</h4>
                            <p>{!! $item->description !!}</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ $item->thumbnail }}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection