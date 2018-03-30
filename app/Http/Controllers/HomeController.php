<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index () {
		
		$posts = Post::orderBy('created_at', 'desc')->where('status', 1)->skip(3)->take(6)->get();
		
		return view('pages.index', compact('posts'));
    }
	
	public function show( $category_slug, $post_slag) {
		$post = Post::where('slug', $post_slag)->firstOrFail();
		$category = Category::where('slug', $category_slug)->firstOrFail();
		if ($category->id == $post->category_id)
			return view('pages.show', compact('post'));
		abort(404);
  }
	
	
  //TODO DELETE
  public function category($slug) {
		$category = Category::where('slug', $slug)->firstOrFail();
		$posts = $category->posts()->where('status',1)->paginate(6);
		
		return view('pages.list', compact('posts', 'category'));
	}
	
	public function tag($slug) {
		$tag = Tag::where('slug', $slug)->firstOrFail();
		$posts  = $tag->posts()->where('status',1)->paginate(9);
	
		return view('pages.list', compact('posts','tag'));
  }
	//route for category and static pages
  public function slug($slug) {
		if ( sizeof( Page::where('slug', $slug)->get() ) ){
			$page = Page::where('slug', $slug)->first();
			return view('pages.static', compact('page'));
		}
		if ( sizeof( Category::where('slug', $slug)->get() ) ){
			$category = Category::where('slug', $slug)->first();
			$posts  = $category->posts()->where('status',1)->paginate(6);
			return view('pages.list', compact('posts', 'category'));
		}
	  abort(404);
	}
}
