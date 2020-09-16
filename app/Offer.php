<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'category_name', 'product_name', 'product_code', 'description','price',
    ];
    public function attributes(){
    	return $this->hasMany('App\Products_Attributes','product_id');
    }
}
