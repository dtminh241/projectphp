@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/buy-ticket.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-left">
        <img src="{{ $data->thumbnail }}" alt="">
    </div>
    <div class="main-right">
        <div class="intro">
            <h3>{{ $data->title }}</h3>
            <p style="font-size: 20px;"><b>${{ $data->discount }}.00</b></p>
            <div class="description">
                <p>{{ $data->description }}</p>
            </div>
            <form action="{{ route('shop-addcart') }}" method="POST">
                @csrf
                <div class="add-ticket">
                    <input type="number" name="id" value="{{ $data->id }}" hidden>
                    <input type="text" name="href" value="{{ $data->href_param }}" hidden>
                    <input type="number" name="quantity" id="">
                    <button>Add To Cart</button>
                </div>
            </form>
        </div>
        <div class="exits-tickets">
            <h3>Related products</h3>
            <div class="products">
                @foreach ($dataExits as $item)
                <div class="col">
                    <div class="image">
                        <img src="{{ $item->thumbnail }}" alt="">
                    </div>
                    <div class="title">
                        <p>{{ $item->title }}</p>
                    </div> 
                    <a href="{{ route('shop-showbuyticket',$item->href_param) }}"><button>Add To Cart +</button></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@if (\Session::has('success')) 
    <script>
        alert("Add ticket successfully !!! ");
    </script>
    @php
       \Session::forget('success'); 
    @endphp
@endif
<script src="{{ asset("js/header.js") }}"></script>
@endsection