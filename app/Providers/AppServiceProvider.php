<?php

namespace App\Providers;

use App\Category;
use App\Comment;
use App\Post;
use App\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('layout', function ($view){
			$view->with('popularPosts', Post::orderBy('views', 'desc')->take(6)->get());
			$view->with('categories_data', Category::where('status',1)->get());
			$view->with('tags_data', Tag::where('status',1)->get());
		});
		view()->composer('admin.layout.left_sidebar', function ($view){
			$view->with('lockedComments', Comment::where('status', null)->orWhere('status', 0)->count());
		});
		view()->composer('pages.layout_core.slider', function ($view){
			$view->with('sliderPosts', Post::orderBy('created_at', 'desc')->where('status', 1)->take(3)->get());
		});
	}
	
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
