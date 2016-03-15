<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Category;
use App\Content;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function getIndex()
	{
		return view('guest.home');
	}

	public function getTinTuc($news,$post=null)
	{
		if ($post == null) {
			$cate = Category::where('alias','=',$news)->get()->first();
			return view('guest.news')
					->with('cate',$cate);
		}else{
			$cate = Category::where('alias','=',$news)->get()->first();
			$post = Content::where('alias','=',$post)->where('category_id','=',$cate->id)->get()->first();
			return view('guest.post')
					->with('post',$post);
		}
	}
}
