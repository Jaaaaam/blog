<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillables = [
        'title',
        'body', 
        'category', 
        'slug', 
        'published_at'];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
