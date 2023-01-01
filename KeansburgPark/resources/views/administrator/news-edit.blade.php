@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="main-body-right-body">
    <form action="{{ route('news-edit') }}" method="post">
        @csrf
        <input type="number" name="id" value="{{ $id }}" hidden>
        <div class="mb-3 mt-3">
            <label for="" class="form-label">News name</label>
            <input class="form-control" type="text" name="title" value="{{ $data->title }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Post date</label>
            <input class="form-control" type="date" name="date" value="{{ $data->description }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control" name="description"  cols="30" rows="10">{{ $data->note }}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Thumbnail address</label>
            <input class="form-control" type="text" name="thumbnail" value="{{ $data->thumbnail }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Edit</button>
        </div>
    </form>
    <a href="{{ route('administrator-news') }}" style="color: blue">Back news</a>
</div>
@endsection

@section('js')
    
@endsection