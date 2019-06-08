<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //DB Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
