<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    public $timestamps = true;
    protected $fillable = array('title', 'body','project_id', 'image','published_at','status');

    public function Project()
    {
        return $this->belongsTo('App\Models\Project');
    }


}
