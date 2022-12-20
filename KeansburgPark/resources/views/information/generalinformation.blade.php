@extends('layouts.master');

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .main{
            width: 100%;
            margin-bottom: 120px;
        }
        .header-main{
            margin-bottom: 50px;
            height: 200px;
            width: 100%;
            background-image: url("https://keansburgamusementpark.com/wp-content/uploads/2017/03/beach.jpg");
            background-size: cover;
            background-attachment: fixed;
            text-align: center;
            padding-top: 50px;
        }
        .header-main h1{
            font-family: "Zilla Slab",Arial, Helvetica, sans-serif;
            color: purple;
            margin-top: 30px
        }
        .main-body{
            width: 60%;
            margin: 0 auto;
        }
        span{
            font-size: 20px;
        }
        .infor{
            padding: 0px 15px;
            border: solid 1px rgb(250, 249, 249);
            margin-bottom: 10px;
            background-color: rgb(250, 249, 249);
            border-radius: 10px;
        }
        .title{
            font-family: 'Leckerli One', cursive;
        }
        .infor-body{
            background-color: rgb(250, 249, 249);
            padding: 15px;
            display:none;
        }
        .infor:hover{
            background-color: rgb(219, 219, 219);
        }
        .add{
            transition: heigth 2s;
            transition-timing-function: ease-in;
        }
        
        .gist{
            color: rgb(153, 72, 153);
        }
    </style>
@endsection

