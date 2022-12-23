@extends('layouts.master')

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/information/directionparking.css") }}">
@endsection

@section('content')
    <div class="main">
        <div class="header-main">
            <h1>Directions & Parking</h1>
        </div>
        <div class="main-body">
            <div class="map">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/03/directions1.jpg" alt="">
            </div>
            <div class="infor-address">
                <p class="gist">From the North:</p>
                <p>Take NJ Turnpike South to Exit 11</p>
                <p>Follow to Garden State Parkway South to Exit 117</p>
                <p>See Below</p>
                <p class="gist">From Staten Island:</p>
                <p>Take Outerbridge Crossing to Garden State Parkway South to Exit 117</p>
                <p>See Below</p>
                <p class="gist">From the South:</p>
                <p>Take Garden State Parkway North to Exit 117</p>
                <p>See Below</p>
                <p class="gist">From State Highway 35:</p>
                <p>Go North through Middletown to Palmer Avenue (Target Store on right)</p>
                <p>Turn right onto Palmer Avenue</p>
                <p>Go straight for 3 1/2 miles to beach</p>
                <p class="gist">From Garden State Parkway 117:</p>
                <p>Follow signs for Route 36 East</p>
                <p>Go straight for 4 miles on Route 36 East</p>
                <p>Take jughandle for Laurel Avenue and turn left to cross over Route 36</p>
                <p>Follow Laurel Avenue for 1 mile into Keansburg</p>
                <p class="gist">PARKING:</p>
                <p>It is more convenient for guests to use the lot behind the amusement park. The cost to park a car ALL DAY LONG is $7.00 Monday through Friday and $10.00 a car ALL DAY LONG Weekends & Holidays.</p>
                <p>Metered parking is limited and available on the street and in the lot north of the amusement park. The Borough of Keansburg owns and operates the meters and strictly enforces any time infractions. Parking violation tickets are given by the Borough of Keansburg for any expired meter.</p>
                <p class="gist">Other Parking Rules:
                    <ul>
                        <li>NO in and out of the lot allowed</li>
                        <li>NO tailgating</li>
                        <li>Lot closes 1/2 hour after park closes. Absolutely NO overnight parking.</li>
                    </ul>
                </p>
                <p class="gist">TRANSPORTATION:</p>
                <p>Buses leave out of Port Authority, New York City. The destination stop is Beachway, Keansburg. To view the schedule, follow these steps:</p>
                <p class="gist">Go to the Academy Bus Lines web site</p>                
                <p>Click on “Commuter” at top of home page</p>
                <p>Click on “Schedules”</p>
                <p>Click on “Route 36 to Port Authority”</p>
                <p>Our destination is Keansburg/Beachway</p>
                <p class="gist">Academy Bus Lines</p>
                <p>732-888-2798</p>
                <p><a href="http://www.academybus.com">www.academybus.com</a></p>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset("js/information/directionparking.js") }}"></script>  
@endsection