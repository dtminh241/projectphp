@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/rapidsattractions/fishing-pier.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Fishing Pier</h1>
    </div>
    <div class="main-body">
        <div class="title">
            <h2>Keansburg Fishing Pier Open Daily!</h2>
            <p>Enjoy the Day Fishing on Our 2000 foot Pier Overlooking the Raritan Bay</p>
            <p>For Hours of Operation Please Call 732-495-8842</p>
        </div>
        <div class="main-inside">
            <div class="main-body-left">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/ii_14ced2611980fc9a-1024x768.jpeg" alt="">
            </div>
            <div class="main-body-right">
                <h2>Pricing</h2>
                <p>$10.00 Per Person 2 pole Limit</p>
                <p>$5.00 Per Child under 48″</p>
                <p>Tuesdays Seniors fish for $7.00</p>
                <p style="font-size: 12px; color:grey;">Group Rates Available for Organizations</p>
                <p style="font-size: 12px; color:grey;">732-495-8842</p>
                <div class="text">
                    <p><b>For Hours of Operation Please Call 732-495-8842</b></p>
                    <h3>Bait & Tackle Available on Site</h3>
                    <h3>Pole & Scoop Net Rentals Also Available</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/header.js') }}"></script>
@endsection