<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function article(){
        return $this->belongsTo(Article::Class);
    }

    public function author(){
        return $this->belongsTo(People::class);
    }
}
