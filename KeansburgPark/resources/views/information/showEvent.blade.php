@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/information/event/event.css') }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Events</h1>
        <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg/img/title-divider.png" alt="">
    </div>
    <div class="main-end">
        <div class="row">
            @foreach ($data as $item)
                <div class="column">
                    <div class="heading-column">
                        <img src="{{ $item->thumbnail }}" alt="">
                    </div>
                    <a href="{{ route('information-showEventChil',$item->href_param) }}">
                        <div class="title-column">
                            <h2>{{ $item->title }}</h2>
                        </div>
                        <div class="end-column column{{ $count }}">
                            <div class="choose{{ $count }}">
                                <div class="choose-inside{{ $count ++}}">
                                    <p>{{ strtoupper($item->description) }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection