<?php

namespace App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
	
	public function posts() {
		return $this->hasMany(Post::class);
	}
	public function comments() {
		return $this->hasMany(Comment::class);
	}
	
	public static function add( $fields ) {
		$user = new static;
		$user->fill($fields);
		$user->save();
		return $user;
	}
	
	public function edit( $fields ) {
		$this->fill($fields);
		$this->save();
	}
	
	public function remove() {
		$this->removeAvatar();
		$this->delete();
	}
	
	public function removeAvatar() {
		if ($this->avatar != null)
			Storage::delete('uploads/'.$this->avatar);
	}
	
	public function uploadAvatar($image){
		if($image == null){return;}
		$this->removeAvatar();
		$imagename = str_random(10) . '.' . $image->extension();
		$image->storeAs('uploads', $imagename);
		$this->avatar = $imagename;
		$this->save();
	}
	public function getAvatar() {
		if ($this->avatar == null)
			return '/img/no-avatar.png';
		return '/uploads/' . $this->avatar;
	}
	
	public function makeAdmin() {
		$this->is_admin = 1;
		$this->save();
	}
	
	public function makeNormal() {
		$this->is_admin = 0;
		$this->save();
	}
	
	public function toggleAdmin($is_admin) {
		if ($is_admin == 0)
			return $this->makeAdmin();
		return $this->makeNormal();
	}
	
	public function generatePassword($password) {
		if ($password != null){
			$this->password = bcrypt($password);
			$this->save();
		}
	}
}
