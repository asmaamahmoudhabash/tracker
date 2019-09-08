<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name','description');
//    protected $fillable = array('name','type','description');

//    public function news()
//    {
//        return $this->hasMany('App\Models\News');
//    }

//    public function apartments()
//    {
//        return $this->hasMany('App\Models\Apartment');
//    }

//    public function services()
//    {
//        return $this->hasMany('App\Models\Service');
//    }
}
