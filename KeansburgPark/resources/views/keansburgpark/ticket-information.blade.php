@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/ticket/ticket-information.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Ticket Information</h1>
    </div>
    <div class="main-body">
        <div class="main-inside">
            <div class="main-left">
                <div class="title">
                    <h2>Rides</h2>
                </div>
                <table>
                    <tr>
                        <td>Individual:</td>
                        <td>$1.25*</td>
                    </tr>
                    <tr>
                        <td>Sheet of 50 Tickets:</td>
                        <td>$45* ($42.20 + NJ sales tax)</td>
                    </tr>
                    <tr>
                        <td>Book of 100 Tickets:</td>
                        <td>$79* ($74.09 + NJ sales tax)</td>
                    </tr>
                    <tr>
                        <td>Book of 200 Tickets:</td>
                        <td>$149* ($139.74+ NJ sales tax)</td>
                    </tr>
                </table>
                <a href="{{ route('rides-showTicket') }}"><img src="https://keansburgamusementpark.com/wp-content/uploads/2015/03/get_tickets.png" alt=""></a>
            </div>
            <div class="main-center">
                <div class="title">
                    <h2>Go Karts</h2>
                </div>
                <table>
                    <tr>
                        <td>Adult Track</td>
                        <td>$7.95</td>
                    </tr>
                    <tr>
                        <td>Double Seater</td>
                        <td>$9.95</td>
                    </tr>
                    <tr>
                        <td>Kiddie Track</td>
                        <td>$4.95</td>
                    </tr>
                    <tr>
                        <td>Book of 4 Adult Rides</td>
                        <td>$29.95</td>
                    </tr>
                    <tr>
                        <td>Book of 8 Adult Rides</td>
                        <td>$49.95</td>
                    </tr>
                </table>
                <p style="color:grey; font-size:12px; line-height:16px">Go Kart tickets must be purchased separately at the Go Kart Ticket Booth. Go Karts are not included in any wristband special. <b>Closed toe shoes must be worn when operating a go kart.</b></p>
            </div>
            <div class="main-right">
                <div class="title">
                    <h2>Waterpark</h2>
                </div>
                <p>3 Hour Ticket Cash: <b>$37</b> Credit: <b>$38</b></p>
                <p>Splash Night Mon- Fri (4pm- close**) Cash: <b>$17</b> Credit: <b>$18</b></p>
                <p>Splash Night Saturday, Sunday & Holidays (4pm- close*)  Cash: <b>$24</b> Credit: <b>$25</b></p>
                <p>Ride Upgrade Wristband (Unlimited Amusement Park Rides) *ONLY available with Waterpark purchase* Cash: <b>$31</b> Credit: <b>$32</b></p>
                <p>Toddler Rate (Up to 42" tall) Cash: <b>$19</b> Credit: <b>$20</b></p>
                <p>Dry Spectators Cash: <b>$15</b> Credit <b>$16</b></p>
                <p>Lockers: <b>$20 ($10 refund upon key return)</b></p>
            </div>
        </div>
        <div class="text">
            <p>**Closing time for Splash Nights can vary**</p>
            <p>** RUNAWAY RAPIDS UNCONDITIONAL WEATHER GUARANTEE **</p>
            <p>-If, in the event that Runaway Rapids closes and does NOT reopen due to rain/thunderstorms & you have NOT received your full admission time, Runaway Rapids will issue you a rain-check to come back this year (2022) for a future visit at NO cost to you</p>
        </div>
        <div class="main-body-end">
            <div class="title">
                <h2>Combo Packages</h2>
            </div>
            <p>The Combination Pass is the perfect way to spend your day at Keansburg Amusement Park and Runaway Rapids.  Enjoy 3 hours at Runaway Rapids plus unlimited rides! To enjoy your Combination Pass, please enter the waterpark before enjoying the amusement park.</p>
            <p style="margin-bottom: 50px;">3 Hours at Runaway Rapids plus Unlimited Rides at Keansburg Amusement Park for Cash: <b>$68</b> Credit: <b>$70*</b></p>
            <a href="http://">Click Here for Daily Specials</a>
        </div>
    </div>
    <div class="main-end">
        <p>* Price includes NJ Sales Tax on any Amusement Park ticket purchase including Combo Packages.</p>
        <p>** Closing time varies for Runaway Rapids water park and is dependent upon park occupancy and/or buy-out events.</p>
        <p>Please call 732-495-5241 for details on Runaway Rapids closing times from Memorial Day to Labor Day.</p>
        <p>Otherwise call 732-495-1400 for additional information.</p>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection