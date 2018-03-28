<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['author_id', 'post_id', 'content'];
	
	public function post() {
		return $this->belongsTo(Post::class);
	}
	
	public function author() {
		return $this->belongsTo(User::class, 'author_id');
	}
	
	// STATUS MANAGE start
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
	// STATUS MANAGE finish
	
	public function remove() {
		$this->delete();
	}
	
	
}
