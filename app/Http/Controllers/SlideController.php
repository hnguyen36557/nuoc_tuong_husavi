<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Request;
use App\Http\Requests\SlideRequest;
use App\Slide;
use Input,File;
use Illuminate\Support\Facades\Auth;

class SlideController extends Controller {

	public function getSlider(){
		
		$data = Slide::select('id', 'name', 'alias', 'featured_image', 'short_content', 'long_content', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at')->orderBy('id','DESC')->paginate(5);
		return view('vivu.page.slide', compact('data'));
	}

	public function getList(){
		
		$data = Slide::select('id', 'name', 'alias', 'featured_image', 'short_content', 'long_content', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at')->orderBy('id','DESC')->paginate(5);
		return view('layouts.admin.slide.list', compact('data'));
	}
	public function getAdd(){
		
		return view('layouts.admin.slide.add');
	}
	public function postAdd(SlideRequest $post_request){
		if( $post_request->file('slide_fImages') == '')
		{
			$file_name = 'book-icon-72058.png';
		}
		else
		{
			$file_name = $post_request->file('slide_fImages')->getClientOriginalName();
		}

		$post = new Slide();
		$post->name 			= $post_request->slide_txtName;
		$post->alias 			= changeTitle($post_request->slide_txtName);
		
		$post->featured_image 	= $file_name;

		$post->short_content 	= $post_request->slide_txtShortContent;

		$post->long_content 	= $post_request->slide_txtContent;

		$post->meta_title 		= $post_request->slide_txtMetaTitle;

		$post->meta_description = $post_request->slide_txtMetaDesc;

		$post->meta_keyword 	= $post_request->slide_txtKeyword;

		$post->created_by 		= $post_request->slide_txtCreateby;

		$post->created_at 		= date('Y-m-d H:i:s');

		$post->status 			= $post_request->slide_sltStatus;
		
		

		if( $post_request->file('slide_fImages') != '')
		{
			$post_request->file('slide_fImages')->move('public/upload/media/',$file_name);
		}
		$post->save();
		
		
		return redirect()->route('layouts.admin.slide.list')->with(['flash_level'=>'success','flash_message'=>'Tạo Slider thành công !!']);
	}
	public function getDelete($id){
		
		$post = Slider::find($id);
		File::delete('public/upload/media/'.$post->link);
		$post->delete($id);
		return redirect()->route('layouts.admin.slide.list')->with(['flash_level'=>'success','flash_message'=>'Xóa slider thành công']);
	}
	
	public function getEdit($id){
		
		$post = Slider::find($id);
		
		return view('layouts.admin.slide.edit', compact('post',''));
	}
	public function postEdit($id, Request $request){
		
		$post = Slide::find($id);
		

		$post->name 			= Request::input('slide_txtName');
		$post->alias 			= changeTitle(Request::input('slide_txtName'));
		

		$post->short_content 	= Request::input('slide_txtShortContent');

		$post->long_content 	= Request::input('slide_txtContent');

		$post->meta_title 		= Request::input('slide_txtMetaTitle');

		$post->meta_description = Request::input('slide_txtMetaDesc');

		$post->meta_keyword 	= Request::input('slide_txtKeyword');

		$post->created_by 		= Request::input('slide_txtCreateby');

		$post->created_at 		= date('Y-m-d H:i:s');

		$post->status 			= Request::input('slide_sltStatus');


		if(!empty(Request::file('slide_fImages'))){
			$file_name = Request::file('slide_fImages')->getClientOriginalName();
			$post->featured_image = $file_name;
			Request::file('slide_fImages')->move('public/upload/media/', $file_name);
			
		} 
		$post->save();		
		
		
		return redirect()->route('layouts.admin.slide.list')->with(['flash_level'=>'success','flash_message'=>'Cập nhật Slider thành công !!']);
	}
}
