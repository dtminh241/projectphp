@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-body">
    <form action="{{ route('product-edit') }}" method="post">
        @csrf
        <input type="number" name="id" value="{{ $id }}" hidden>
        <div class="mb-3 mt-3">
            <label for="" class="form-label">Product Name</label>
            <input class="form-control" type="text" name="ticket" value="{{ $data->title }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input class="form-control" type="number" name="price" value="{{ $data->price }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Discount</label>
            <input class="form-control" type="number" name="discount" value="{{ $data->discount }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control" name="description"  cols="30" rows="10">{{ $data->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Thumbnail address</label>
            <input class="form-control" type="text" name="thumbnail" value="{{ $data->thumbnail }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Edit</button>
        </div>
    </form>
    <a href="{{ route('administrator-product') }}" style="color: blue">Back product</a>
</div>
@endsection

@section('js')
    
@endsection