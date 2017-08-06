<!--add gallery-->
<div id="add_gallery" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">
            {!! Form::open(['method'=>'POST','action'=>'GalleryController@addGallery','files' => true]) !!}
            {{csrf_field()}}
            <img src="http://via.placeholder.com/350x150" class ="photo_name" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>
            <br>
            {!! Form::file('photo_name', ['id'=>'input_image_add']) !!}
            <br>
            <br>
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null,['placeholder' => 'Title...']) !!}
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null,['placeholder' => 'Description...']) !!}
            <div class="line">
            {{ Form::button('<i class="icon-check"></i>Submit', ['type' => 'submit', 'class' => 'button rounded-full-btn submit-btn margin-bottom s1 up to s-6	'] )  }}
            {!! Form::close() !!}
                {{ Form::button('<i class="icon-cross_mark"></i>Cancel', ['class' => 'button rounded-full-btn cancel-btn margin-bottom s-1 up to s-6', 'id' => 'add_cancel'] )  }}
            </div>
        </div>

    </div>
</div>
<!--edit gallery-->
<div id="edit_gallery" class="w3-modal" data-toggle="modal" data-target="#myModal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">


            {!! Form::open(['method'=>'POST','action'=>'GalleryController@editGallery','files' => true]) !!}
            {{csrf_field()}}

            <img src="http://via.placeholder.com/350x150" class ="photo_name" style="max-width:200px;max-height:200px;margin-right: auto;margin-left: auto"/>

            <br>
            {!! Form::file('photo_name', ['id'=>'input_image_edit']) !!}
            {!! Form::text('id', '',['class' => 'gallery_id']) !!}

            <br>
            <br>

            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', '',['placeholder' => 'Title...', 'class' => 'title']) !!}


            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', '',['placeholder' => 'Description...', 'class' => 'description']) !!}

            <div class="line">
                {{ Form::button('<i class="icon-check"></i>Submit', ['type' => 'submit', 'class' => 'button rounded-full-btn submit-btn margin-bottom s1 up to s-6'] )  }}
                {!! Form::close() !!}
                {{ Form::button('<i class="icon-cross_mark"></i>Cancel', ['class' => 'button rounded-full-btn cancel-btn margin-bottom s-1 up to s-6', 'id' => 'edit_cancel'] )  }}
            </div>
        </div>

    </div>
</div>

<!--delete gallery-->
<div id="delete_gallery" class="w3-modal">

    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">
             {!! Form::open(['method'=>'POST','action'=>'GalleryController@deleteGallery','files' => true]) !!}
                {!! Form::text('id', '',['class' => 'gallery_id']) !!}
                <label for="title">Do you really want to delete this?</label>
                <br>
                <br>
            <div class="line">
                {{ Form::button('<i class="icon-check"></i>Submit', ['type' => 'submit', 'class' => 'button rounded-full-btn submit-btn margin-bottom s1 up to s-6'] )  }}
                {!! Form::close() !!}
                {{ Form::button('<i class="icon-cross_mark"></i>Cancel', ['class' => 'button rounded-full-btn cancel-btn margin-bottom s-1 up to s-6', 'id' => 'delete_cancel'] )  }}
            </div>

        </div>

    </div>
</div>
<!--details gallery-->
<div id="details_gallery" class="w3-modal" data-toggle="modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:75%">
        <div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px">


            {{csrf_field()}}

            <img src="http://via.placeholder.com/350x150" id="detail_photo_name" style="max-width:75%;max-height:75%;margin-right: auto;margin-left: auto"/>
            <br>
            <br>
            <br>
            <div class="text-center">
                <h3 id="detail_title"></h3>
                <p id="detail_description"></p>
            </div>

            <div class="line">
                {{ Form::button('<i class="icon-check"></i>Book', ['type' => 'submit', 'class' => 'button rounded-full-btn submit-btn margin-bottom s1 up to s-6', 'id' => 'book_gallery'] )  }}
                {{ Form::button('<i class="icon-cross_mark"></i>Close', ['class' => 'button rounded-full-btn cancel-btn margin-bottom s-1 up to s-6', 'id' => 'details_cancel'] )  }}
            </div>
        </div>

    </div>
</div>

