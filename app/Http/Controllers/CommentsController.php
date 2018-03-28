<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
	public function store( Request $request ) {
		$this->validate( $request, [
			'content'   => 'required'
		] );
		$comment = new Comment;
		
		$comment->content = $request->get('content');
		$comment->post_id =  $request->get('post_id');
		$comment->author_id = Auth::user()->id;
		$comment->save();
		return redirect()->back()->with('status', 'Ваш коментарий будет скоро добавлен');
	}
}
