@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/ticket/ride-height-ticket.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="title">
        <h1>Ride Height & Ticketing</h1>
    </div>
    <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg/img/title-divider.png" alt="">
    <div class="kiddie">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kiddie Rides</th>
                    <th>Tickets Needed</th>
                    <th>Minimum Height Required</th>
                    <th>Adults Allowed to Ride?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($timekid as $item)
                    <tr>
                        <td>{{ $item->Kiddie_Rides }}</td>
                        <td>{{ $item->Tickets_Needed }}</td>
                        <td>{{ $item->Minimum_Height_Required }}</td>
                        <td>{{ $item->Adults_Allowed_to_Ride }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="major">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Major Rides</th>
                    <th>Tickets Needed</th>
                    <th>Minimum Height Required</th>
                    <th>Adults Allowed to Ride?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($timemajor as $item)
                    <tr>
                        <td>{{ $item->Major_Rides }}</td>
                        <td>{{ $item->Tickets_Needed }}</td>
                        <td>{{ $item->Minimum_Height_Required }}</td>
                        <td>{{ $item->Adults_Allowed_to_Ride }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection