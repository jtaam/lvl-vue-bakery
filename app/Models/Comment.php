<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // User
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    // Post
    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
