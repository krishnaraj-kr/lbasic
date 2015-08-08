<?php

namespace wonders;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
    	'title', 
    	'body', 
    	'published_at'
    ];
}
