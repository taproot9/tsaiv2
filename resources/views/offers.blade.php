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
            <a class="button rounded-full-btn margin-bottom right" href="#">
                <img src="{{asset('tsai_bootstrap/img/ic_add_white_24dp_1x.png')}}">
            </a>
        </div>


        <div class="line">
            <div class="margin" id="offers_list">


                <div class="main-container">
                    <img src="room.png" class="room-thmbnl">

                    <div class="sub-container1">
                        <span class="hotel-name">crown regenct suites & residences - mactan</span><br>
                        <span class="promo-name">Romantic Getaway (Mactan, Cebu)</span>
                        <hr class="horizontal-line">
                        <p class="promo-desc">Enjoy 3 days 2 nights of some sweet lovin' in our Mediterranean-inspired property, Crown Regency Suites Residences in Mactan, Cebu. Let us pamper you with romantic candlelit meals, first-class suite accommodations, and a complimentary bottle of wine.</p>
                    </div>

                    <div class="sub-container2">
                        <span class="price-label">price</span><br>
                        <span class="price-tag">P13,100.00</span><br>
                        <span class="info">Inclusive of VAT and local tax.</span> <br>
                        <button type="button" class="btn btn-success" id="ovride-btn-success"><span class="glyphicon glyphicon-bed"></span>&nbsp&nbspBook Now</button>
                        <button type="button" class="btn btn-default" id="ovride-btn-default"><span class="glyphicon glyphicon-menu-right"></span></button>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div id="fourth-block">
        <div class="line">
            <div id="owl-demo2" class="owl-carousel owl-theme">
                <div class="item">
                    <h2>Amazing responsive template</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                        ad
                        minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        commodo
                        consequat.
                    </p>
                </div>
                <div class="item">
                    <h2>Responsive components</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                        ad
                        minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        commodo
                        consequat.
                    </p>
                </div>
                <div class="item">
                    <h2>Retina ready</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                        diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                        ad
                        minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        commodo
                        consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<script src="{{asset("tsai_bootstrap/js/offers.js")}}"></script>-->

@endsection