<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Category;
use Input,File;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller {

	public function getList($type)
	{
		$data = Category::select('id', 'name', 'alias', 'parent_id', 'featured_image', 'content', 'type', 'enable', 'meta_title', 'meta_description', 'meta_keyword', 'created_by', 'updated_by', 'created_at', 'updated_at')->where('type', $type)->orderBy('id','ASC')->paginate(20);
		return view('layouts.admin.cate.list',compact('data'));
	}
	public function getAdd()
	{
		$parent = Category::select('id','name','alias','parent_id')->get()->toArray();
		return view('layouts.admin.cate.add',compact('parent'));
	}
	public function postAdd(CategoryRequest $request) {
		
		
		if( $request->file('cate_fImages') == '')
		{
			$file_name = 'icon-person-128.png';
		}
		else
		{
			$file_name = $request->file('cate_fImages')->getClientOriginalName();
		}

		$cate = new Category();
		$cate->name 				= $request->cate_txtName;

		$cate->alias 				= changeTitle($request->cate_txtName);

		$cate->parent_id 			= $request->cate_sltParent;

		$cate->content 				= $request->cate_txtContent;

		$cate->featured_image 		= $file_name;

		$cate->type 				= $request->cate_txtType;

		$cate->enable 				= $request->cate_sltStatus;

		$cate->meta_title 			= $request->cate_txtMetaTitle;

		$cate->meta_description 	= $request->cate_txtMetaDesc;

		$cate->meta_keyword 		= $request->cate_txtKeyword;

		$cate->created_by 			= $request->cate_txtCreateBy;

		$cate->updated_by 			= "";

		$cate->created_at 			= date('Y-m-d H:i:s');

		if( $request->file('cate_fImages') != '')
		{
			$request->file('cate_fImages')->move('public/upload/cate/',$file_name);
		}
		
		
		$cate->save();
		$getType= $request->cate_txtType;
		return redirect()->route('admin.cate.list',['type'=>$getType])->with(['flash_level'=>'success','flash_message'=>'Thông Báo: Thêm danh mục  thành công !!!']);
	}
	public function getDelete($id){
		$parent = Category::where('parent_id',$id)->count();
		if($parent == 0) {
			$cate = Category::find($id);
			$cate->delete($id);
			return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Thông Báo : Xóa danh mục thành công !!!']);
		}
		else {
			echo "<script type='text/javascript'>
					alert('Sorry! You can not delete this category!');
					window.location = '";
						echo route('admin.cate.list');
					echo "';
				  </script>";
		}		
		
	}
	public function getEdit($id){
		$data = Category::findOrFail($id)->toArray();
		$cate = Category::select('id','name','parent_id','alias')->get()->toArray();
		return view('layouts.admin.cate.edit',compact('cate','data'));
	}
	public function postEdit(Request $request, $id){
		
		$cate = Category::find($id);
	
		$cate->name 				= Request::input('cate_txtName');

		$cate->alias 				= changeTitle(Request::input('cate_txtName'));

		$cate->parent_id 			= Request::input('cate_sltParent');
		
		if(!empty(Request::file('cate_fImages'))){
			$file_name = Request::file('cate_fImages')->getClientOriginalName();
			$cate->featured_image = $file_name;
			Request::file('cate_fImages')->move('public/upload/cate/', $file_name);
		} 

		$cate->content 				= Request::input('cate_txtContent');

		$cate->type 				= Request::input('cate_txtType');

		$cate->enable 				= Request::input('cate_sltStatus');

		$cate->menu 				= Request::input('cate_txtMenu');

		$cate->meta_title 			= Request::input('cate_txtMetaTitle');

		$cate->meta_description 	= Request::input('cate_txtMetaDesc');

		$cate->meta_keyword 		= Request::input('cate_txtKeyword');

		$cate->created_by 			= Request::input('cate_txtCreateBy');

		$cate->updated_by 			= Request::input('cate_txtUpdateBy');

		$cate->created_at 			= date('Y-m-d H:i:s');

		$cate->updated_at 			= date('Y-m-d H:i:s');
		
		$cate->save();		
		$getType = Request::input('cate_txtType');
		
		return redirect()->route('admin.cate.list',['type'=>$getType])->with(['flash_level'=>'success','flash_message'=>'Chỉnh sửa danh mục thành công']);
	}
}
