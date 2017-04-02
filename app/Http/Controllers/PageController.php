<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Request;
use App\Category;
use App\Http\Requests\PageRequest;
use App\Page;
use Input,File;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller {



	//client
	public function getPostList($alias1){
		$category = DB::table('categorys')->where('alias', $alias1)->first();
		$data = Post::select('id', 'name', 'alias', 'category_id', 'featured_image', 'short_content', 'long_content', 'view_count', 'home_flag', 'hot_flag', 'enable', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at')->where('category_id',$category->id)->orderBy('id','ASC')->paginate(10);

		$name = $category->name;
		return view('layouts.client.category', compact('alias1','name','data'));
	}
	public function getPost ( $alias1, $alias2)
	{
		$detail_post = DB::table('posts')->where('alias', $alias2)->first();
		$name = $detail_post->name;
		return view('layouts.client.post', compact('name','alias1','detail_post'));
	}
	public function getList(){
		
		$data = Page::select('id', 'name', 'alias','category_id', 'short_content', 'long_content', 'enable', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at')->orderBy('id','DESC')->paginate(50);
		return view('layouts.admin.page.list', compact('data'));
	}
	public function getAdd(){
		$parent = Category::select('id','name','alias','parent_id')->where('type','Page')->get()->toArray();
		return view('layouts.admin.page.add',compact('parent'));
	}
	public function postAdd(PageRequest $post_request){
		
		
		$post = new Page();
		$post->name 			= $post_request->page_txtName;

		$post->alias 			= changeTitle($post_request->page_txtName);

		$post->category_id 		= $post_request->page_sltParent;

		

		$post->short_content 	= $post_request->page_txtShortContent;

		$post->long_content 	= $post_request->page_txtContent;

		$post->enable 			= $post_request->page_sltStatus;

		$post->created_by 		= $post_request->page_txtCreateBy;

		$post->created_at 		= date('Y-m-d H:i:s');

		$post->meta_title 		= $post_request->page_txtMetaTitle;

		$post->meta_description = $post_request->page_txtMetaDesc;

		$post->meta_keyword 	= $post_request->page_txtKeyword;
		
		
		$post->save();
		
		
		return redirect()->route('admin.page.list')->with(['flash_level'=>'success','flash_message'=>'Thêm bài viết thành công !!']);
	}

	public function getEdit($id){
		$cate = Category::select('id','name','parent_id')->where('type','Page')->get()->toArray();
		$data = Page::find($id);
		
		return view('layouts.admin.page.edit', compact('cate','data'));
	}
	public function postEdit($id, Request $request){
		
		$post = Page::find($id);
		

		$post->name 			= Request::input('page_txtName');

		$post->alias 			= changeTitle(Request::input('page_txtName'));

		$post->category_id 		= Request::input('page_sltParent');

		$post->short_content 	= Request::input('page_txtShortContent');

		$post->long_content 	= Request::input('page_txtContent');

		$post->enable 			= Request::input('page_sltStatus');

		$post->created_by 		= Request::input('page_txtCreateBy');

		$post->updated_at 		= date('Y-m-d H:i:s');

		$post->meta_title 		= Request::input('page_txtMetaTitle');

		$post->meta_description = Request::input('page_txtMetaDesc');

		$post->meta_keyword 	= Request::input('page_txtKeyword');


		
		$post->save();		
		
		
		return redirect()->route('layouts.admin.page.list')->with(['flash_level'=>'success','flash_message'=>'Bài viết cập nhật thành công !!']);
	}

	
}
