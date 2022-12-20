@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/'.$datacss.'.css') }}">    
@endsection

@section('content')
<div class="main">
    <div class="main-left">
        <h3>Recent News</h3>
        <ul>
            @foreach ($data as $item)
                <li><a href="{{ route('news-showChilren',$item->href_param) }}">{{ $item->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="main-right">
        {!! $showData !!}
    </div>
</div>
@endsection

