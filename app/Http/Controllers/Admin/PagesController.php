<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class PagesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$pages = Page::all();
		return view( 'admin.pages.index', [ 'pages' => $pages ] );
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view( 'admin.pages.create' );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$this->validate( $request,
			[
				'title' => [
											'required',
											Rule::unique('pages'),
											Rule::unique('categories'),
											Rule::unique('tags'),
									 ],
				'content' => 'required'
			]);
		Page::create( $request->all() );
		return redirect()->route( 'pages.index' );
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		$page = Page::find( $id );
		return view( 'admin.pages.edit', [ 'page' => $page ] );
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
		$page = Page::find( $id );
		$this->validate($request,
			[
				'title' => [
											'required',
											Rule::unique('pages')->ignore($page->id),
											Rule::unique('categories'),
											Rule::unique('tags'),
									 ],
				'slug'  => [
											'required',
											Rule::unique('pages')->ignore($page->id),
											Rule::unique('categories'),
											Rule::unique('tags'),
									 ],
				'content' => 'required',
				'image' => 'nullable|image',
			]);
		$page->update( $request->all() );
		$page->setStatus($request->get('status'));
		return redirect()->route( 'pages.index' );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		Page::find( $id )->delete();
		return redirect()->route( 'pages.index' );

	}
	public function toggle($id){
		$tag = Page::find($id);
		$tag->toggleStatus();
		return redirect()->back();
	}
}
