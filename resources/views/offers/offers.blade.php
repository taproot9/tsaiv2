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


        <div id="add_gallery" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">



                <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">
                    <form action="/action_page.php">

                        <img src="http://placehold.it/100x100" id ="showimages" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>

                        <br>

                        <input type="file" id="fname" name="firstname" placeholder="Title..">

                        <br>
                        <br>

                        <label for="title">Title</label>
                        <input type="text" id="title" name="firstname" placeholder="Title..">

                        <label for="lname">Description</label>
                        <textarea id="lname" placeholder="Text here ..."></textarea>

                        <label for="price">Price</label>
                        <input type="text" id="price" name="firstname" placeholder="Price..">

                        {{--<label for="country">Country</label>--}}
                        {{--<select id="country" name="country">--}}
                            {{--<option value="australia">Australia</option>--}}
                            {{--<option value="canada">Canada</option>--}}
                            {{--<option value="usa">USA</option>--}}
                            {{--</select>--}}

                        <button onclick="document.getElementById('add_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Submit</button>

                        <button onclick="document.getElementById('add_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Cancel</button>

                    </form>
                </div>

            </div>
        </div>


        <div id="edit_gallery" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">



                <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">
                    <form action="/action_page.php">

                        <img src="http://placehold.it/100x100" id ="showimages" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>

                        <br>

                        <input type="file" id="fname" name="firstname" placeholder="Title..">

                        <br>
                        <br>

                        <label for="title">Title</label>
                        <input type="text" id="title" name="firstname" placeholder="Title..">
                        <label for="price">Price</label>
                        <input type="text" id="price" name="firstname" placeholder="Price..">
                        <label for="lname">Description</label>
                        <textarea id="lname" placeholder="Text here ..."></textarea>

                        <br>
                        <br>

                        {{--<label for="country">Country</label>--}}
                        {{--<select id="country" name="country">--}}
                            {{--<option value="australia">Australia</option>--}}
                            {{--<option value="canada">Canada</option>--}}
                            {{--<option value="usa">USA</option>--}}
                            {{--</select>--}}



                        <button onclick="document.getElementById('edit_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Submit</button>

                        <button onclick="document.getElementById('edit_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Cancel</button>

                    </form>
                </div>

            </div>
        </div>

        <div id="delete_gallery" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">



                <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">
                    <form action="/action_page.php">

                        <label for="title">Do you really want to delete this?</label>
                        <br>
                        <br>
                        <button onclick="document.getElementById('delete_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Ok</button>

                        <button onclick="document.getElementById('delete_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%; border-radius: 10px">Cancel</button>

                    </form>
                </div>

            </div>
        </div>

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

            <!--            modal-->
            <div id="bookNow" class="w3-modal">
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                    <br>
                    <a href="" onclick="document.getElementById('bookNow').style.display='none'" class="w3-btn w3-green" style="width: 30%; border-radius: 10px" >Promo</a>

                    <br>
                    <br>

                    <form class="w3-container" action="/action_page.php">
                        <div class="w3-section">

                            <div class="w3-row">
                                <div class="w3-col l6 w3-left-align">
                                    <label class="w3-left-align"><b>Check-in Date</b></label>
                                    <input class="w3-input" type="date">
                                </div>

                                <div class="w3-col l6 w3-left-align">
                                    <label><b style="text-align: left">Check-out Date</b></label>
                                    <input class="w3-input" type="date">
                                </div>
                            </div>

                            <br>

                            <div class="w3-row">
                                <div class="w3-col s6 w3-left-align">
                                    <label><b>Quantity</b></label>
                                    <input class="w3-input" type="text" placeholder="0">
                                </div>

                                <div class="w3-col s3 w3-left-align">
                                    <label><b>Adults</b></label>
                                    <input class="w3-input" type="text" placeholder="0">
                                </div>

                                <div class="w3-col s3 w3-left-align">
                                    <label><b>Children</b></label>
                                    <input class="w3-input" type="text" placeholder="0">
                                </div>
                            </div>




                            {{--<div class="w3-row">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<label for="checkinDate" class="control-label">Check-in Date</label>--}}
                                    {{--<input name="arrival" type="text" class="mdl-textfield__input hasDatepicker" id="checkInDate" placeholder="eg. 2017-05-04">--}}
                                    {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<label for="checkoutDate" class="control-label">Check-out Date</label>--}}
                                    {{--<input name="departure" type="text" class="mdl-textfield__input hasDatepicker" id="checkOutDate" placeholder="eg. 2017-05-05">--}}
                                    {{--</div>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<label for="quantity" class="control-label">Quantity</label>--}}
                                    {{--<input name="quantity" type="text" class="mdl-textfield__input" id="quantity" placeholder="Quantity" value="1">--}}
                                    {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<label for="Adults" class="control-label">Adults</label>--}}
                                    {{--<input name="persons" type="text" class="mdl-textfield__input" id="NoOfAdults" placeholder="Adults" value="2">--}}
                                    {{--</div>--}}
                                {{--<div class="col-md-3">--}}
                                    {{--<label for="Children" class="control-label">Children</label>--}}
                                    {{--<select name="children" class="mdl-textfield__input" id="Children">--}}
                                        {{--<option value="0">0</option>--}}
                                        {{--<option value="1">1</option>--}}
                                        {{--<option value="2">2</option>--}}
                                        {{--<option value="3">3</option>--}}
                                        {{--<option value="4">4</option>--}}
                                        {{--<option value="5">5</option>--}}
                                        {{--<option value="6">6</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<span style="display: block; font-size: 12px;" class="NoOfNights"></span>--}}
                                    {{--<button type="submit" class="btn btn-success faa-parent animated-hover btn-lg">--}}
                                        {{--<i class="fa fa-shopping-bag faa-horizontal"></i>--}}
                                        {{--Book Now--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--<div class="col-md-6" align="center">--}}
                                    {{--<div class="clearfix apps-divider-lg"></div>--}}
                                    {{--<div class="sharable footer_social_wrapper" data-title="Suntastic Summer Deal - 3 Days and 2 Nights (Station 2 Boracay)" data-url="/product/crown-regency-resort-amp-convention-center-boracay/suntastic-summer-deal-3-days-and-2-nights-station-2-boracay" data-description="Save up to 30% off with Crown Regency Resort &amp;amp; Convention Center's surprising summer promo for 3 days and 2 nights. Live the lush life adoring the picturesque view of crystal clear sea waters and pure white sands in the beautiful island of Boracay."><a href="http://del.icio.us/post?url=http://www.crownregency.com/product/crown-regency-resort-amp-convention-center-boracay/suntastic-summer-deal-3-days-and-2-nights-station-2-boracay&amp;title=Suntastic Summer Deal - 3 Days and 2 Nights (Station 2 Boracay)&amp;notes=Save up to 30% off with Crown Regency Resort &amp; Convention Center's surprising summer promo for 3 days and 2 nights. Live the lush life adoring the picturesque view of crystal clear sea waters and pure white sands in the beautiful island of Boracay." target="_blank" class="share_btn faa-parent animated-hover" title="delicious"><i class="fa fa-delicious faa-vertical"></i></a><a href="http://www.tumblr.com/share?v=3&amp;u=http://www.crownregency.com/product/crown-regency-resort-amp-convention-center-boracay/suntastic-summer-deal-3-days-and-2-nights-station-2-boracay&amp;t=Suntastic Summer Deal - 3 Days and 2 Nights (Station 2 Boracay)" target="_blank" class="share_btn faa-parent animated-hover" title="tumblr"><i class="fa fa-tumblr faa-vertical"></i></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.crownregency.com/product/crown-regency-resort-amp-convention-center-boracay/suntastic-summer-deal-3-days-and-2-nights-station-2-boracay&amp;title=Suntastic Summer Deal - 3 Days and 2 Nights (Station 2 Boracay)&amp;source=http://www.crownregency.com/product/crown-regency-resort-amp-convention-center-boracay/suntastic-summer-deal-3-days-and-2-nights-station-2-boracay" target="_blank" class="share_btn faa-parent animated-hover" title="linkedin"><i class="fa fa-linkedin faa-vertical"></i></a><a href="https://plus.google.com/share?url=http://www.crownregency.com/product/crown-regency-resort-amp-convention-center-boracay/suntastic-summer-deal-3-days-and-2-nights-station-2-boracay" target="_blank" class="share_btn faa-parent animated-hover" title="google plus"><i class="fa fa-google-plus faa-vertical"></i></a><a href="http://www.facebook.com/share.php?u=http://www.crownregency.com/product/crown-regency-resort-amp-convention-center-boracay/suntastic-summer-deal-3-days-and-2-nights-station-2-boracay&amp;title=Suntastic Summer Deal - 3 Days and 2 Nights (Station 2 Boracay)" target="_blank" class="share_btn faa-parent animated-hover" title="facebook"><i class="fa fa-facebook faa-vertical"></i></a><a href="http://twitter.com/intent/tweet?status=Suntastic Summer Deal - 3 Days and 2 Nights (Station 2 Boracay)+http://www.crownregency.com/product/crown-regency-resort-amp-convention-center-boracay/suntastic-summer-deal-3-days-and-2-nights-station-2-boracay" target="_blank" class="share_btn faa-parent animated-hover" title="twitter"><i class="fa fa-twitter faa-vertical"></i></a></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}





                            {{--<label><b>Username</b></label>--}}
                            {{--<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>--}}
                            {{--<label><b>Password</b></label>--}}
                            {{--<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>--}}
                            {{--<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>--}}
                            {{--<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me--}}
                        </div>


                    </form>

                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        <button onclick="document.getElementById('bookNow').style.display='none'" type="button" class="w3-button w3-green" style="width: 25%; border-radius: 10px">Submit</button>
                        <button onclick="document.getElementById('bookNow').style.display='none'" type="button" class="w3-button w3-green" style="width: 25%; border-radius: 10px">Cancel</button>
                    </div>

                </div>
            </div>

</section>
<!--<script src="{{asset("tsai_bootstrap/js/offers.js")}}"></script>-->

@endsection