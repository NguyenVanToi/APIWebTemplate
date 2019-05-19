<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mushroom extends Model
{
    //
    protected $table = 'tbl_mushroom';
    protected $fillable = ['id', 'name', 'family', 'image', 'humidity'];
}
