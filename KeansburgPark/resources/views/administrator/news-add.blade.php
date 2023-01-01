@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-body">
    <form action="{{ route('news-add') }}" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label for="" class="form-label">News name</label>
            <input class="form-control" type="text" name="title" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Post date</label>
            <input class="form-control" type="date" name="date" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control" name="note" id="" cols="30" rows="10" required></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Thumbnail address</label>
            <input class="form-control" type="text" name="thumbnail" required>
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Add</button>
        </div>
    </form>
    <a href="{{ route('administrator-news') }}" style="color: blue !important">Back product</a>
</div>
@endsection

@section('js')
    
@endsection