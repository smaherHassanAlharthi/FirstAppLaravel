<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey="post_id";
    protected $fillable=['title','body'];
    public function comments()
    {
        return $this->hasOne('App\Comment');
    }
}
