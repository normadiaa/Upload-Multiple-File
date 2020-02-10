<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $fillable = ['name', 'file_id'];
    protected $table = 'data';
}
