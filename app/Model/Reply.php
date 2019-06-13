<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reply extends Model
{
    public function question(){

        return $this->belongTo(Question::class);
    }

    public function user(){

        return $this->belongTo(User::class);
    }

    public function like(){

        return $this->hasMany(Like::class);
    }
}
