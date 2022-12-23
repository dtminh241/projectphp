@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/grouppackages.css") }}">
@endsection

@section('content')
<div class="main-h">
    <div class="main-header" style="background-image: url('https://keansburgamusementpark.com/wp-content/uploads/2015/04/parties.jpg')";>
        <div><h1>Birthday Package</h1></div></div>
    </div>
</div>
<div class="main">
    <h2 class="mx-auto">OUR SPLASHTACULAR WATERPARK BIRTHDAY PARTY PACKAGE IS NOW AVAILABLE FOR ONLINE BOOKINGS! FOR ANY QUESTIONS PLEASE EMAIL BIRTHDAYS@KEANSBURGAMUSEMENTPARK.COM </h2><br><br>
</div>
<br><br>
<div class="main-2">
    <img class="image-birthday" src="https://keansburgamusementpark.com/wp-content/uploads/2016/01/splashtacular-party.png" alt="" width="100%" height="100%"><br><br><br><br><br>
    <p>This Splashtacular party is a great way to celebrate any birthday!</p><br>
    <h5><strong>BOOKINGS NOW AVAILABLE 2022</strong></h5><br>
</div><br><br><br>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection