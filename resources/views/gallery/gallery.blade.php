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
            <!--            <a class="button rounded-full-btn margin-bottom right" href="#"><span class="icon-sli-plus pull-right"></span></a>-->
            <a class="button rounded-full-btn margin-bottom right" href="#" data-toggle="modal" data-target="#add_gallery">
                <img  src="{{asset('tsai_bootstrap/img/ic_add_white_24dp_1x.png')}}">
            </a>
        </div>

        @include('gallery.modals')

        <div class="line">
            <div class="margin">
                @foreach($galleries as $gallery)


                    <div class="s-12 m-6 l-4">
                        <h2 style="text-align: left">{{$gallery->title}}</h2>
                        <div class="myContainer">
                            <img class="image" src="{{asset($gallery->photo_name)}}" alt="Avatar" class="image">
                            <div class="middle">
                                {{--<a  class="button rounded-full-btn submit-btn margin-bottom" data-toggle="modal" data-target="#edit_gallery" data_value="{{$gallery->id }}">--}}
                                <a  class="button rounded-full-btn submit-btn margin-bottom" href="{{action('GalleryController@edit_post', [$gallery->id])}}">
                                    <img src="{{asset('tsai_bootstrap/img/ic_mode_edit_white_24dp_1x.png')}}">
                                </a>
{{--                                <a class="button rounded-full-btn cancel-btn margin-bottom" data-toggle="modal" data-target="#delete_gallery" href="{{action('GalleryController@deleteGallery', [$gallery->id])}}">--}}
                                    <a class="button rounded-full-btn cancel-btn margin-bottom"  href="{{action('GalleryController@deleteGallery', [$gallery->id])}}">
                                    <img src="{{asset('tsai_bootstrap/img/ic_delete_forever_white_24dp_1x.png')}}">
                                </a>
                            </div>
                        </div>

                       {{$gallery->description}}
                        <br>
                        <a href="">
                            <span onclick="hide(); return false">Details</span>
                        </a>                </p>
                    </div>
                @endforeach

            </div>
        </div>

    </div>


    <div id="fourth-block">
        <div class="line">

            <div id="owl-demo2" class="owl-carousel owl-theme">
                <div class="item">
                    <h2>Amazing responsive template</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
                <div class="item">
                    <h2>Responsive components</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
                <div class="item">
                    <h2>Retina ready</h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                        veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
            </div>

        </div>
    </div>



@endsection

