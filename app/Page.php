<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;



class Page extends Model {
	use Sluggable;
	
	protected $fillable = ['title', 'content'];
	
	
	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}
}
