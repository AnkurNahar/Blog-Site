<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';

    //primaryKey
    public $primaryKey = 'id';

    //Timestamp
    public $timestamps = true;
}
