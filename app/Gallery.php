<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable =[
        'photo_name', 'title', 'description', 'price'
    ];

    protected $uploads = "/post_owner_images/";

    public function getPhotoNameAttribute($photo){
        return $this->uploads . $photo;
    }
}
