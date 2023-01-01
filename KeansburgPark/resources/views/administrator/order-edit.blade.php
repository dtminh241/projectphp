@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-body">
    <form action="{{ route('order-edit') }}" method="post">
        @csrf
        <input type="number" name="id" value="{{ $id }}" hidden>
        <div class="mb-3">
            <label for="" class="form-label">Total price</label>
            <input class="form-control" type="number" name="price" value="{{ $data->total_price }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edit date</label>
            <input class="form-control" type="date" name="date" value="{{ $data->created_at }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Edit</button>
        </div>
    </form>
    <a href="{{ route('administrator-order') }}" style="color: blue">Back order</a>
</div>
@endsection

@section('js')
    
@endsection