@extends('layouts.masterlogin')

@section('css')
    <style>
        .main{
            width: 50%;
            margin: 0 auto;
        }
        form{
            background-color: rgb(142 0 255 / 4%);
            padding: 5px 25px;
        }
    </style>
@endsection

@section('content')
<div class="main">
    <div class="title">
        <h2>Change Password</h2>
    </div>
    <div class="info">
        <form action="{{ route('account-changepassforget') }}" method="post">
            @csrf
            <div class="passwordform mb-3">
                <label for="new-pw" class="form-label">New Password:</label>
                <input type="password" class="password-forget form-control " placeholder="Enter new password" name="newpw">
            </div>
            <div class="passwordform mb-3">
                <label for="new-pw-2" class="form-label">Retype New Password:</label>
                <input type="password" class="confirmpassword-forget form-control" placeholder="Re-enter new password" name="newpw2">
            </div>
    
            <div class="submitform mb-3">
                <button class="submit-forget btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
    @if (\Session::get('error') == 1) 
        <script>
            alert('Password must length more than 8 character !!');
        </script>
        @php
            \Session::forget('error');
        @endphp
    @endif
    @if (\Session::get('error') == 2) 
        <script>
            alert('ERROR !!! Password is not like Confirm password');
        </script>
        @php
            \Session::forget('error');
        @endphp
    @endif
@endsection