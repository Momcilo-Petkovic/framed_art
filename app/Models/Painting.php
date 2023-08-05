<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{

    protected $fillable = ['name', 'description', 'price', 'image_path', 'artist_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    // Define other relationships or methods if any
}
