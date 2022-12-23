@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="css/rapidsattractions/beach.css">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Beach</h1>
    </div>
    <div class="main-body">
        <div class="main-body-left">
            <div class="image">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2017/03/keansburg-beach-tom-simpson.jpg" alt="">
            </div>
            <p>PHOTO CREDIT: Tom Simpson</p>
        </div>
        <div class="main-body-right">
            <div class="title">
                <h2>Keansburg Beaches</h2>
                <p>Families have been enjoying the scenic beaches of Keansburg Amusement Park for over 100 years.  Not only are our beaches <b>FREE</b>, but offer a beautiful summer breeze while overlooking the skyline of lower Manhattan.</p>
                <ul>
                    <li>Beaches have NO lifeguards. Swim at your own risk.</li>
                    <li>Beach fires and grilling are strictly prohibited. Police will be called and fines will assessed for violations.</li>
                    <li>Garbage cans are provided. Please help us to keep YOUR beach clean.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection