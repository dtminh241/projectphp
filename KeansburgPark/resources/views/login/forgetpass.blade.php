@extends('layouts.masterlogin')

@section('css')
    <style>
        .main{
            width: 30%;
            margin: 0 auto;
            padding: 5px 10px; 
            padding-bottom: 50px;
            margin-top: 50px;
        }
        .row input{
            width: 95%;
            margin-left: 10px;
            margin-bottom: 10px;
        }

    </style>
@endsection

@section('content')
<div class="main border">
    <div class="title">
        <h2>Recovery</h2>
    </div>
    <form action="{{ route('account-createcode') }}" method="post">
        @csrf
        <div class="row">
            <label class="form-label" for="">Enter your email</label>
            <input class="form-control" type="email" name="email" placeholder="Email">
        </div>
        <button class="btn btn-success float-start">Send</button>
    </form>
    <a href="{{ route("login-account") }}" ><button class="btn btn-danger float-end">Back</button></a>
</div>
@endsection

@section('js')
@if (\Session::get('error') == 1)
    <script>
        alert('Email not found')
    </script>
    @php
        \Session::forget('error')
    @endphp
@elseif (\Session::get('error') == 2)
    <script>
        alert('ERROR!!! Must enter your email')
    </script>
    @php
        \Session::forget('error')
    @endphp
@endif
@endsection