<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\News;
use App\Tag;
use App\LatestNews;
use App\NewsType;

use App\Http\Requests;

class NewsController extends Controller
{
    public function index()
    {
    	if(Auth::user()->role == 1)
    	{
    			$data['news_list'] = DB::table('news')->orderBy('id', 'desc')->paginate(10);
    	}
    	else if(Auth::user()->role == 2)
    	{
				$my_catagories = DB::table('permission_users')->join('cms_categories', 'cms_categories.id', '=', 'permission_users.category_id')->where('user_id', Auth::user()->id)->select('cms_categories.id')->get();
    			
				$cat_arr = array();
				foreach($my_catagories as $cat)
				{
					array_push($cat_arr, $cat->id);
				}
				$data['news_list'] = DB::table('news')->join('news_types', 'news_types.news_id', '=', 'news.id')->whereIn('news_types.category_id', $cat_arr)->orderBy('id', 'desc')->select('news.*')->paginate(10);
    	}
    	else if(Auth::user()->role == 3)
    	{
    			$data['news_list'] = DB::table('news')->where('created_by', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
    	}
    	return view('news.index', $data);
    }

    public function addNews()
    {
		$data['categories'] = DB::table('cms_categories')->get();
		$data['tags'] = DB::table('tags')->distinct()->get(['tag_name']);
    	return view('news.add', $data);
    }
	
	public function submitNews(Request $request)
	{	
		$news = new News();
		$news->id = time();
		$news->title = $request->news_title;
		$news->details = $request->news_details;
		$news->flag = $request->flag;
		$news->created_by = Auth::user()->id;
		$news->language = $request->language;
		if($request->featured_image){
            $file_extension = $request->file('featured_image')->guessExtension();
            $file_name = "featured_images_".time().".".$file_extension;
            $request->file('featured_image')->move('public/images/news/featured', $file_name);

            $news->featured_image = $file_name;
        }else{
            $file_name = "";
        }
		$news->save();
		if(count($request->categories) > 0 )
		{
			foreach($request->categories as $category)
			{
				$news_types = new NewsType();
				$news_types->news_id = $news->id;
				$news_types->category_id = $category;
				$news_types->save();
				
				if($request->flag == 1){
					$count = DB::table('latest_news')->where('category_id', $category)->count();
					if($count < 4){
						DB::table('latest_news')->insert([
							'category_id' => $category,
							'news_id' => $news->id
						]);
					}
					else if($count == 4){
						$latest_news = DB::table('latest_news')->where('category_id', $category)->orderBy('id', 'asc')->take(1)->get();
						DB::table('latest_news')->where('id', $latest_news[0]->id)->delete();
						DB::table('latest_news')->insert([
							'category_id' => $category,
							'news_id' => $news->id
						]);
				
					}
				}
			}
		}
		if(count($request->tags) > 0 )
		{
			foreach($request->tags as $tag)
			{
				$tags = new Tag();
				$tags->tag_name = $tag;
				$tags->news_id = $news->id;
				$tags->save();
			}
		}
		
	}
	
	public function viewNews($id)
	{
		$data['news'] = DB::table('news')->where('id', $id)->get();
		return view('news.details', $data);
	}
	
	public function removeNews($id)
	{
		DB::table('news')->where('id', $id)->delete();
		DB::table('latest_news')->where('news_id', $id)->delete();
	}
	
	public function editNews($id)
	{
		$data['news'] = DB::table('news')->where('id', $id)->get();
		$data['categories'] = DB::table('cms_categories')->get();
		$data['tags'] = DB::table('tags')->distinct()->get(['tag_name']);
		return view('news.edit', $data);
	}
	
	public function editNewsSubmit(Request $request)
	{
		$news = News::find($request->id);
		$news->title = $request->news_title;
		$news->language = $request->language;
		$news->details = $request->news_details;
		$news->flag = $request->flag;
		if($request->featured_image){
            $file_extension = $request->file('featured_image')->guessExtension();
            $file_name = "featured_images_".time().".".$file_extension;
            $request->file('featured_image')->move('public/images/news/featured', $file_name);

            $news->featured_image = $file_name;
        }
		$news->save();
		DB::table('news_types')->where('news_id', $request->id)->delete();
		DB::table('tags')->where('news_id', $request->id)->delete();
		DB::table('latest_news')->where('news_id', $news->id)->delete();
		if(count($request->categories) > 0 )
		{
			foreach($request->categories as $category)
			{
				$news_types = new NewsType();
				$news_types->news_id = $news->id;
				$news_types->category_id = $category;
				$news_types->save();
				
				if($request->flag == 1){
					$count = DB::table('latest_news')->where('category_id', $category)->count();
					if($count < 4){
						DB::table('latest_news')->insert([
							'category_id' => $category,
							'news_id' => $news->id
						]);
					}
					else if($count == 4){
						$latest_news = DB::table('latest_news')->where('category_id', $category)->orderBy('id', 'asc')->take(1)->get();
						DB::table('latest_news')->where('id', $latest_news[0]->id)->delete();
						DB::table('latest_news')->insert([
							'category_id' => $category,
							'news_id' => $news->id
						]);
				
					}
				}
			}
		}
		
		if(count($request->tags) > 0 )
		{
			foreach($request->tags as $tag)
			{
				$tags = new Tag();
				$tags->tag_name = $tag;
				$tags->news_id = $news->id;
				$tags->save();
			}
		}
		
		
		
		
	}
}
