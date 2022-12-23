@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/rapidsattractions/runawayrapids.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Runaway Rapids</h1>
    </div>
    <div class="main-body">
        @for ($i = 0; $i < ceil(count($data)/4); $i++)
            <div class="row{{ $i }}">
                @for ($j = $i * 4; $j < count($data); $j++)
                    @if (($j != $i*4) && ($j%4==0))
                        @break
                    @endif
                    <div class="column col{{ $j }}">
                        <div class="image">
                            <img src="{{ $data[$j]->thumbnail }}" alt="">
                        </div>
                        <div class="text">
                            <div class="title">
                                <h3>{{ $data[$j]->title }}</h3>
                            </div>
                            <a href="{{ route('rides-showRRChil',$data[$j]->href_param) }}">
                                <div class="show">
                                    <button>Read More</button>
                                </div>
                            </a>
                        </div>
                    </div>
                @endfor
            </div><br>
        @endfor
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection