<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    protected $fillable = ['file_id', 'file'];
    protected $table = 'documents';
}
