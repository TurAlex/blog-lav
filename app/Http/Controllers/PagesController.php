<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function showContacts() {
		$page = Page::where('slug',  'contacts')->first();
		return view('pages.static.contacts', compact('page'));
  }
	public function showAbout() {
		$page = Page::where('slug',  'about')->first();
		return view('pages.static.about', compact('page'));
	}
}
