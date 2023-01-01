@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/home-keansburg.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <img src="https://keansburgamusementpark.com/wp-content/uploads/revslider/big-main/no1_text.png" alt="">
    </div>
    <div class="main-body">
        <div class="info-event">
            <marquee behavior="scroll" direction="">BUY ONE GET ONE FREE TICKET SALE EXTENDED UNTIL CHRISTMAS. PURCHASE ONLINE AS SOON AS POSSIBLE TO GUARANTEE DELIVERY FOR CHRISTMAS.BOTH PARKS ARE NOW CLOSED FOR THE 2002 season.</marquee>
        </div>
        <div class="intro">
            <div class="intro-left">
                <div class="title-intro">
                    <h4>Keansburg Amusement Park</h4>
                </div>
                <div class="intro-body-left">
                    <p>BUY ONE GET ONE FREE TICKET SALE EXTENDED UNTIL CHRISTMAS! PURCHASE ONLINE ASAP TO GUARANTEE DELIVERY FOR THE HOLIDAYS!</p>
                    <p>Amusement park is now CLOSED for the 2022 season. SEE YOU NEXT YEAR!</p>
                </div>
            </div>
            <div class="intro-right">
                <div class="title-intro">
                    <h4>Runaway Rapids</h4>
                </div>
                <div class="intro-body-right">
                    <p>Waterpark is closed for the 2022 season and will reopen Memorial Day Weekend 2023</p>
                    <p>Closing Hours are based on weather & park attendance. Check our <a href="https://www.facebook.com/KeansburgAmusementRunawayRapids?fref=ts" target="_blank">Facebook Page</a> for the latest info.</p>
                    <div class="intro-body-right-inside">
                        <div class="intro-right-inside-left">
                            <img src="https://keansburgamusementpark.com/wp-content/uploads/2019/07/sun-with-sunglasses.png" alt="">
                        </div>
                        <div class="intro-right-inside-left">
                            <div class="text">
                                <p>RUNAWAY RAPIDS WEATHER GUARANTEE</p>
                            </div>
                            <div class="intro-right-inside-right-body">
                                <p>If, in the event that Runaway Rapids closes and does NOT reopen due to rain/thunderstorms & you have NOT received your full admission time, Runaway Rapids will issue you a rain-check to come back this year (2022) for a future visit at NO cost to you</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fun-for-day">
            <div class="title-fun-for-day">
                <h2>FUN for DAYS</h2>
            </div>
            <div class="image-fun">
                <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg/img/title-divider.png" alt="">
            </div>
            <div class="fun-for-day-body">
                <div class="runaway-rapids" style="padding: 0 15px">
                    <div class="image-runaway">
                        <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/01/girl_tube.png" alt="">
                    </div>
                    <div class="text-runaway">
                        <a href="{{ route('rides-showRR') }}"><h2>Runaway Rapids</h2></a>
                        <p style="color: #3d007b;">Play it cool.</p>
                        <p>Runaway Rapid Water Park has over 18 slides with varying speed, heights and splash zones, kiddie lagoon, and separate toddler play area, crazy lazy river, two relaxing spa pools, and more!</p>
                    </div>
                </div>
                <div class="fast-fun" style="padding: 0 15px">
                    <div class="image-fast-fun">
                        <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/gokart_home.png" alt="">
                    </div>
                    <div class="text-fast-fun">
                        <a href="{{ route('show','go-karts') }}"><h2>Go Karts</h2></a>
                        <p style="color: #3d007b;">Fast, fun and in the sun.</p>
                        <p>Fast Trax Go Karts is a family favorite offering two exciting tracks. The younger children can enjoy their own smaller cars that are carefully supervised on a separate kid-sized track.</p>
                    </div>
                </div>
                <div class="rides-game" style="padding: 0 15px">
                    <div class="image-rides-game">
                        <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/01/home_circle_rides.png" alt="">
                    </div>
                    <div class="text-rides-game">
                        <a href="{{ route('rides-showRR') }}"><h2>Amusement Park</h2></a>
                        <p style="color: #3d007b;">Rides & Games & Food, Oh my!</p>
                        <p>Keansburg Amusement Park is filled with dozens of exciting rides, fun games, three large family arcade centers, and an abundance of delicious boardwalk food.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="qc">
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2020/08/parking-1.jpg" alt="">
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection