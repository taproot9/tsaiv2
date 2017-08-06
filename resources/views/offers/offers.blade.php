@extends('layouts.tsai_master')

@section('content')
<section>
    <div id="head">
        <div class="line">
            <h1>Special Offers</h1>
        </div>
    </div>


    {{--<i class="size-960 icon-sli-plus right" style="margin: 2.5%"></i>--}}



    <div id="content">

        <div class="line">
            <!--            <a class="button rounded-full-btn margin-bottom right" href="#"><span class="icon-sli-plus pull-right"></span></a>-->
            <a class="button rounded-full-btn margin-bottom right" href="#" onclick="document.getElementById('add_gallery').style.display='block'" >
                <img  src="{{asset('tsai_bootstrap/img/ic_add_white_24dp_1x.png')}}">
            </a>
        </div>

            <br>
            <br>
            <div class="line">
                <div class="line">
                    <div class="margin" id="offers_list">


                        <div class="main-container">
                            <img class="image" src="{{asset('tsai_bootstrap/img/second.jpg')}}" alt="Avatar" class="image">


                            <div class="sub-container1">
                                <span class="hotel-name">crown regenct suites & residences - mactan</span><br>
                                <span class="promo-name">Romantic Getaway (Mactan, Cebu)</span>
                                <hr class="horizontal-line">
                                <p class="promo-desc">Enjoy 3 days 2 nights of some sweet lovin' in our Mediterranean-inspired property, Crown Regency Suites Residences in Mactan, Cebu. Let us pamper you with romantic candlelit meals, first-class suite accommodations, and a complimentary bottle of wine.</p>
                            </div>

                            <div class="sub-container2">
                                <span class="price-tag">P13,100.00</span><br>
                                <span class="info">Inclusive of VAT and local tax.</span> <br>
                                <!--                            <button type="button" class="btn btn-success" id="ovride-btn-success"><span class="glyphicon glyphicon-bed"></span>&nbsp&nbspBook Now</button>-->
                                <!--                            <button onclick="document.getElementById('bookNow').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">BOOK NOW!</button>-->
                                <button  onclick="document.getElementById('bookNow').style.display='block'" type="button" class="w3-button w3-green" style="width: 25%; border-radius: 10px">BOOK NOW!</button>

                            </div>

                        </div>

                    </div>
                </div>


</section>
<!--<script src="{{asset("tsai_bootstrap/js/offers.js")}}"></script>-->

@endsection