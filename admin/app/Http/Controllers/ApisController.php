<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ApisController extends Controller
{
    public function initializeData(){
		$data['menus'] = DB::table('cms_categories')->get();
		$data['breaking_news'] = DB::table('news')->where('is_breaking_news', '1')->get();
		$data['latest_news'] = DB::table('latest_news')->join('news', 'news.id', '=','latest_news.news_id')->orderBy('news.created_at', 'desc')->get();
		return $data;
	}
	
	public function getCategoryDetails($category){
		$data['category'] = DB::table('cms_categories')->where('label', $category)->get();
		$data['all_news'] = DB::table('news')->leftJoin('news_types', 'news_types.news_id', '=', 'news.id')
								->join('cms_categories', 'cms_categories.id', '=','news_types.category_id')
								//->where('label', $category)
								->get();
		return $data;
	}
}
