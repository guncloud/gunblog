<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $guarded = array('id');

	public function Author()
	{
		return $this->belongsTo('User', 'author_id');
	}

}
