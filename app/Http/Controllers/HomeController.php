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
	
	public function show( $slug ) {
		$post = Post::where('slug', $slug)->firstOrFail();
	
		return view('pages.show', compact('post'));
  }
	
	public function category($slug) {
		$category = Category::where('slug', $slug)->firstOrFail();
		$posts  = $category->posts()->where('status',1)->paginate(6);
		
		return view('pages.list', compact('posts', 'category'));
	}
	
	public function tag($slug) {
		$tag = Tag::where('slug', $slug)->firstOrFail();
		$posts  = $tag->posts()->where('status',1)->paginate(9);
	
		return view('pages.list', compact('posts','tag'));
  }
	public function slug($slug) {
		$page = Page::where('slug', $slug)->firstOrFail();
		return view('pages.static', compact('page'));
	}
}
