<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        //'title',
        'content',
        'is_feature',
    ];
    protected $guarded = ['id', 'password'];


    //增加 Model 之間的關聯
    public function comments(){

    	return $this->hasMany(Comment::class);
    }


}
