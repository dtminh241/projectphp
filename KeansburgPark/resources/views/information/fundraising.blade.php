@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/information/fundraising.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="heading-main">
        <h1>Fundraising</h1>
    </div>
    <div class="body-main">
        <div class="info">
            <div class="title-info">
                <h2>Turn Your Fundraising Into Fun-Raising!</h2>
            </div>
            <div class="info-body">
                <p>Keansburg Amusement Park and Runaway Rapids is proud to be a part of the community we live in. And as such, we are happy to support the many organizations and people who spend time at our parks. We receive thousands of requests for donations a year, and while we would love to honor all donation requests, it is simply not possible. To ensure every organization - school PTO/PTA groups, sports teams, and other non-profits have an opportunity to raise money we have come up with our Fun-Raising Weeks. During two weeks of every season your organization can host an event at a discounted rate at either Keansburg Amusement Park, Runaway Rapids or BOTH to raise funds for your organization.</p>
                <p>Our Fun-raising weeks for 2020 season are June 14 to June 25. It's right at the end of the school year so your school or organization can have fun and make money! Our Fundraisers are priced at a significant discount to our regular Group Sales pricing.</p>
                <p>Let us host your next fundraiser & we will turn it into a family-fun day event! Keansburg Amusement Park & Runaway Rapids offer a profitable fundraiser in a clean-family friendly event at a great value! It's as simple as 1, 2, 3
                <ol>
                    <li>Choose your date and time from June 12th to June 23rd</li>
                    <li>Sell tickets to your members, friends and family</li>
                    <li>Show up and have FUN!</li>
                </ol>
                </p>
                <p>Keansburg Amusement Park & Runaway Rapids put the fun back in school fund raising!</p>
                <br>
                <p>To book your Fun-Raiser call Meghan Golden at 732-495-1400 ext. 3 or email at <a href="http://">Mgolden@keansburgamusementpark.com</a></p>
                <p><b>Here's how profitable your Runaway Rapids FUN-raiser can be!</b></p>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th># Of Attendees</th>
                            <th>Selling Price</th>
                            <th>Your Cost</th>
                            <th>Profit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>75 People</td>
                            <td>$23</td>
                            <td>$13</td>
                            <td>$750</td>
                        </tr>
                        <tr>
                            <td>100 People</td>
                            <td>$23</td>
                            <td>$13</td>
                            <td>$1000</td>
                        </tr>
                        <tr>
                            <td>200 People</td>
                            <td>$23</td>
                            <td>$13</td>
                            <td>$2000</td>
                        </tr>
                        <tr>
                            <td>400 People</td>
                            <td>$23</td>
                            <td>$13</td>
                            <td>$4000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg/img/title-divider.png" alt="">
        <div class="choose-from">
            <div class="choose-from-left">
                <h2>Two Deals to Choose From</h2>
                <p><b>2+2 Deal</b> - You pay $26 per person for 2 hours at Runaway Rapids and 2 hours at Keansburg Amusement Park, charge $36 per person for a $10 per person profit and 4 hours of FUN!</p>
                <p><b>A+ Award</b>- You pay $13 per person for 2 hours at either Keansburg Amusement Park or Runaway Rapids and charge $23 per person for Above Average FUN!</p>
                <p>Valid June 14th through June 25th (not valid weekends)
                    <ul>
                        <li>Book your FUN-raiser during or after school</li>
                        <li>We offer you a discounted ticket for a designated day and time for your school group, non-profit, team celebration or church group to have fun all while generating a profit!</li>
                    </ul>
                </p>
                <p>Call Meghan Golden at 732-495-1400 ext 3</p>
                <p>Or email at <a href="http://">Mgolden@keansburgamusementpark.com</a></p>
                <p>To book your FUN-raiser TODAY!</p>
            </div>
            <div class="choose-from-right">
                <div class="image1">
                    <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/Bumper-Cars.png" alt="">
                </div>
                <div class="image2">
                    <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/04/Tubes.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/information/fundraising.js") }}"></script>
@endsection