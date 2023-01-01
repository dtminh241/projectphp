@extends('layouts.masterlogin')

@section('css')
    <style>
        .main{
            width: 30%;
            height: 150px;
            margin: 0 auto;
            padding: 5px 10px; 
            margin-top: 50px;
        }
        form{
            text-align: center;
            display: flex
        }
        .form-control{
            margin-right: 20px;
        }
        .btn-primary{
            margin-right: 10px;
        }
    </style>
@endsection

@section('content')
<div class="main border">
    <div class="title">
        <h2>Enter code</h2>
    </div>
    <form action="{{ route('account-checkcode') }}" method="post">
        @csrf
        <input type="text" name="code" class="form-control mt-1 mr-2" style="height: 30px">
        <button class="btn btn-success">Check</button>
    </form>
    <a href="{{ route("login-account") }}"><button class="btn btn-danger float-end mt-3">Back</button></a>
    <a href="{{ route('account-foget') }}"><button class="btn btn-primary float-end mt-3">Send to</button></a>
</div>
</div>
@endsection

@section('js')
    @if (\Session::has('error'))
        <script>
            alert('ERROR CODE!!! ')
        </script>
        @php
            \Session::forget('error')
        @endphp
    @endif
@endsection