@extends('layouts.master2')

@section('css')
    
@endsection

@section('content')
<div class="title">
    <h2>Change Password</h2>
</div>
<div class="info">
    <form action="{{ route('user-paschanged') }}" method="post">
        @csrf
        <input type="number" name="id" value="{{ $id }}" hidden>
        @if ($id == 1)
        <div class="password mb-3 mt-3">
            <label for="old-pw" class="form-label">Old Password:</label>
            <input type="password" class="form-control" id="old-pw" placeholder="Enter old password" name="oldpw">
        </div>
        @endif
        <div class="password mb-3">
            <label for="new-pw" class="form-label">New Password:</label>
            <input type="password" class="form-control" id="newpw" placeholder="Enter new password" name="newpw">
        </div>

        <div class="password mb-3">
            <label for="new-pw-2" class="form-label">Retype New Password:</label>
            <input type="password" class="form-control" id="newpw2" placeholder="Re-enter new password" name="newpw2">
        </div>

        <div class="submit mb-3">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection

@section('js')
@if (\Session::has('error')) 
    <script>
        alert("ERROR!!! Old password ");
    </script>
    @php
       \Session::forget('error'); 
    @endphp
@endif
<script>
    $('.btn-primary').click(function(e) {
        if ($('#newpw').val().length < 8) {
            e.preventDefault();
            alert("ERROR!!! PASSWORD's length is more than 8 character ");
        }
        if ($('#newpw').val() != $('#newpw2').val()) {
            e.preventDefault();
            alert("ERROR!!! CHECK NEW PASSWORD");
        }
    })
</script>
@endsection