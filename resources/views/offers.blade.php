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


                <div class="l-12">
                    <div class="s-12 m-12 l-12">
                        <div class="s-12 m-8 l-4">
                            <h2 style="text-align: left" class="s-12 m-8 l-4">Titles</h2>
                                <img class="image" src="{{asset('tsai_bootstrap/img/second.jpg')}}" alt="Avatar"
                                     class="image">
                        </div>
                        <div class="s-12 m-8 l-8">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            <a href="">
                                <span onclick="hide(); return false">Details</span>
                            </a>
                        </div>
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