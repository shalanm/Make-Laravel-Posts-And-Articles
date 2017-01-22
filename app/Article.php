<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =
            [
              'user_id', 'live' , 'post_on' , 'content'  
            ];
    public function setLiveAttribute($value){
        $this->attributes['live'] = (boolean)($value);
    }
    
}
