@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/rapidsattractions/batting-cages.css') }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Batting Cages</h1>
    </div>
    <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg/img/title-divider.png" alt="">
    <div class="main-body">
        <h2>The batting cages are now open under new management</h2>
        <h2>Open every weekend at 10am</h2>
        <img src="https://keansburgamusementpark.com/wp-content/uploads/2019/07/BattingCagesLOGO.png" alt="">
        <h1>OPEN EVERY DAY THIS SUMMER AT 11AM</h1>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/header.js') }}"></script>
@endsection