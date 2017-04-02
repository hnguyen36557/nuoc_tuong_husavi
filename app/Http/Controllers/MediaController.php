<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Request;
use App\CateMedia;
use App\Http\Requests\MediaRequest;
use App\Media;
use Input,File;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller {

	public function getList(){
		// $searchterm = Input::get('product');
		// if($searchterm == "")
		// {
			$data = Media::select('id', 'name', 'alias', 'media_cate_id', 'link', 'content', 'homeflag', 'hotflag', 'view', 'create_by', 'update_by', 'meta_description', 'meta_keyword', 'is_enable', 'created_at', 'updated_at')->orderBy('id','DESC')->paginate(5);
			return view('layouts.admin.media.list', compact('data'));
		// }
		// else
		// {
		// 	$data = Media::select('id', 'name', 'alias', 'media_cate_id', 'link', 'content', 'homeflag', 'hotflag', 'view', 'create_by', 'update_by', 'meta_description', 'meta_keyword', 'is_enable', 'created_at', 'updated_at')->orderBy('id','DESC')->Where('name', 'LIKE', '%'. $searchterm .'%')->orWhere('id', 'LIKE', '%'. $searchterm .'%')->paginate(10);
		// 	return view('layouts.admin.media.list', compact('data'));
		// }
	}
	public function getAdd(){
		$parent = CateMedia::select('id','name','alias','parent_id')->get()->toArray();
		return view('layouts.admin.media.add',compact('parent'));
	}
	public function postAdd(MediaRequest $post_request){
		$file_name = $post_request->file('fImages')->getClientOriginalName();
		$post = new Media();
		$post->name 			= $post_request->txtName;
		$post->alias 			= changeTitle($post_request->txtName);
		$post->media_cate_id 	= $post_request->sltParent;
		$post->link 			= $file_name;
		$post->isslider			= $post_request->sltSlider;
		$post->content 			= $post_request->txtContent;
		$post->create_by 		= $post_request->txtCreateby;
		$post->update_at 		= date('Y-m-d H:i:s');
		$post->is_enable 		= $post_request->sltStatus;
		$post->meta_keyword 	= $post_request->txtKeywords;
		$post->meta_description = $post_request->txtMetaDesc;
		

		$post_request->file('fImages')->move('public/upload/media/',$file_name);
		$post->save();
		
		
		return redirect()->route('admin.media.list')->with(['flash_level'=>'success','flash_message'=>'Thêm media thành công !!']);
	}
	public function getDelete($id){
		
		$post = Media::find($id);
		File::delete('public/upload/media/'.$post->link);
		$post->delete($id);
		return redirect()->route('admin.media.list')->with(['flash_level'=>'success','flash_message'=>'Xóa media thành công']);
	}
	
	public function getEdit($id){
		$cate = CateMedia::select('id','name','parent_id')->get()->toArray();
		$data = Media::find($id);
		
		return view('layouts.admin.media.edit', compact('cate','data',''));
	}
	public function postEdit($id, Request $request){
		
		$post = Media::find($id);
		

		$post->name 				= Request::input('txtName');
		$post->alias 				= changeTitle(Request::input('txtName'));
		$post->media_cate_id 		= Request::input('sltParent');
		$post->content 				= Request::input('txtContent');
		$post->isslider 			= Request::input('sltSlider');
		$post->create_by 			= Request::input('txtCreateby');
		$post->update_at 			= date('Y-m-d H:i:s');
		$post->is_enable 				= Request::input('sltStatus');
		$post->meta_keyword 		= Request::input('txtKeywords');
		$post->meta_description 	= Request::input('txtMetaDesc');


		if(!empty(Request::file('fImages'))){
			$file_name = Request::file('fImages')->getClientOriginalName();
			$post->link = $file_name;
			Request::file('fImages')->move('public/upload/media/', $file_name);
			
		} 
		$post->save();		
		
		
		return redirect()->route('admin.media.list')->with(['flash_level'=>'success','flash_message'=>'Bài viết cập nhật thành công !!']);
	}
}
