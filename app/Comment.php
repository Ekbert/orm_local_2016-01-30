<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'content',
    ];


    //增加 Model 之間的關聯
    public function post(){

    	return $this->belongsTo(Post::class);
    }
}
