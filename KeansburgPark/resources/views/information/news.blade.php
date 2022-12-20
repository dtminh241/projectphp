@extends('layouts.master')

@section('css')
    <style>
        .main-heading{
            margin-bottom: 50px;
            height: 200px;
            width: 100%;
            background-image: url(https://keansburgamusementpark.com/wp-content/uploads/2015/01/IMG_8460e.jpg);
            background-size: cover;
            background-attachment: fixed;
            text-align: center;
            padding-top: 50px;
        }
        .row{
            display: flex;
            justify-content: flex-end;
            width: 60%;
            margin: 0 auto;
            margin-bottom: 40px;
        }
        .image{
            height: 500px;
            width: 380px;
            background-size: cover;
            text-align: center;
            cursor: pointer;
        }
        .data1{
            width: 425px;
        }
        .content{
            width: 400px;
            font-size: 17px;
            margin-right: 40px;
            padding-left: 20px;
            background-color: rgb(250, 249, 249);
        }
        .content h2{
            font-size: 30px;
        }
        .content p{
            line-height: 25px;
        }
        .content h2,
        .main-heading h1{
            font-family: 'La Belle Aurore', cursive;
            color: purple;
            margin-top: 30px
        }
        .anh{
            width: 300px;
            height: 100px;
            background-image: url(https://keansburgamusementpark.com/wp-content/uploads/2015/04/read_more.png);
            background-repeat: no-repeat;
            
        }
    </style>
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
    
@endsection