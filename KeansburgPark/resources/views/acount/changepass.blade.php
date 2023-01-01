@extends('layouts.masteraccount')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/account-info.css") }}">
    <style>
        form div{
            display: block;
        }
    </style>
@endsection

@section('content')
<div class="title">
    <h2>Change Password</h2>
</div>
<div class="info">
    <form action="{{ route('account-changepassword') }}" method="post">
        @csrf
        <input type="number" name="id" value="{{ $id }}" hidden>
        <div class="password mb-3 mt-3">
            <label for="old-pw" class="form-label">Old Password:</label>
            <input type="password" class="form-control" id="old-pw" placeholder="Enter old password" name="oldpw">
        </div>

        <div class="password mb-3">
            <label for="new-pw" class="form-label">New Password:</label>
            <input type="password" class="form-control" id="new-pw" placeholder="Enter new password" name="newpw">
        </div>

        <div class="password mb-3">
            <label for="new-pw-2" class="form-label">Retype New Password:</label>
            <input type="password" class="form-control" id="new-pw-2" placeholder="Re-enter new password" name="newpw2">
        </div>

        <div class="submit mb-3">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection

@section('js')
    <script>
        $('.btn-primary').click(function(e) {
            if ($('#new-pw').val() != $('#new-pw-2').val()) {
                e.preventDefault();
                alert("ERROR!!! CHECK NEW PASSWORD");
            }
        })
    </script>
@endsection