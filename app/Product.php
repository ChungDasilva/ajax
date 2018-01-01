<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'name', 'category_id', 'description', 'unit_price',
    	'manufacturer_id', 'quality_in_store','illustrative_photo'
    ];

    public function category() {
    	return $this->belongsTo('App\Category');
    }
}
