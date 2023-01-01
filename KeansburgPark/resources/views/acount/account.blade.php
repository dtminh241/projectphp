@extends('layouts.masteraccount')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/account-info.css") }}">
@endsection

@section('content')
<div class="title">
    <h2>Account Information</h2>
</div>
<div class="info">
    <form action="{{ route('account-update') }}" method="post">
        @csrf
        <input type="number" name="id" value="{{ $data->id }}" hidden>
        <div class="username mb-3 mt-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" value="{{ $data->name }}" name="username">
        </div>
        <div class="gender mb-3">
            <label for="gender" class="form-label">Gender:</label>
            @if ($data->gender == 'male' || ($data->gender != 'female' && $data->gender != 'orther'))
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>
                    <label class="form-check-label" for="radio1">Male</label>
                </div>
            @else
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="male">
                    <label class="form-check-label" for="radio1">Male</label>
                </div>
            @endif
            @if ($data->gender == 'female')
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="female" checked>
                    <label class="form-check-label" for="radio1">Female</label>
                </div>
            @else
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="female">
                    <label class="form-check-label" for="radio1">Female</label>
                </div>
            @endif  
            @if ($data->gender == 'orther')
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio3" name="gender" value="orther" checked>
                    <label class="form-check-label" for="radio3">Orther</label>
                </div>
            @else
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="orther">
                    <label class="form-check-label" for="radio1">Orther</label>
                </div>
            @endif
            
        </div>
        <div class="birthday mb-3">
            <label for="birthday" class="form-label">Birthday:</label>
            <select class="form-select" name="day">
                @if (isset($day))
                    <option selected value="{{$day}}">{{ $day }}</option>
                @else
                    <option value="0">[Day]</option>
                @endif
                @for ($i = 1; $i < 32; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            <select class="form-select" name="month">
                @if (isset($month))
                    <option selected value="{{$month}}">{{ $month }}</option>
                @else
                    <option value="0">[Month]</option>
                @endif
                <option value="1">January</option>
                <option value="2">Feburary</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select class="form-select" name="year">
                @if (isset($year))
                    <option selected value="{{$year}}">{{ $year }}</option>
                @else
                    <option value="0">[Year]</option>
                @endif
                @for ($i = 2023; $i > 1980; $i--)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
        <div class="address mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" value="{{ $data->address }}" name="address">
        </div>
        <div class="email mb-3">
            <label for="email" class="form-label">Email:</label>
            <input disabled type="email" class="form-control" id="email" value="{{ $data->email }}" name="email">
        </div>
        <div class="password mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input disabled type="password" class="form-control" id="pwd" value="****************" name="pswd">
        </div>
        <div class="phone mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="phone" class="form-control" id="phone" value="{{ $data->phone }}" name="phone">
        </div>
        <div class="submit mb-3">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection

@section('js')

@endsection