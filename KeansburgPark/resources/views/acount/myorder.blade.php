@extends('layouts.masteraccount')

@section('css')
<link rel="stylesheet" href="{{ asset("css/account-info.css") }}">
<style>
    .detail a{
        text-decoration: underline;
        color: blue;
    }
</style>
@endsection

@section('content')
<div class="main-body-right-heading">
    <form action="{{ route('account-myorder') }}" method="post">
        @csrf
        <input type="search" name="search" id="search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>
<div class="main-body-right-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>RollNo</th>
                <th>Total price</th>
                <th>Date order</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataOrder as $item)
            <tr>
                <td>{{ ++$count }}</td>
                <td>{{ $item->id }}
                    <div class="detail">
                        <a href="{{ route('account-myorderdetail',$item->id) }}">product details</a>
                    </div>
                </td>
                <td>{{ $item->total_price }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')

@endsection