<header>
    <div class="logo">
        <div class="left-logo">
            <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/02/kap_logo.png" alt="">
        </div>
        <div class="center-logo">
            <img src="https://keansburgamusementpark.com/wp-content/themes/keansburg-child/img/RR_Logo.png" alt="">
        </div>
        <div class="right-logo">
            <div class="top-logo">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2018/06/calendar-hdr.png" alt="">
            </div>
            <div class="bot-logo">
                <img src="https://keansburgamusementpark.com/wp-content/uploads/2018/06/coupons-hdr.png" alt="">
            </div>
        </div>
        <div class="login">
            <p><a href="http://">Login</a> / <a href="http://">Register</a></p>
        </div>
    </div>
    <div class="nav">
        <ul>
            <li><i class="fa-solid fa-house"></i></li>
            <li class="nav-rides-attractions">Rides & Attractions</li>
            <li class="nav-tickets">Tickets</li>
            <li class="nav-food"><a href="{{ route('food-showfood') }}">Food</a></li>
            <li class="nav-information">Information</li>
            <li class="nav-group-party">Group & Parties</li>
            <li class="nav-shop">Shop</li>
            <li><i class="fa-solid fa-cart-shopping"></i></li>
        </ul>
        <div class="rides-nav">
            <ul> 
                <a href="{{ route('rides-showRR') }}"><li>Runaway Rapids</li></a>
                <a href="{{ route('show',"hollowgraves-haunted-manor") }}"><li>Hollowgraves Haunted Manor</li></a>
                <a href="{{ route('show',"go-karts") }}"><li>Go Karts</li></a>
                <a href="{{ route('show',"beach") }}"><li>Beach</li></a>
                <a href="{{ route('show',"batting-cages") }}"><li>Batting Cages</li></a>
                <a href="{{ route('show',"arcades") }}"><li>Arcades</li></a>
                <a href="{{ route('show',"fishing-pier") }}"><li>Fishing Pier</li></a>
            </ul>
        </div>
        <div class="tickets-nav">
            <ul> 
                <a href="{{ route('show',"ticket-information") }}"><li>Ticket Information</li></a>
                <a href="{{ route('rides-showTimeTicket'); }}"><li>Ride Height & Ticketing</li></a>
                <a href="{{ route('show',"discounts-specials") }}"><li>Discounts & Specials</li></a>
                <li>Buy Tickets</li>
            </ul>
        </div>
        <div class="information-nav">
            <ul>
                <a href="{{ route('show',"general-information") }}"><li>General Information</li></a>
                <a href="{{ route('show',"directions-parking") }}"><li>Directions & Parking</li></a>
                <a href="{{ route("information-operating") }}"><li>Operating Calendar</li></a>
                <a href="{{ route('information-showhistory') }}"><li>History</li></a>
                <a href="{{ route('news-shownews') }}"><li>News</li></a>
                <a href="{{ route("information-parkmap") }}"><li>Park Map</li></a>
                <a href="{{ route('information-showAccommodations') }}"><li>Accommodations</li></a>
                <a href="{{ route('show',"service-animals") }}"><li>Service Animals</li></a>
                <a href="{{ route('information-showEvent') }}"><li>Events</li></a>
                <a href="{{ route('show',"fundraising")}}"><li>Fundraising</li></a>
            </ul>
        </div>
        <div class="group-nav">
            <ul>
                <a href="{{ route('show',"group-package") }}"><li>Group Packages</li></a>
                <a href="{{ route('show',"birthday-package") }}"><li>Birthday Packages</li></a>
            </ul>
        </div>
    </div>
</header>