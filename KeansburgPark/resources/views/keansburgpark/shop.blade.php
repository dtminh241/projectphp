@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset("css/shop.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Shop</h1>
    </div>
    <div class="main-body">
        <div class="intro">
            <h2 style="text-align: center;">B.O.G.O SALE EXTENDED AND NOW VALID UNTIL MIDNIGHT DECEMBER 25th. TICKETS ARE DOUBLED WHEN PACKAGING YOUR ORDER.  FOR EXAMPLE: IF YOU WANT TWO TICKETS PURCHASE ONE, IF YOU WANT FOUR TICKETS, PURCHASE TWO, AND SO ON. THANK YOU.</h2 style="text-align: center;">
        </div>
        <div class="crossbar">
            .
        </div>
        <div class="show-tickets">
            @for ($i = 0; $i < ceil(count($data)/2); $i++)
                <div class="row">
                @for ($j = $i*2; $j < count($data); $j++)
                    @if (($j != $i*2) && ($j%2==0))
                        @break
                    @endif
                    <div class="col{{ ++$count }}">
                        <div class="img">
                            <img src="{{ $data[$j]->thumbnail }}" alt="">
                        </div>
                        <a href="{{ route('shop-showbuyticket',$data[$j]->href_param) }}">
                            <div class="show">
                                <button>Product Detail</button>
                            </div>    
                        </a>
                    </div>
                @endfor
                </div>
                @php
                    $count = 0    
                @endphp
            @endfor
            <h3 style="color: #552f7d;font-size: 32px;text-align:center;margin-bottom:50px">*All prices include NJ sales tax. $6.95 shipping and handling fees will be applied during checkout. Please allow 10 days for delivery.</h3>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection