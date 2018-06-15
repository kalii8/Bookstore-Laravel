<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Book extends Model
{
//
    protected $guarded = [];

    public $timestamps = false;

    public function categories() 
    {
        return $this->belongsToMany(Category::class, 'books_categories');
    }

}
