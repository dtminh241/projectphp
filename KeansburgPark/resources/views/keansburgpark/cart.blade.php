@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="">
    <style>
        .main{
            width: 80%;
            margin: 0 auto;
            margin-top: 30px;
        }
        .main-heading{
            color: purple;
            margin-bottom: 30px;
        }
        .control{
            float: right;
        }
    </style>
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h3>Cart</h3>
    </div>
    <div class="main-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @if ($data != 'Your cart is currently empty.') 
                    @foreach ($data as $item)
                    <tr>
                        <form action="{{ route('cart-editcart') }}">
                            <td>{{ ++$count }}<input type="number" name="id" value="{{ $item->id }}" hidden></td>
                            <td>{{ $item->title }}<input type="number" name="price" value="{{ $item->discount }}" hidden></td>
                            <td><input type="number" value="{{ $item->quantity }}" name="quantity"></td>
                            <td>{{ $item->total_price }}</td>
                            <td><button><i class="fa-solid fa-pen"></i></button></td>
                        </form>
                        <td><a href="{{ route('cart-deletecart',$item->id) }}"><button><i class="fa-solid fa-trash"></i></button></a></td>
                    </tr>
                    @endforeach
                @endif
                <tr>
                    <td colspan="3">Total price</td>
                    <td>{{ $total_price }}</td>
                </tr>
            </tbody>
        </table>
        <div class="control">
            <a href="http://"><button class="btn btn-success">Pay</button></a>
            <a href="{{ route('cart-cancelcart') }}"><button class="btn btn-danger">Cancel</button></a>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection