@extends('layouts.tsai_master')

@section('content')

<div id="head">
    <div class="line">
        <h1>Gallery</h1>
    </div>
</div>

<div id="content">

    <div class="line">
        <button class="button rounded-full-btn margin-bottom right" data-toggle="modal" id="add_item" data-target="#add_gallery">
            <img src="{{asset('tsai_bootstrap/img/ic_add_white_24dp_1x.png')}}">
        </button>
    </div>

    <div class="line">
        <div class="margin">

            @foreach($galleries as $gallery)

            <div class="s-12 m-6 l-4" style="margin:5px 0px 5px 0px">
                <div class="myContainer">
                    <img src="{{asset($gallery->photo_name)}}" alt="Avatar"
                         style="height: inherit;margin-right: auto; margin-left: auto; position: relative">
                    <div class="middle">
                        <!--                                {{--<a  class="button rounded-full-btn submit-btn margin-bottom" data-toggle="modal" data-target="#edit_gallery" data_value="{{$gallery->id }}">--}}-->
                        <button class="button rounded-full-btn submit-btn margin-bottom" id="edit_item" data-target="#edit_gallery" data-toggle="modal" data-content="{{$gallery}}">
                            <img src="{{asset('tsai_bootstrap/img/ic_mode_edit_white_24dp_1x.png')}}">
                        </button>
                        <!--                                {{--<a class="button rounded-full-btn cancel-btn margin-bottom" data-toggle="modal" data-target="#delete_gallery" href="{{action('GalleryController@deleteGallery', [$gallery->id])}}">--}}-->
                        <button class="button rounded-full-btn cancel-btn margin-bottom" id="delete_item" data-target="#delete_gallery" data-toggle="modal" data-content="{{$gallery}}">
                            <img src="{{asset('tsai_bootstrap/img/ic_delete_forever_white_24dp_1x.png')}}">
                        </button>
                    </div>
                </div>
                <h2 style="text-align: left">{{$gallery->title}}</h2>
                {{$gallery->description}}
                <br>
                <button id="details_item" data-target="#details_gallery" data-toggle="modal" data-content="{{$gallery}}">
                    <span>Details</span>
                </button>
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

@include('gallery.modals')
@endsection

