@extends('layouts.tsai_master')

@section('content')
    <div id="head">
        <div class="line">
            <h1>Gallery</h1>
        </div>
    </div>



    {{--<i class="size-960 icon-sli-plus right" style="margin: 2.5%"></i>--}}


    <div id="content">

        <div class="line">
            <a class="button rounded-full-btn margin-bottom right" href="#"><span class="icon-sli-plus pull-right" onclick="document.getElementById('add_gallery').style.display='block'"></span></a>
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

                        {{--<label for="country">Country</label>--}}
                        {{--<select id="country" name="country">--}}
                            {{--<option value="australia">Australia</option>--}}
                            {{--<option value="canada">Canada</option>--}}
                            {{--<option value="usa">USA</option>--}}
                        {{--</select>--}}

                        <input style="width: 25%" type="submit" value="Submit">
                        <button onclick="document.getElementById('add_gallery').style.display='none'" type="button" class="w3-button w3-green w3-large" style="width: 25%">Cancel</button>

                    </form>
                </div>

            </div>
        </div>




        <div class="line">
            <div class="margin">
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-4">
                    <img src="{{asset('tsai_bootstrap/img/second.jpg')}}">
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
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
