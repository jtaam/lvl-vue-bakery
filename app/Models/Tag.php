<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Posts
    public function posts(){
        return $this->belongsToMany('App\Models\Post')->withPivot('post_id','tag_id')->withTimestamps();
    }
}
