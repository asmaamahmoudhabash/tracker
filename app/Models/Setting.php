<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array(
         'site_name',
         'email',
         'address',
        'copy_right',
        'site_description',



    );



}
