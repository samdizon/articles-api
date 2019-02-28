<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function articles(){
        return $this->hasMany(Article::class);
    }

    // public function article_comments(){
    //     return $this->hasMany('App\Comment');
    // }
}
