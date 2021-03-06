<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $fillable=['name','price','category_id'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}