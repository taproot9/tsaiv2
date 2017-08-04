@extends('layouts.tsai_master')

@section('content')


        <div class="container" style="padding-top:200px">
            {!! Form::model($editGalleries,['method'=>'PATCH','action'=>['GalleryController@update_post', $editGalleries->id],'files' => true]) !!}

            {{csrf_field()}}

            <img src="{{asset($editGalleries->photo_name)}}" id ="showimages" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>

            <br>
            {!! Form::file('photo_name', ['id'=>'inputimages']) !!}

            <br>
            <br>

            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null,['placeholder' => 'Title...']) !!}


            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null,['placeholder' => 'Description...']) !!}

            {!! Form::submit('Submit', ['class'=>'button rounded-full-btn submit-btn margin-bottom']) !!}

            {{--<a class="button rounded-full-btn submit-btn margin-bottom" href="#" data-dismiss="modal" id="boter_is_real"><i class="icon-check"></i> Submit </a>--}}
            <a class="button rounded-full-btn cancel-btn margin-bottom" href="#" data-dismiss="modal"><i class="icon-cross_mark"></i> Cancel </a>

            {!! Form::close() !!}
        </div>


@endsection