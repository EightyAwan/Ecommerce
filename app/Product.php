<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name', 'status','quantity', 'description','image', 'category_id','kg' ,'price',
    ];


    public function category()
    {
        return $this->hasMany('App\Categorys','id','category_id');
    }
}
