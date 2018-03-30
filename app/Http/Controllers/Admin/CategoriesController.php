<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use function Sodium\add;

class CategoriesController extends Controller
{
	
	public function index() {
		$categories = Category::all();
		return view('admin.categories.index',['categories' => $categories]);
	}
	
	public function create() {
		return view('admin.categories.create');
	}
	
	public function store( Request $request ) {
		$this->validate($request,[
			'title' => [
										'required',
										Rule::unique('categories'),
										Rule::unique('pages'),
										Rule::unique('tags'),
								 ],
		]);
		Category::create($request->all());
		return redirect()->route('categories.index');
	}
	
	public function edit( $id ) {
		$category = Category::find($id);
		return view('admin.categories.edit', ['category' => $category]);
	}
	
	public function update( Request $request, $id  ) {
		$category = Category::find($id);
		$this->validate($request,[
			'title'   => [
											'required',
											Rule::unique('categories')->ignore($category->id),
											Rule::unique('pages'),
											Rule::unique('tags'),
									 ],
			'slug'    => [
											'required',
											Rule::unique('categories')->ignore($category->id),
											Rule::unique('pages'),
											Rule::unique('tags'),
										],
		]);
		$category->update($request->all());
		$category->setStatus($request->get('status'));
		return redirect()->route('categories.index');
	}
	
	public function destroy( $id ) {
		Category::find($id)->delete();
		return redirect()->route('categories.index');
	}
	
	public function toggle($id){
		$category = Category::find($id);
		$category->toggleStatus();
		return redirect()->back();
	}
}

