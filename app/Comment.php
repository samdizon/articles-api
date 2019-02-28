<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function article_comments(){
        return $this->belongsTo('App\Article');
    }

    public function comment_author(){
        return $this->belongsTo('App\People');
    }
}
