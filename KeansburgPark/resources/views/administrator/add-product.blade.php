@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-body">
    <form action="{{ route('product-add') }}" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label for="" class="form-label">Product Name</label>
            <input class="form-control" type="text" name="ticket" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input class="form-control" type="number" name="price" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Discount</label>
            <input class="form-control" type="number" name="discount" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Thumbnail address</label>
            <input class="form-control" type="text" name="thumbnail" required>
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Add</button>
        </div>
    </form>
    <a href="{{ route('administrator-product') }}" style="color: blue !important">Back product</a>
</div>
@endsection

@section('js')
    
@endsection