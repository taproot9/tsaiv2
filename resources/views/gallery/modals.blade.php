<!--add gallery-->
<div id="add_gallery" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">


            {!! Form::open(['method'=>'POST','action'=>'GalleryController@addGallery','files' => true]) !!}

            {{csrf_field()}}

            <img src="http://via.placeholder.com/350x150" id ="showimages" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>

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

            {{--<label for="lname">Description</label>--}}
            {{--<textarea id="lname" placeholder="Text here ..."></textarea>--}}

            {{--@if(count($errors)>0)--}}
                {{--<div class="alert alert-danger">--}}
                    {{--<ul>--}}
                        {{--@foreach($errors->all() as $error)--}}
                            {{--<li>{{$error}}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}

                {{--</div>--}}
                {{----}}
              {{----}}
            {{--@endif--}}

            {!! Form::close() !!}







            {{--<form action="/action_page.php">--}}

                    {{--<img src="http://via.placeholder.com/350x150" id ="showimages" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>--}}

                {{--<br>--}}

                {{--<input id="inputimages" type="file" id="fname" name="firstname" placeholder="Title..">--}}

                {{--<br>--}}
                {{--<br>--}}

                {{--<label for="title">Title</label>--}}
                {{--<input type="text" id="title" name="firstname" placeholder="Title..">--}}

                {{--<label for="lname">Description</label>--}}
                {{--<textarea id="lname" placeholder="Text here ..."></textarea>--}}

                {{--<label for="country">Country</label>--}}
                {{--<select id="country" name="country">--}}
                    {{--<option value="australia">Australia</option>--}}
                    {{--<option value="canada">Canada</option>--}}
                    {{--<option value="usa">USA</option>--}}
                    {{--</select>--}}

                {{--<a class="button rounded-full-btn submit-btn margin-bottom" href="#" data-dismiss="modal" id="boter_is_real"><i class="icon-check"></i> Submit </a>--}}
                {{--<a class="button rounded-full-btn cancel-btn margin-bottom" href="#" data-dismiss="modal"><i class="icon-cross_mark"></i> Cancel </a>--}}
            {{--</form>--}}


        </div>

    </div>
</div>
<!--edit gallery-->
<div id="edit_gallery" class="w3-modal" data-toggle="modal" data-target="#myModal">
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

                <a class="button rounded-full-btn submit-btn margin-bottom" href="#" data-dismiss="modal"><i class="icon-check"></i> Submit </a>
                <a class="button rounded-full-btn cancel-btn margin-bottom" href="#" data-dismiss="modal"><i class="icon-cross_mark"></i> Cancel </a>

            </form>
        </div>

    </div>
</div>
<!--delete gallery-->
<div id="delete_gallery" class="w3-modal">

    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">

            <form>
                {{--{!! Form::open(['method' => 'delete','action' => ['GalleryController@deleteGallery']]) !!}--}}

                <label for="title">Do you really want to delete this?</label>
                <br>
                <br>
            {{--{!! Form::submit('Submit', ['class' => 'button rounded-full-btn submit-btn margin-bottom']) !!}--}}
                {{--<a href="{{action('GalleryController@deleteGallery', [$tempid])}}"  class="button rounded-full-btn submit-btn margin-bottom"  data-dismiss="modal"><i class="icon-check"></i> Submit </a>--}}

                <a class="button rounded-full-btn cancel-btn margin-bottom" href="#" data-dismiss="modal"><i class="icon-cross_mark"></i> Cancel </a>

            </form>
            {{--{!! Form::close() !!}--}}
        </div>

    </div>
</div>


