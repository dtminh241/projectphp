@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/information/news/news.css") }}">
@endsection

@section('content')
    <div class="main">
        <div class="main-heading">
            <h1>News & Press Releases</h1>
        </div>
        <div class="main-body">
            @foreach ($data as $item)
                <div class="row">
                    <div class="image data{{ $item->id }}" style="background-image:url({{ $item->thumbnail }});background-size: cover;">
                        <p> </p>
                    </div>
                    <div class="content">
                        <h2>{{ $item->title }}</h2>
                        <p>{{ $item->description }}</p>
                        <p>{{ $item->note }}</p>
                        <a href="{{ route('news-showChilren',$item->href_param) }}"><div class="anh"></div></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection