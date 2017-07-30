@extends('layouts.tsai_master')

@section('content')
    <div id="carousel">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{asset("tsai_bootstrap/img/tsai_cover.jpg")}}" alt="">
                <div class="carousel-text">
                    <div class="line">
                        <div class="s-12 l-9">
                            <h2>Theme based on Responsee framework</h2>
                        </div>
                        <div class="s-12 l-9">
                            <p>With amazing responsive carousel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset("tsai_bootstrap/img/tsai_hotel.jpg")}}" alt="">
                <div class="carousel-text">
                    <div class="line">
                        <div class="s-12 l-9">
                            <h2>Build new layout in 10 minutes!</h2>
                        </div>
                        <div class="s-12 l-9">
                            <p>Lightweight, more intuitive and useful responsive CSS framework
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{asset("tsai_bootstrap/img/tsai_rest.jpg")}}" alt="">
                <div class="carousel-text">
                    <div class="line">
                        <div class="s-12 l-9">
                            <h2>Design theme is under the MIT license</h2>
                        </div>
                        <div class="s-12 l-9">
                            <p>Best theme based on Responsee framework
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIRST BLOCK -->
    <div id="first-block">
        <div class="line">
            <h2>Some awesome blocks</h2>
            <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            </p>
            <div class="margin">
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="icon-paperplane_ico icon2x"></i>
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                </div>
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="icon-star icon2x"></i>
                    <h3>Company</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                </div>
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="icon-message icon2x"></i>
                    <h3>Services</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                </div>
                <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="icon-mail icon2x"></i>
                    <h3>Contact</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- SECOND BLOCK -->
    <div id="second-block">
        <div class="line">
            <div class="margin-bottom">
                <div class="margin">
                    <article class="s-12 l-8 center">
                        <h1>Booking</h1>
                        <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>

                        {{--<a href="#openModal" class="button s-12 l-4 center">Book Now</a>--}}
                        <button style="border-radius: 10px" onclick="document.getElementById('bookNow').style.display='block'" class="button s-12 l-4 center">Book Now</button>

                        <div id="bookNow" class="w3-modal">
                            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                                <br>
                                <a href="https://www.w3schools.com" class="w3-btn w3-green" style="width: 30%; border-radius: 10px">Restaurant</a>
                                <a href="https://www.w3schools.com" class="w3-btn w3-green" style="width: 30%; border-radius: 10px">Hotel</a>

                                {{--<button style="margin-left: 20px" type="button" class="btn btn-success btn-lg left">Restaurant</button>--}}
                                {{--<button style="margin-right: 20px" type="button" class="btn btn-success btn-lg right">Hotel</button>--}}
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

                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- GALLERY -->
    <div id="third-block">
        <div class="line">
            <h2>Gallery</h2>
            <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            </p>
            <div class="margin">
                <div class="s-12 m-6 l-3">
                    <a href=""><img src="{{asset("tsai_bootstrap/img/rooms/r6.jpg")}}" alt="alternative text"></a>
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <a href=""> <img src="{{asset("tsai_bootstrap/img/rooms/r7.jpg")}}" alt="alternative text"></a>
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <a href=""><img style="position: inherit; margin-left: auto; margin-right: auto" class="resize" src="{{asset("tsai_bootstrap/img/food/f1.jpg")}}" alt="alternative text"></a>
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <a href=""><img style="position: inherit; margin-left: auto; margin-right: auto" class="resize" src="{{asset("tsai_bootstrap/img/food/f2.jpg")}}" alt="alternative text"></a>
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="fourth-block">
        <div class="line">
            <div id="owl-demo2" class="owl-carousel owl-theme">
                <div class="item">
                    <h2>Amazing responsive template</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="item">
                    <h2>Responsive components</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="item">
                    <h2>Retina ready</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit  lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection