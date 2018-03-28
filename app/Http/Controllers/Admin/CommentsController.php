<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$comments = Comment::all();
		return view( 'admin.comments.index', [ 'comments' => $comments ] );
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view( 'admin.comments.create' );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$this->validate( $request, [
			'author_id' => 'required|numeric',
			'post_id'   => 'required|numeric',
			'content'   => 'required'
		] );
		Comment::create( $request->all() );
		return redirect()->route( 'comments.index' );
	}
	
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		$comment = Comment::find( $id );
		return view( 'admin.comments.edit', [ 'comment' => $comment ] );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		$comment = Comment::find( $id );
		$comment->update( $request->all() );
		return redirect()->route( 'comments.index' );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		Comment::find( $id )->delete();
		return redirect()->route( 'comments.index' );
	}
	
	public function toggle($id){
	$comment = Comment::find($id);
	$comment->toggleStatus();
	return redirect()->back();
	}
}
