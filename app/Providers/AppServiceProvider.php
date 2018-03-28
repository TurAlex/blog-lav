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
			$view->with('categories_data', Category::all());
			$view->with('tags_data', Tag::all());
		});
		view()->composer('admin.layout.left_sidebar', function ($view){
			$view->with('lockedComments', Comment::where('status', null)->orWhere('status', 0)->count());
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
