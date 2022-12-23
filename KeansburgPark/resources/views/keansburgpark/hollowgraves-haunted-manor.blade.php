@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset("css/rapidsattractions/hollowgraves.css") }}">
@endsection

@section('content')
<div class="main">
    <div class="main-heading">
        <h1>Hollowgraves Haunted Manor</h1>
    </div>
    <div class="main-body">
        <div class="intro">
            <p>Be prepared for shrills and thrills as you explore Keansburg’s scariest Family Attraction. Our walk-thru Haunted manor promises “scare-the-pants off you” fun. Our animated ghouls and live creatures are sure creep under your skin.</p>
        </div>
        <div class="info">
            <div class="history">
                <div class="title">
                    <h3>History</h3>
                </div>
                <div class="history-info">
                    <p>The house first opened in 1995 as a Halloween attraction at the Gingerbread Castle in Hamburg, NJ. After additional Halloween runs in Wayne and Andover, the house made the change to a shore attraction with its debut at Keansburg Amusement Park in 2002. After that one season, it moved to the Seaside Heights in 2003. After four seasons, the house returned to its Halloween roots with seasons in Vernon and Budd Lake from 2007 through 2010. In 2012, the Haunted Manor returned to Seaside Heights. A long term stay was made impossible though when Hurricane Sandy ravaged the boardwalk, destroying just about everything on it. Somehow, the Haunted Manor was one of very few attractions to make it through the storm completely intact and, in 2013, it relocated back to Keansburg Amusement Park in Keansburg, NJ where we plan to keep it for the foreseeable future!</p>
                    <p>As mentioned above, the Haunted Manor is family friendly. While there are definitely some bloody scenes inside, we pride ourselves on creepiness over excessive gore. It is much more in the vein of a classic haunted house attraction with a mixture of live actors and one of a kind animatronic characters that you will find nowhere else!</p>
                </div>
            </div>
            <div class="admission">
                <div class="title">
                    <h3>Admission</h3>
                </div>
                <div class="admission-info">
                    <div class="text">
                        <p>Admission to Hollowgraves Haunted Manor is 6 Tickets.</p>
                        <p>MUST BE AT LEAST 7 YEARS OLD TO ENTER</p>
                    </div>
                    <img src="https://keansburgamusementpark.com/wp-content/uploads/2015/03/haunted-house1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset("js/header.js") }}"></script>
@endsection