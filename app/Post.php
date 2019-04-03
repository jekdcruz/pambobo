<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts'; //change name of table
    //Primary key
    public $primaryKey = 'id'; //change name of primary key
    //Timestamps
    public $timestamps = true;
}
