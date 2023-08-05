<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    protected $fillable = ['name', 'bio', 'email', 'phone'];

    // Define relationships if any
}