<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'title', 'detail', 'price', 'image'
        ];

    protected $primaryKey = 'books_id';

}
