@extends('layouts.master2')

@section('css')

@endsection

@section('content')
    <h1>Welcome {{ $name }}</h1>
    <form action="{{ route('user-changepass') }}" method="post">
        @csrf
        <input type="number" name="id" value="{{ $id }}" hidden>
        <button class="btn btn-primary">Change password</button>
    </form>
@endsection

@section('js')
    
@endsection