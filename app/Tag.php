<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Tag extends Model
{
	use Sluggable;
	
	protected $fillable = ['title', 'status'];
	
	public function posts() {
		return $this->belongsToMany(
			Post::class,
			'post_tags',
			'tag_id',
			'post_id'
		);
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
	public function disAllow() {
		$this->status = 0;
		$this->save();
	}
	public function toggleStatus() {
		if ($this->status == null or $this->status == 0)
			return $this->allow();
		return $this->disAllow();
	}
	
	public function setStatus($status){
		if ($status == null)
			return $this->disAllow();
		return $this->allow();
	}
	//STATUS MANAGE FINISH
}
