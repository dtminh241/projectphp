@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/food/food.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Restaurants & Eateries</h1>
    </div>
    <div class="main-body">
        <p>No trip to the boardwalk is complete without traditional boardwalk fare. Tempt your taste buds with everything from seafood to zeppole's.</p>
        @for ($i = 0; $i < ceil(count($data)/4); $i++)
            <div class="row{{ $i }}">
                @for ($j = $i*4; $j < count($data); $j++)
                    @if (($j != $i*4) && ($j%4==0))
                        @break
                    @endif
                    <div class="col'{{ $j }}'" style="width:277.5px;margin-right: 10px;">
                        <div class="image">
                            <img src="{{ $data[$j]->thumbnail }}" alt="" style="width:277.5px;height: 277.5px;">
                        </div>
                        <div class="title">
                            <p>{{ $data[$j]->title }}</p>
                        </div>
                        <a href="{{ route('food-showfoodchil',$data[$j]->href_param) }}">
                            <div class="show">
                                <button>Read More</button>
                            </div>
                        </a>
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