@section('content')
    <div class="main">
        <div class="header-main">
            <h1>General Information</h1>
        </div>
        <div class="main-body">
            <div class="row" onclick="show(this)">
                <div class="infor" >
                    <h2 class="title"><span class="tick">+</span> Keansburg Amusement Park</h2>
                </div>
                <div class="infor-body park">
                    <p>Keansburg Amusement Park offers over 40 rides including kiddie family and thrill rides. It is our
                        commitment to ensuring all of our guests have a safe and enjoyable visit.</p>
                    <p class="gist">WHAT ARE THE PHYSICAL, HEIGHT AND SAFETY REQUIREMENTS?</p>
                    <p>Rider requirements are set by the state of New Jersey. All requirements are subject to change.
                        Each attraction is inspected and subject to the laws in New Jersey. All state law requirements,
                        such as height and weight restrictions, are posted at each ride and are strictly enforced. Any
                        guest who violates any written safety regulation or engages in behavior that poses a safety
                        issue to either themselves or our guests may result in criminal prosecution under N.J.S.A
                        5:3-36.1. Any violator of park safety regulations may be subject to fines up to $1,000 and up to
                        6 months in prison. Children should be self supporting when riding rides.</p>
                    <p class="gist">CAN YOU RIDE WITH A CAST, OR A BRACE, OR WHILE PREGNANT?</p>
                    <p>For your safety, riders with hard or soft casts or splints of any kind, any type of brace, recent
                        surgery, back injuries or who are pregnant are NOT permitted on rides at Keansburg Amusement
                        Park.
                    </p>
                    <p class="gist">OPERATIONS & ATTRACTIONS</p>
                    <p>At times, for the safety of our guests, rides, and attractions will be closed for maintenance.
                        Refunds will not be given when attractions are closed for maintenance. Wristbands can not be
                        shared, traded, or exchanged. Wristbands are only valid on day of purchase. Ride rules vary.
                        Please check signs on entrances.
                    </p>
                    <p class="gist">RIDE RESTRAINT SYSTEMS</p>
                    <p>All guests are required to use all ride restraint systems properly at all times. Guests who are
                        large framed, very tall or too small may not be allowed to ride certain rides due to safety
                        regulations. Any guest who tampers with a safety restraint system will be subject to prosecution
                        under New Jersey State Law. Any violator may be subject to fines up to $1000 and up to 6 months
                        in jail.
                    </p>
                    <p class="gist">LOOSE ARTICLES</p>
                    <p>Loose articles including cell phones, wallets, purses, keys, etc. may not be taken on thrill and
                        select family rides. Please leave all personal items while you are riding with a companion.
                        Employees are not allowed to watch over personal articles of guests.
                    </p>
                    <p class="gist">WHAT IS THE DRESS CODE?</p>
                    <p>Keansburg Amusement Park is a family-friendly amusement park. And as such, any clothing with
                        profanity, illegal substances or suggestive/offensive material is prohibited. For your safety,
                        shoes should be worn during your visit to the park at all times. Certain attractions, such as
                        our Go Karts, require closed toe shoes. All guests must be wearing a shirt while riding the
                        attraction. Guests may not wear swimwear out of courtesy to our other guests.
                    </p>
                    <p class="gist">APPROPRIATE BEHAVIOR</p>
                    <p>Keansburg Amusement Park is a family friendly amusement park and privately owned. We reserve the
                        right to remove any guest who prevents other guests from enjoying the park. Any guest who is
                        removed from the park will not be issued a refund.
                    </p>
                    <p class="gist">ALCOHOLIC BEVERAGES</p>
                    <p>Outside alcoholic beverages are not permitted at Keansburg Amusement Park. Guests may visit our
                        three establishments, The Olde Heidelberg, The Pavilion, and The Miami Club to enjoy alcoholic
                        beverages. Any beverage purchased at these establishments may not be taken outside the confines
                        of such establishment.</p>
                    <p class="gist">CAN YOU GRILL AT THE PARK?</p>
                    <p>Grilling is prohibited at Keansburg Amusement Park</p>
                    <p class="gist">WHAT IS THE WEATHER POLICY?</p>
                    <p>When there is inclement weather, rides may be temporarily suspended. Rides will reopen when it is
                        deemed to safely resume operations.</p>
                    <p class="gist">ARE PETS, SKATEBOARDS & BIKES ALLOWED?</p>
                    <p>For the safety of our guests, pets, skateboards, and bikes are not permitted at Keansburg
                        Amusement Park.</p>
                    <p class="gist">WHAT KIND OF FOOD DOES THE PARK OFFER?</p>
                    <p>There are several Jersey boardwalk style food establishments at Keansburg Amusement Park at very
                        affordable prices including ice cream, hot dogs, pizza and more.</p>
                    <p class="gist">WHERE IS THE MOST CONVENIENT PLACE TO PARK?</p>
                    <p>It is more convenient for our Guests to park in the lot behind the amusement park. Guests can
                        enter the parking lot by driving under the Keansburg archway and proceed to the parking
                        attendent. The cost to park ALL DAY LONG is $7 Monday through Friday and $10 on weekends and
                        holidays. All guests who park in this lot will receive a coupon sheet full of savings available
                        at Keansburg Amusement Park. Coupon Sheets are only available for customers who park in the
                        Keansburg Amusement Park lot which is located under the Keansburg archway next to the batting
                        cages. One coupon sheet per car.</p>
                    <p>Metered parking is limited and available on the street and in the lot next to the Go-Kart tracks.
                        The Borough of Keansburg owns and operates the meters and strictly enforces any time
                        infractions. Please note that parking tickets will be given to any expired meters, which are
                        owned and operated by the Borough of Keansburg.</p>
                    <p class="gist">WHAT COUPONS DOES THE PARK ACCEPT</p>
                    <p>Keansburg Amusement Park only accepts coupons that come directly from the park, Kidstuff, Local
                        Flavor and Groupon. All coupons from third party vendors such as Entertainment Book, Yipit, HUM
                        by Verizon, etc. are not valid and will not be honored.</p>
                </div>
            </div>
            <div class="row" onclick="show(this)">
                <div class="infor" >
                    <h2 class="title"><span class="tick">+</span> Runaway Rapids</h2>
                </div>
                <div class="infor-body rapids">
                    <p class="gist">WHAT ARE THE PHYSICAL REQUIREMENTS & HEIGHT AND SAFETY</p>
                    <p>Runaway Rapids is a family-friendly, participatory waterpark with physically demanding
                        activities. It is our Guest’s responsibility to know and understand their own physical
                        limitations, capabilities and swim ability before engaging in activity at the waterpark. If you
                        are “non-athletic” in nature or overweight for your body type, we urge you to use caution when
                        choosing which activities, you choose to participate in at the waterpark.</p>
                    <p class="gist">CAN YOU PARTICIPATE WITH A CAST, OR A BRACE, OR WHILE PREGNANT?</p>
                    <p>For your safety, riders with casts, braces or splints of any kind, recent surgery, back injuries
                        or who are pregnant are NOT permitted on rides at Runaway Rapids Waterpark.</p>
                    <p class="gist">ARE THERE HEIGHT AND SAFETY REQUIREMENTS?</p>
                    <p>All Guests must obey all height and safety restrictions posted at each attraction. All height and
                        safety requirements are set by the park, attractions manufacturer, and state New Jersey.
                        Additionally, all guests who participate must have full body control, ability to climb all
                        stairs to slides without assistance and ability to hold themselves in the position required to
                        ride the attraction. All height and safety requirements are listed under each attraction on our
                        website.</p>
                    <p class="gist">DO YOU PROVIDE LIFE JACKETS?</p>
                    <p>Only you know your swimming ability, and that of your children and anyone you are supervising. We
                        strongly recommend all guests under 48” who are weak swimmers or non-swimmers wear a U.S. Coast
                        Guard-approved life jacket. We offer FREE of charge life jackets throughout Runaway Rapids
                        Waterpark.</p>
                    <p class="gist">WHAT IS THE DRESS CODE?</p>
                    <p>Bathing suits are required for all water attractions in the water park. There are two reasons why
                        proper bathing attire is necessary at Runaway Rapids Waterpark:
                    <ol>
                        <li><b>Safety</b> – bathing suits are lightweight and are made to not absorb a lot of water,
                            making it
                            much easier for a person to swim. If a person is wearing clothes other than a bathing suit,
                            it can hamper the rescue and endanger the life of the individual or lifeguard.</li>
                        <li><b>Hygiene</b> – typically bathing suits are only worn to swim in and not for other
                            activities.
                            Street clothing or other clothing such as underclothes can introduce bacteria into the
                            water. Street clothing can also introduce much more detergent and dirt as well as dyes into
                            the water which can also make it unsafe for people to swim in.</li>
                    </ol>
                    </p>
                    <p>Appropriate swimwear means suits designed specifically for swimming, made of synthetic materials
                        such as polyester, nylon, and Lycra or spandex. Below is a list of clothing that is NOT
                        considered “Appropriate Swimwear”:
                    <ul>
                        <li>Workout Shorts</li>
                        <li>T-Shirts</li>
                        <li>Pants of all kinds including sweatpants and jeans (including cut off shorts)</li>
                        <li>Cover Ups</li>
                        <li>Sports Bras</li>
                        <li>All other clothing that is not specifically made for swimming</li>
                    </ul>
                    </p>
                    <p>Swimsuits with rivets, buckles, zippers or exposed metal are not allowed.</p>
                    <p>Hair Clips and Sunglasses are not recommended and should be worn at your own risk.</p>
                    <p class="gist">WHAT IS THE DIAPER POLICY?</p>
                    <p>For the safety of all of our guests, diapers are not permitted in any pool. All babies and
                        toddlers who wear diapers MUST wear disposable swim diapers or waterproof diaper covers to go in
                        the water. Changing diapers is not permitted in the pool or deck areas – changing stations are
                        located in our changing rooms. Approved swim diapers are available for purchase at The Tiki Hut
                        located in the waterpark.</p>
                    <p class="gist">ARE THERE, LIFEGUARDS?</p>
                    <p>Yes! We do have lifeguards stationed throughout the park. Our lifeguards are Ellis-trained and
                        are stationed throughout the park for your safety. The main job of our lifeguards is to ensure
                        our guests properly ride attractions in the safest manner possible.</p>
                    <p class="gist">WHERE CAN I STORE MY PERSONAL ARTICLES?</p>
                    <p>For your safety and your personal items security, lockers are available to rent at The Tiki Hut.
                        Lockers are $10 daily plus a $10 deposit for a total of $20. When you return your locker key, we
                        will return your $10 deposit. Please use lockers to protect your personal articles as Runaway
                        Rapids and its’ employees are not responsible for the loss of your valuables. The following
                        items are prohibited:
                    <ul>
                        <li>Alcohol</li>
                        <li>Glass bottles or containers</li>
                        <li>Pets</li>
                        <li>Coolers and outside food</li>
                    </ul>
                    </p>
                    <p>We reserve the right to inspect all guests and their items upon entering and exiting the park at
                        any time. All bags are subject to search.</p>
                    <p class="gist">CAN YOU BRING IN OUTSIDE FOOD?</p>
                    <p>Outside food is not permitted at Runaway Rapids. For your convenience, we offer several food
                        choices in the park.</p>
                    <p class="gist">CAN YOU GRILL AT THE PARK?</p>
                    <p>Grilling is strictly prohibited.</p>
                    <p class="gist">OPERATIONS & ATTRACTIONS</p>
                    <p>At times, for the safety of our guests, slides, and attractions will be closed for maintenance or
                        repairs. Refunds will not be given when attractions are closed for maintenance or repairs.</p>
                    <p class="gist">APPROPRIATE BEHAVIOR</p>
                    <p>Runaway Rapids is a family waterpark. As such our Guests are expected to obey all height and
                        safety restrictions and signage and act as such. Failure to follow both written and verbal rules
                        can result in injury to yourself or others and will result in immediate ejection from the
                        waterpark without refund.</p>
                    <p class="gist">CAN YOU SMOKE IN THE PARK?</p>
                    <p>Smoking in Runaway Rapids is prohibited.</p>
                    <p class="gist">WEATHER POLICY</p>
                    <p>In the event of inclement weather, Runaway Rapids will remain open unless there is severe weather
                        in the area (lightning, high winds, etc.) For the safety of our guests, when there are unsafe
                        conditions, we will close temporarily and will reopen shortly after, at that time we do extend
                        your time to ensure a full visit. Should the park need to close early due to severe weather, we
                        will issue a pass to come back. This pass must be obtained before leaving the park, we cannot
                        issue a weather related pass after you have left the park or the following day.</p>
                    <p class="gist">WHERE IS CONVENIENT PARKING?</p>
                    <p>It is more convenient for our Guests to park in the lot behind the amusement park. Guests can
                        enter the parking lot by driving under the Keansburg archway located next to the batting cages
                        and proceed to the parking attendant. The cost to park ALL DAY LONG is $5 Monday through Friday
                        and $7 on weekends and holidays. Waterpark Guests can easily cut through the amusement park to
                        enter the waterpark. All guests who park in the Keansburg Amusement Park will receive a coupon
                        sheet good for discounts at Keansburg Amusement Park. Coupon sheets are only available to people
                        who park in our lot. One coupon sheet per car.</p>
                    <p>Metered parking is limited and available on the street and in the lot next to the Go-Kart tracks.
                        The Borough of Keansburg owns and operates the meters and strictly enforces any time
                        infractions. Please note that parking tickets will be given to any expired meters, which are
                        owned and operated by the Borough of Keansburg.</p>
                    <p class="gist">WHAT KIND OF COUPONS DOES RUNAWAY RAPIDS ACCEPT</p>
                    <p>Runaway Rapids currently accepts coupons from Kidstuff, Groupon, LocalFlavor and any coupons
                        generated from the park. No third party coupons from sites such as HUM by Verizon, Entertainment
                        Book, Yipit and other coupon sites are not valid and will not be accepted.</p>
                </div>
            </div>
            <div class="row" onclick="show(this)">
                <div class="infor" >
                    <h2 class="title"><span class="tick">+</span> Group Outing</h2>
                </div>
                <div class="infor-body outing">
                    <p class="gist">WHAT IS MY FIRST TO BOOKING A GROUP OUTING?</p>
                    <p>Go to the <a href="http://">Group Packages</a> page, send us <a href="http://">an email</a> , or
                        call the office at 732-495-1400 ext. 3 to make your reservation.</p>
                    <p class="gist">HOW MANY CAMPERS DO I NEED FOR GROUP RATES?</p>
                    <p>All groups must have 25 or more in order to take advantage of our group rates</p>
                    <p class="gist">WHAT IF I DON'T COME WITH THE EXPECTED AMOUNT OF CAMPERS, DO I HAVE TO PAY FOR THEM?
                    </p>
                    <p>As long as you have 25 or more you will pay for the actual amount of campers you have. If you are
                        under 25 you must pay for the minimum of 25. If your numbers increase by 10 or more please call
                        the group sales office and let us know at 732-495-1400 ext. 3.</p>
                    <p class="gist">WHAT WILL I NEED TO GET BOOKED?</p>
                    <p>You will need your deposit and a contract to reserve your date.</p>
                    <p class="gist">WHERE DO WE GO WHEN WE ARRIVE?</p>
                    <p>If you are visiting the Waterpark, Amusement Park or both, please send two Group Representatives
                        to the front of the waterpark to check in.</p>
                    <p class="gist">CAN I PAY WITH A PERSONAL CHECK?</p>
                    <p>No, we do not accept personal checks the day of your trip. We will accept, Cash, Credit card, or
                        Business Checks.</p>
                    <p class="gist">CAN A CAMPER WITH A CAST GO ON ALL RIDES?</p>
                    <p>No camper can go on any rides in either park with a cast or any kind of brace due to insurance
                        requirements.</p>
                    <p class="gist">DOES THE WATERPARK PROVIDE LIFEJACKETS?</p>
                    <p>Yes, you may use any of the available life Jackets we supply at the waterpark.</p>
                    <p class="gist">ARE THERE HEIGHT AND/OR WEIGHT RESTRICTION ON RIDES & ATTRACTIONS?</p>
                    <p>Yes, you may view our website for height and weight restrictions on all of our rides &
                        attractions.</p>
                    <p class="gist">ARE THERE ANY RIDES AT THE WATER PARK WE CANNOT USE?</p>
                    <p>Yes, in order to protect our customers bringing campers we do not allow groups to enter the 10ft
                        pool. A waiver may be signed by each company who would like to take full responsibility for
                        their swimming abilities; however they must wear a life jacket in the 10ft pool regardless of
                        age.</p>
                    <p class="gist">WHAT IF WE RUN LATE FOR OUR SCHEDULED TIME?</p>
                    <p>If you are going to be late please call the waterpark and ask for group sales at 732-495-5241. It
                        depends on our busy day if we can allow more time for your group. By all means if we can
                        accommodate you, we will but there are times when you will lose time due to lateness.</p>
                    <p class="gist">DO YOU HAVE A FIRST AID STATION AT EACH PARK?</p>
                    <p>Yes, we do.</p>
                    <p class="gist">DO YOU HAVE GROUP RATE FOOD PACKAGES?</p>
                    <p>Yes, we do provide food packages at both parks. Call group sales at 732-495-1400 ext. 3 for
                        details.</p>
                    <p class="gist">IS THERE A RECREATION AREA FOR LUNCH?</p>
                    <p>Yes, we have several areas with picnic tables and a recreation area which we try to accommodate
                        everyone throughout the day. We cannot guarantee specific lunch time’s as some days will be
                        busier than others. We appreciate your cooperation in this matter.</p>
                    <p class="gist">CAN WE BRING OUR OWN LUNCH AND COOLERS?</p>
                    <p>No coolers or food are allowed in Runaway Rapids. However, you may bring your coolers and lunches
                        to the Amusement park side during your lunch time. There is no grill cooking allowed in our
                        park. You must remove all your belongings after lunch as other groups will also utilize the
                        area.</p>
                    <p class="gist">CAN OUR CHILDREN BRING THEIR BACKPACKS?
                    <ul>
                        <li><b>Keansburg Amusement Park</b>: Backpacks should be left on the bus during ride time as we
                            cannot leave them on the ground due to safety issues. We are not responsible for lost or
                            stolen items while children are riding the rides.</li>
                        <li><b>Runaway Rapids</b>: Yes, we will provide a bin for your group to put their backpacks in.
                            They must not leave any belongings on the ground as this is a safety matter.</li>
                    </ul>
                    </p>
                    <p class="gist">ARE THEIR LOCKERS AT THE WATERPARK?</p>
                    <p>Yes, for a fee you may rent a locker.</p>
                    <p class="gist">ARE THERE CHANGING ROOMS?</p>
                    <p>Yes, we do have changing rooms at the Waterpark.</p>
                    <p class="gist">DO ADULTS HAVE TO PAY TO RIDE THE RIDES WITH THE CHILDREN?</p>
                    <p>Yes, everyone riding the rides must pay.</p>
                </div>
            </div>
            <div class="row" onclick="show(this)">
                <div class="infor" >
                    <h2 class="title"><span class="tick">+</span> Birthday Parties</h2>
                </div>
                <div class="infor-body parties">
                    <p class="gist">WHERE DOES EACH PARTY MEET WHEN THEY ARRIVE?
                    <ul>
                        <li>PACKAGE 1: Party Splashtacular – Front gate at water park</li>
                    </ul>
                    </p>
                    <p class="gist">DO YOU ACCEPT CREDIT CARDS?</p>
                    <p>Yes, credit cards are accepted for both deposits and final payment.</p>
                    <p class="gist">DO I NEED TO PREARRANGE MY PARTY?</p>
                    <p>Yes, a minimum of 7 days advance registration is required with a 50% deposit. Please call (732)
                        495-1400 ext 7 or book online. . Parties are not confirmed until you receive a phone call
                        confirmation from our birthday party staff.</p>
                    <p class="gist">WILL SOMEONE FROM THE PARK COORDINATE THE PARTY?</p>
                    <p>Yes. Party chaperones are provided for all parties to help coordinate the guests’ arrival,
                        determine party location and celebration. The chaperone does not stay with the guests during
                        play time at the water park but does serve food along with ice cream and cake (if provided).
                        However, at the amusement park, the chaperone will escort guests around to the rides for
                        approximately one hour and then leave party under guest-provided supervision, in order to be
                        able to set up food, drinks and party celebration.</p>
                    <p class="gist">WHRE CAN THE GUESTS OF THE PARTY PARK?</p>
                    <p>Parking is most convenient in the parking lot behind the amusement park by the batting cages.
                        Parking is $7.00 per day during weekdays and $10 per day on weekends and holidays.</p>
                    <p class="gist">IS THE BIRTHDAY CHILD FREE?</p>
                    <p>The birthday child is NOT FREE and is included in the 10 guests for each party package. So this
                        means that the birthday child plus nine guests are included in the birthday party package price.
                    </p>
                    <p class="gist">IS BIRTHDAY CAKE PROVIDED?</p>
                    <p>No, but we provide each child with ice cream. If you decide to bring your own cake, it will be
                        served by your party chaperone at no extra charge.</p>
                    <p>As an alternate option, you can order your cake online from Cups and Cakes bakery, and they will
                        deliver your cake directly to the Park. To order, please check out their website here: <a
                            href="http://cupsandcakesrumson.com/celebrations/">http://cupsandcakesrumson.com/celebrations/</a>
                    </p>
                    <p>*Keansburg Amusement Park is not affiliated with Cups and Cakes bakery. We are not responsible
                        for any lost or damaged items or issues with your order.</p>
                    <p class="gist">ARE PAPER PRODUCTS SUPPLIED?</p>
                    <p>Yes, we provide birthday plates, cups, napkins, and utensils that are generic/no theme. We also
                        supply candles.</p>
                    <p class="gist">CAN YOU BRING OUTSIDE FOOD AND BEVERAGE INTO THE WATERPARK?</p>
                    <p>No, you are only permitted to bring in cake or cupcakes.</p>
                    <p class="gist">IS THERE A HEIGHT REQUIREMENT FOR THE KIDDIE GO-KARTS?</p>
                    <p>Yes, the minimum height requirement is 32″ and maximum height requirement is 42″.</p>
                    <p class="gist">WHAT IS THE PRICE FOR ADULT GUEST SUPERVISORS AT THE PARTY?</p>
                    <p>At the waterpark, dry spectators/guest supervisors are allowed in FREE to help monitor fun but NO
                        WATER ENTRY IS PERMITTED. The first 2 participating guest supervisors who plan on going in the
                        water are FREE, all others are charged a special rate of only $32.00. At the amusement park,
                        there is not an entrance fee so all guest supervisors are free. For both parks, this does not
                        include the price of the food.</p>
                    <p class="gist">IS THERE A SPECIAL MEAL RATE FOR ADULT GUEST SUPERVISORS AT THE PARTY?</p>
                    <p>Yes, in the waterpark guest supervisors can get a hamburger or hot dog with french fries and a
                        beverage for only $10.00. Additional pizza is not available at the waterpark on Saturday &
                        Sundays. The price for each extra pitcher of soda is $7.00. Food for the guest supervisors can
                        be ordered through your party chaperone at the beginning of the party.</p>
                    <p class="gist">CAN A RAIN DATE BE SCHEDULED AND WHAT IS THE CANCELLATION POLICY?</p>
                    <p>Yes. Rain dates are strongly encouraged when booking. The date and time cannot be guaranteed
                        because of other reservations. Please be assured that if this should happen, you will always be
                        accommodated to the closest time and date possible. For the Splashtacular package, in the event
                        of inclement weather during the party, the discount will be determined based upon the time spent
                        at park.</p>
                    <p>Cancellations must be made at least one (1) week in advance of scheduled party to be eligible for
                        a deposit refund.</p>
                    <p class="gist">WHAT HAPPENS IF THERE IS INCLEMENT WEATHER DURING THE PARTY?</p>
                    <p>Closing either park will be up to the discretion of management to ensure the safety of all
                        guests. If the park should close during the party, please refer to rain date facts directly
                        above.</p>
                    <p class="gist">WHAT HAPPENS IF WE ARRIVE LATE?</p>
                    <p>In consideration of other scheduled parties, a late fee of $25 per ½ hour will be charged. We
                        will do our best to still provide the amount of time scheduled but cannot guarantee this because
                        of possible conflicts with other reservations and park closing time. Please allow time for
                        travel, parking, and seasonal traffic.</p>
                    <p class="gist">IS GRATUITY FOR THE PARTY ATTENDANT INCLUDED IN THE PACKAGE?</p>
                    <p>No, a gratuity is not included in the price but is greatly appreciated.</p>
                    <b>ADDITIONAL INFORMATION:</b>
                    <b>Please check our operating calendar before booking your party. Parties cannot be booked on days
                        we are not open.</b>
                    <p>Party Guests are expected to follow all height and safety requirements on all rides at Keansburg
                        Amusement Park and all slides at Runaway Rapids.</p>
                    <p>Party Guests with casts/braces or bandages of any kind, recent surgery, back injuries or are
                        pregnant are not permitted on any of the rides at Keansburg Amusement Park.</p>
                    <p class="gist">WHERE CAN MY PARTY GUESTS PARK?</p>
                    <p>It is more convenient for Your Guests to park in the lot behind the amusement park. The cost to
                        park ALL DAY LONG is $7 Monday through Friday and $10 on weekends and holidays. All guests who
                        park in this lot will receive a coupon sheet full of savings available at Keansburg Amusement
                        Park. Waterpark birthday guests can conveniently cut through the amusement park to get to the
                        waterpark.</p>
                    <p>Metered parking is limited and available on the street and in the lot next to the Go-Kart tracks.
                        The Borough of Keansburg owns and operates the meters and strictly enforces any time
                        infractions. Please note that parking tickets will be given to any expired meters, which are
                        owned and operated by the Borough of Keansburg.</p>
                </div>
            </div>
            <div class="row" onclick="show(this)">
                <div class="infor" >
                    <h2 class="title"><span class="tick">+</span> Parking</h2>
                </div>
                <div class="infor-body parking">
                    <p class="gist">WHERE CAN MY PARTY GUESTS PARK?</p>
                    <p>It is more convenient for Your Guests to park in the lot behind the amusement park.  The cost to park ALL DAY LONG is $7 Monday through Friday and $10 on weekends and holidays.  All guests who park in this lot will receive a coupon sheet full of savings available at Keansburg Amusement Park.  Waterpark birthday guests can conveniently cut through the amusement park to get to the waterpark.</p>
                    <br>
                    <p>Metered parking is limited and available on the street and in the lot next to the Go-Kart tracks.  The Borough of Keansburg owns and operates the meters and strictly enforces any time infractions.  Please note that parking tickets will be given to any expired meters, which are owned and operated by the Borough of Keansburg.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function show(that){
            if($(that).children('.infor-body').hasClass('add')) {
                $(that).children('.infor-body').removeClass('add')
                $(that).children('.infor-body').css("display", "none");
            } else {
                $(that).children('.infor-body').addClass('add')
                $(that).children('.infor-body').css("display", "block");
                let lengthInfor = $('.row').length;
                for (let index = 0; index < lengthInfor; index++) {
                    if($('.row')[index] != that) {
                        if($($('.row')[index]).children('.infor-body').hasClass('add')) {
                            $($('.row')[index]).children('.infor-body').removeClass('add')
                            $($('.row')[index]).children('.infor-body').css("display", "none");
                        }
                    }
                }
            }
        }
    </script>
@endsection