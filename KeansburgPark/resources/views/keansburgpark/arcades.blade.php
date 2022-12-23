@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/rapidsattractions/arcades.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Arcades</h1>
    </div>
    <div class="main-body">
        <p>The Game Room and Bev & Wally's have a great selection of Family Entertainment!</p>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/header.js') }}"></script>
@endsection