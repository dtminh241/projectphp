@extends('layouts.masteraccount')

@section('css')
<link rel="stylesheet" href="{{ asset("css/account-info.css") }}">
<style>
    .detail a{
        text-decoration: underline;
        color: blue;
    }
    tbody img{
        width: 100px;
        height: 100px;
    }
</style>
@endsection

@section('content')
<div class="main-body-right-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>RollNo</th>
                <th>Product</th>
                <th>Thumbnail</th>
                <th>Quantity</th>
                <th>Total price</th>
                <th>Date_order</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ ++$count }}</td>
                <td>{{ $item->order_id }}</td>
                <td>{{ $item->title }}</td>
                <td><img src="{{ $item->thumbnail }}" alt=""></td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->total_price }}</td>
                <td>{{ $item->time_order_tiket }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('account-myorder') }}" style="color: blue">Back order</a>
</div>
@endsection

@section('js')

@endsection