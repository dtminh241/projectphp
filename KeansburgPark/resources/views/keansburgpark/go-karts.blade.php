@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/rapidsattractions/go-karts.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Go Karts</h1>
    </div>
    <div class="main-body">
        <div class="main-body-left">
            <div class="title">
                <h2>Height Requirements</h2>
            </div>
            <table>
                <tr>
                    <td>The Short Track</td>
                    <td style="text-align: right;">42"-54"</td>
                </tr>
                <tr>
                    <td>The Grand Prix </td>
                    <td style="text-align: right;">54" and Above</td>
                </tr>
            </table>
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/03/GoKarts1.jpg" alt="">
        </div>
        <div class="main-body-right">
            <div class="title">
                <h2>Pricing</h2>
            </div>
            <table>
                <tr>
                    <td>The Grand Prix Track</td>
                    <td style="text-align: right;">$7.95</td>
                </tr>
                <tr>
                    <td>Double Seater</td>
                    <td style="text-align: right;">$9.95</td>
                </tr>
                <tr>
                    <td>The Short Track</td>
                    <td style="text-align: right;">$4.95</td>
                </tr>
                <tr>
                    <td>Book of 4 Adult Rides</td>
                    <td style="text-align: right;">$29.95</td>
                </tr>
                <tr>
                    <td>Book of 8 Adult Rides</td>
                    <td style="text-align: right;">$49.95</td>
                </tr>
            </table>
            <div class="text">
                <p>Go Kart tickets must be purchased separately at the Go Kart Ticket Booth. Go Karts are not included in any wristband special.  Closed toe shoes must be worn when operating a go kart.</p>
                <p>*Closing time varies for Runaway Rapids water park and is dependent upon park occupancy and/or buy-out events. Please call 732-495-5240 for details on Runaway Rapids closing times from Memorial Day to Labor Day. Otherwise call 732-495-1400 for additional information.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/header.js') }}"></script>
@endsection