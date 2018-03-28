<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
	use Sluggable;
	
	protected $fillable = ['title', 'description', 'slug'];
	
	public function posts(){
    	return $this->hasMany(Post::class);
    }
	
	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}
	
	
	//STATUS MANAGE START
	public function allow() {
		$this->status = 1;
		$this->save();
	}
	public function disallow() {
		$this->status = 0;
		$this->save();
	}
	public function toggleStatus() {
		if ($this->status == null)
			return $this->allow();
		return $this->disallow();
	}
	
	public function setStatus($status){
		if ($status == null)
			return $this->disallow();
		return $this->allow();
	}
	//STATUS MANAGE FINISH
}
