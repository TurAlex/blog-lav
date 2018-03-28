<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class SendMail extends Model {
	protected $fillable = ['name', 'email', 'content'];
	
	public static function add($fields)
	{
		$sub = new static;
		$sub->fill($fields);
		$sub->save();
//dd($sub);
		
		return $sub;
	}
	
	public function generateToken()
	{
		$this->token = str_random(100);
		$this->save();
	}
	
	public function remove()
	{
		$this->delete();
	}
	
}
