<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = array('name','description');


    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }


}
