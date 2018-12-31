<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Users
    public function users(){
        return $this->hasMany('App\Model\User');
    }
}
