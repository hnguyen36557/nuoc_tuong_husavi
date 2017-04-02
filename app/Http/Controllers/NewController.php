<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Request;
use App\Info;
use App\CateNew;
use App\Http\Requests\InfoRequest;
use Input,File;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;

class NewController extends Controller {

	public function getNew($alias){
		$detail = DB::table('infos')->where('alias',$alias)->first();
		return view('vivu.page.chi-tiet-bai-viet', compact('detail'));
	}
	public function getNewList()
	{
		
	}
	public function getList(){
		$searchterm = Input::get('product');
		if($searchterm == "")
		{
			$data = Info::select('id', 'name', 'alias', 'new_cate_id', 'image', 'content', 'homeflag', 'hotflag', 'view', 'meta_description', 'meta_keyword', 'create_by','update_by','is_enable', 'created_at', 'updated_at')->orderBy('id','DESC')->paginate(5);
			return view('admin.new.list', compact('data'));
		}
		else
		{
			$data = Info::select('id', 'name', 'alias', 'new_cate_id', 'image', 'content', 'homeflag', 'hotflag', 'view', 'meta_description', 'meta_keyword', 'create_by','update_by', 'is_enable', 'created_at', 'updated_at')->orderBy('id','DESC')->Where('name', 'LIKE', '%'. $searchterm .'%')->orWhere('id', 'LIKE', '%'. $searchterm .'%')->paginate(10);
			return view('admin.new.list', compact('data'));
		}
	}
	public function getAdd(){
		$parent = CateNew::select('id','name','alias','parent_id')->get()->toArray();
		return view('admin.new.add',compact('parent'));
	}
	public function postAdd(InfoRequest $post_request){
		$file_name = $post_request->file('fImages')->getClientOriginalName();
		$post = new Info();
		$post->name 			= $post_request->txtName;
		$post->alias 			= changeTitle($post_request->txtName);
		$post->new_cate_id 	= $post_request->sltParent;
		$post->image 			= $file_name;
		$post->content 			= $post_request->txtContent;
		$post->create_by 		= $post_request->txtCreateby;
		$post->update_at 		= date('Y-m-d H:i:s');
		$post->is_enable 			= $post_request->sltStatus;
		$post->meta_keyword 	= $post_request->txtKeywords;
		$post->meta_description = $post_request->txtMetaDesc;
		

		$post_request->file('fImages')->move('public/upload/news/',$file_name);
		$post->save();
		
		
		return redirect()->route('admin.new.list')->with(['flash_level'=>'success','flash_message'=>'Thêm tin tức thành công !!']);
	}
	public function getDelete($id){
		
		$post = Info::find($id);
		File::delete('public/upload/news/'.$post->image);
		$post->delete($id);
		return redirect()->route('admin.new.list')->with(['flash_level'=>'success','flash_message'=>'Xóa tin tức thành công']);
	}
	
	public function getEdit($id){
		$cate = CateNew::select('id','name','parent_id')->get()->toArray();
		$data = Info::find($id);
		$post_image = Info::find($id)->pimages;
		return view('admin.new.edit', compact('cate','data','product_image',''));
	}
	public function postEdit($id, Request $request){
		
		$post = Info::find($id);
		

		$post->name 				= Request::input('txtName');
		$post->alias 				= changeTitle(Request::input('txtName'));
		$post->new_cate_id 			= Request::input('sltParent');
		
		$post->content 				= Request::input('txtContent');
		$post->createby 			= Request::input('txtCreateby');
		$post->createdate 			= date('Y-m-d H:i:s');
		$post->status 				= Request::input('sltStatus');
		$post->meta_keyword 		= Request::input('txtKeywords');
		$post->meta_description 	= Request::input('txtMetaDesc');


		if(!empty(Request::file('fImages'))){
			$file_name = Request::file('fImages')->getClientOriginalName();
			$post->image = $file_name;
			Request::file('fImages')->move('public/upload/news/', $file_name);
			
		} 
		$post->save();		
		
		
		return redirect()->route('admin.new.list')->with(['flash_level'=>'success','flash_message'=>'Bài viết cập nhật thành công !!']);
	}
}
?>