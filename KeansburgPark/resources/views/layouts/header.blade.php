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
                <li><a href="{{ route('rides-showRR') }}">Runaway Rapids</a></li>
                <li><a href="{{ route('show',"hollowgraves-haunted-manor") }}">Hollowgraves Haunted Manor</a></li>
                <li><a href="{{ route('show',"go-karts") }}">Go Karts</a></li>
                {{-- <li><a href="{{ route('show',"keansburg-games") }}">Keansburg Games</a></li> --}}
                <li><a href="{{ route('show',"beach") }}">Beach</a></li>
                <li><a href="{{ route('show',"batting-cages") }}">Batting Cages</a></li>
                <li><a href="{{ route('show',"arcades") }}">Arcades</a></li>
                <li><a href="{{ route('show',"fishing-pier") }}">Fishing Pier</a></li>
            </ul>
        </div>
        <div class="tickets-nav">
            <ul>
                <li>Ticket Information</li>
                <li>Ride Height & Ticketing</li>
                <li>Discounts & Specials</li>
                <li>Buy Tickets</li>
            </ul>
        </div>
        <div class="information-nav">
            <ul>
                <li><a href="{{ route('show',"general-information") }}">General Information</a></li>
                <li><a href="{{ route('show',"directions-parking") }}">Directions & Parking</a></li>
                <li><a href="{{ route("information-operating") }}">Operating Calendar</a></li>
                <li><a href="{{ route('information-showhistory') }}">History</a></li>
                <li><a href="{{ route('news-shownews') }}">News</a></li>
                <li><a href="{{ route("information-parkmap") }}">Park Map</a></li>
                <li><a href="{{ route('information-showAccommodations') }}">Accommodations</a></li>
                <li><a href="{{ route('show',"service-animals") }}">Service Animals</a></li>
                <li><a href="{{ route('information-showEvent') }}">Events</a></li>
                <li><a href="{{ route('show',"fundraising")}}">Fundraising</a></li>
            </ul>
        </div>
        <div class="group-nav">
            <ul>
                <li><a href="{{ route('show',"group-package") }}">Group Packages</a></li>
                <li><a href="{{ route('show',"birthday-package") }}">Birthday Packages</a></li>
            </ul>
        </div>
    </div>
</header>