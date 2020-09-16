<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'id','category_name','description','url','photo','status',
    ];
    public function products(){
       return $this->hasMany('App\Product');
    }
}
