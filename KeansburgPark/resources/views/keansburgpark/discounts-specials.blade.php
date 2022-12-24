@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/ticket/discounts-specials.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Discounts & Specials</h1>
    </div>
    <div class="main-body">
        <div class="main-inside">
            <div class="main-left">
                <div class="image" style="margin-bottom: 30px;">
                    <img src="https://keansburgamusementpark.com/wp-content/uploads/2020/06/discounts-specialskiddieday-04.jpg" alt="">
                </div>
                <p style="color: grey; margin-bottom: 20px;"><b>Valid 2022 Season</b> 6/14/2022 - 8/30/22 (excludes Go Karts) 11am - 8pm</p>
                <p style="color: grey;">Grandparent's will receive a free wristband for either the Waterpark (3 hour admission) or the Amusement Park (Unlimited rides) by purchasing corresponding wristband for their grandchild (Waterpark toddler rate valid). Limit 1 grandparent per paid admission. Kids and parents will pay the prevailing Tuesday rate but their grandparents will enjoy the day on us! (Must be 55+ with valid ID)</p>
                <p style="margin-bottom: 20px;">Unlimited (11am- 8pm)  Kiddie & Family Rides Bracelet (Amusement Only)</p>
                <p style="color: #50c3c5; text-align: center;font-size: 32px;font-weight: 400;">$24/person</p>
                <p style="margin-bottom: 20px;">Unlimited (11am-8pm) Kiddie, Family & Thrill Rides Bracelet (Amusement Only)</p>
                <p style="margin-bottom: 50px;color: #50c3c5; text-align: center;font-size: 32px;font-weight: 400;">$32/person</p>
                <p>Prices includes NJ Amusement Park Sales Tax</p>
            </div>
            <div class="main-right">
                <div class="image" style="margin-bottom: 30px;">
                    <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/discounts-specials-03.jpg" alt="">
                </div>
                <p style="color: grey; margin-bottom: 20px;"><b>Valid 2022 Season</b> 5/6/2022 - 6/17/22 (excludes Go Karts)</p>
                <p style="margin-bottom: 20px;">Friday Night Spring Madness (Amusement Park) 5pm-10:30pm</p>
                <p style="color: #f241c3; text-align: center;font-size: 32px;font-weight: 400;">$20/person</p>
                <p style="color: grey; margin-bottom: 20px;"><b>Valid 2022 Season</b> 6/24/2022 - 9/9/22 (excludes Go Karts)</p>
                <p style="margin-bottom: 20px;">Friday Night Summer Madness (Amusement Park) 5pm-10:30</p>
                <p style="margin-bottom: 50px; color: #f241c3; text-align: center;font-size: 32px;font-weight: 400;">$24/person</p>
                <p>Prices includes NJ Amusement Park Sales Tax</p>
            </div>
        </div>
        <div class="main-end">
            <div class="image">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/discounts-specials-05.jpg" alt="">
            </div>
            <p style="margin-top: 30px;"><b>Excludes 4th of July and Labor Day</b></p>
            <p>3 Hours at Runaway Rapids, plus</p>
            <p>unlimited Rides at Keansburg Amusement Park</p>
            <p style="color: #ff5400;font-size: 32px;font-weight: 400;">$68/person cash</p>
            <p style="color: #ff5400;font-size: 32px; margin-bottom: 80px;font-weight: 400;">$70/person card</p>
            <p style="color: grey; margin-bottom: 20px;">*maximum of three bumper car rides per visit with All-You-Can-Ride Specials</p>
        </div>
        <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg/img/title-divider.png" alt="">
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection