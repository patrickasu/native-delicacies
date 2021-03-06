<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $fillable = [
        'title', 'description', 'image_url',
    ];
    protected $table = 'food_categories';
    public function food_items(){
        return $this->hasMany('App\FoodItem', 'category_id');
    }
}
