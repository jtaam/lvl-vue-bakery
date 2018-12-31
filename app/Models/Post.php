<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // User / Author
    public function author(){
        return $this->belongsTo('App\Models\User');
    }
    // Category
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    // Tags
    public function tags(){
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }
    // Comment
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
