<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Request;
use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Input,File;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {



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
		
		$data = Post::select('id', 'name', 'alias', 'category_id', 'featured_image', 'short_content', 'long_content', 'view_count', 'home_flag', 'hot_flag', 'enable', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at')->orderBy('id','DESC')->paginate(50);
		return view('layouts.admin.post.list', compact('data'));
	}
	public function getAdd(){
		$parent = Category::select('id','name','alias','parent_id')->where('type','Post')->get()->toArray();
		return view('layouts.admin.post.add',compact('parent'));
	}
	public function postAdd(PostRequest $post_request){
		
		if( $post_request->file('post_fImages') == '')
		{
			$file_name = 'book-icon-72058.png';
		}
		else
		{
			$file_name = $post_request->file('post_fImages')->getClientOriginalName();
		}
		$post = new Post();
		$post->name 			= $post_request->post_txtName;

		$post->alias 			= changeTitle($post_request->post_txtName);

		$post->category_id 		= $post_request->post_sltParent;

		$post->featured_image 	= $file_name;

		$post->short_content 	= $post_request->post_txtShortContent;

		$post->long_content 	= $post_request->post_txtContent;

		$post->home_flag 		= $post_request->post_txtHomeFlat;

		$post->hot_flag 		= $post_request->post_txtHotFlat;

		$post->enable 			= $post_request->post_sltStatus;

		$post->created_by 		= $post_request->post_txtCreateBy;

		$post->created_at 		= date('Y-m-d H:i:s');

		$post->meta_title 		= $post_request->post_txtMetaTitle;

		$post->meta_description = $post_request->post_txtMetaDesc;

		$post->meta_keyword 	= $post_request->post_txtKeyword;
		
		if( $post_request->file('post_fImages') != '')
		{
			$post_request->file('post_fImages')->move('public/upload/post/',$file_name);
		}
		$post->save();
		
		
		return redirect()->route('admin.post.list')->with(['flash_level'=>'success','flash_message'=>'Thêm bài viết thành công !!']);
	}

	public function getEdit($id){
		$cate = Category::select('id','name','parent_id')->get()->toArray();
		$data = Post::find($id);
		
		return view('layouts.admin.post.edit', compact('cate','data'));
	}
	public function postEdit($id, Request $request){
		
		$post = Post::find($id);
		

		$post->name 			= Request::input('post_txtName');

		$post->alias 			= changeTitle(Request::input('post_txtName'));

		$post->category_id 		= Request::input('post_sltParent');

		$post->short_content 	= Request::input('post_txtShortContent');

		$post->long_content 	= Request::input('post_txtContent');

		$post->home_flag 		= Request::input('post_txtHomeFlat');

		$post->hot_flag 		= Request::input('post_txtHotFlat');

		$post->enable 			= Request::input('post_sltStatus');

		$post->created_by 		= Request::input('post_txtCreateBy');

		$post->updated_at 		= date('Y-m-d H:i:s');

		$post->meta_title 		= Request::input('post_txtMetaTitle');

		$post->meta_description = Request::input('post_txtMetaDesc');

		$post->meta_keyword 	= Request::input('post_txtKeyword');


		if(!empty(Request::file('fImages'))){
			$file_name = Request::file('fImages')->getClientOriginalName();
			$post->featured_image = $file_name;
			Request::file('fImages')->move('public/upload/post/', $file_name);
			
		} 
		$post->save();		
		
		
		return redirect()->route('admin.post.list')->with(['flash_level'=>'success','flash_message'=>'Bài viết cập nhật thành công !!']);
	}

	
}
