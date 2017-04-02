<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Request;
use App\Category;
use App\Http\Requests\ProductRequest;
use App\Product;
use Input,File;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller {



	//client
	public function getProductList($alias1){
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
		
		$data = Product::select('id', 'name', 'alias', 'category_id', 'featured_image', 'library_image', 'price', 'order', 'short_content', 'long_content', 'enable', 'home_flag', 'hot_flag', 'saleoff_flag', 'new_flag', 'meta_title', 'meta_description', 'meta_keywords', 'created_by', 'updated_by', 'created_at', 'updated_at')->orderBy('id','DESC')->paginate(50);
		return view('layouts.admin.product.list', compact('data'));
	}
	public function getAdd(){
		$parent = Category::select('id','name','alias','parent_id')->where('type','Product')->get()->toArray();
		return view('layouts.admin.product.add',compact('parent'));
	}
	public function productAdd(ProductRequest $post_request){
		
		if( $post_request->file('product_fImages') == '')
		{
			$file_name = 'book-icon-72058.png';
		}
		else
		{
			$file_name = $post_request->file('product_fImages')->getClientOriginalName();
		}
		$post = new Product();
		$post->name 			= $post_request->product_txtName;

		$post->alias 			= changeTitle($post_request->product_txtName);

		$post->category_id 		= $post_request->product_sltParent;

		$post->featured_image 	= $file_name;

        $post->price            = $post_request->product_txtPrice;

		$post->short_content 	= $post_request->product_txtShortContent;

		$post->long_content 	= $post_request->product_txtContent;

		$post->home_flag 		= $post_request->product_txtHomeFlat;

		$post->hot_flag 		= $post_request->product_txtHotFlat;

		$post->enable 			= $post_request->product_sltStatus;

		$post->created_by 		= $post_request->product_txtCreateBy;

		$post->created_at 		= date('Y-m-d H:i:s');

		$post->meta_title 		= $post_request->product_txtMetaTitle;

		$post->meta_description = $post_request->pproduct_txtMetaDesc;

		$post->meta_keywords 	= $post_request->product_txtKeyword;
		
		if( $post_request->file('product_fImages') != '')
		{
			$post_request->file('product_fImages')->move('public/upload/product/',$file_name);
		}
		$post->save();
		
		
		return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Thêm bài viết thành công !!']);
	}

	public function getEdit($id){
		$cate = Category::select('id','name','parent_id')->where('type','Product')->get()->toArray();
		$data = Product::find($id);
		
		return view('layouts.admin.product.edit', compact('cate','data'));
	}
	public function productEdit($id, Request $request){
		
		$post = Product::find($id);
		

		$post->name 			= Request::input('product_txtName');

		$post->alias 			= changeTitle(Request::input('product_txtName'));

		$post->category_id 		= Request::input('product_sltParent');

		$post->short_content 	= Request::input('product_txtShortContent');

		$post->long_content 	= Request::input('product_txtContent');

		$post->home_flag 		= Request::input('product_txtHomeFlat');

		$post->hot_flag 		= Request::input('product_txtHotFlat');

		$post->enable 			= Request::input('product_sltStatus');

		$post->created_by 		= Request::input('product_txtCreateBy');

		$post->updated_at 		= date('Y-m-d H:i:s');

		$post->meta_title 		= Request::input('product_txtMetaTitle');

		$post->meta_description = Request::input('product_txtMetaDesc');

		$post->meta_keywords 	= Request::input('product_txtKeyword');


		if(!empty(Request::file('product_fImages'))){
			$file_name = Request::file('product_fImages')->getClientOriginalName();
			$post->featured_image = $file_name;
			Request::file('product_fImages')->move('public/upload/product/', $file_name);
			
		} 
		$post->save();		
		
		
		return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Bài viết cập nhật thành công !!']);
	}

	
}
