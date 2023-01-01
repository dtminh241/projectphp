<header>
    <div class="logo">
        <div class="left-logo">
            <a href="{{ route('show','keansburg-park') }}"><img src="https://keansburgamusementpark.com/wp-content/uploads/2015/02/kap_logo.png" alt=""></a>
        </div>
        <div class="center-logo">
            <a href="{{ route('rides-showRR') }}"><img src="https://keansburgamusementpark.com/wp-content/themes/keansburg-child/img/RR_Logo.png" alt=""></a>
        </div>
        <div class="right-logo">
            <div class="top-logo">
                <a href="{{ route("information-operating") }}"><img src="https://keansburgamusementpark.com/wp-content/uploads/2018/06/calendar-hdr.png" alt=""></a>
            </div>
            <div class="bot-logo">
                <a href="{{ route("counpons") }}"><img src="https://keansburgamusementpark.com/wp-content/uploads/2018/06/coupons-hdr.png" alt=""></a>
            </div>
        </div>
        @if (\Session::has('token') == false)
        <div class="login">
            <p><a href="{{ route("login-account") }}">Login account</a></p>
        </div>
        @endif
    </div>
    <div class="nav">
        <ul>  
            <a href="{{ route('show','keansburg-park') }}"><li><i class="fa-solid fa-house"></i></li></a>
            <li class="nav-rides-attractions">Rides & Attractions</li>
            <li class="nav-tickets">Tickets</li>
            <a href="{{ route('food-showfood') }}"><li class="nav-food">Food</li></a>
            <li class="nav-information">Information</li>
            <li class="nav-group-party">Group & Parties</li>
            <a href="{{ route('shop-showshop') }}"><li class="nav-shop">Shop</li></a>
            <a href="{{ route('cart-showcart') }}"><li><i class="fa-solid fa-cart-shopping"></i></li></a>
        </ul>
        @if (\Session::has('token') == true)
        <div class="account-login">
            <p><img src="{{ asset("image/14992789hung.jpg") }}" alt="">&ensp;{{ \Session::get('name') }}&emsp;<i class="fa-solid fa-sort-down"></i></p>
        </div>
        @endif
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
                <a href="{{ route('shop-showshop') }}"><li>Buy Tickets</li></a>
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
        <div class="account">
            <ul> 
                @if (\Session::get('permission') == 1)
                <a href="{{ route('administrator') }}"><li>Administrator page</li></a>
                @else
                <a href="{{ route('account-show') }}"><li>Account information</li></a>
                @endif
                <a href="{{ route('logout-account') }}"><li>Logout</li></a>
            </ul>
        </div>
    </div>
</header>