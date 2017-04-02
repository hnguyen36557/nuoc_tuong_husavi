<?php 
namespace App\Http\Controllers;
use Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Auth;
use Input,File;

class UserController extends Controller {

	public function getList() {
		// $data = User::select('id', 'username', 'password', 'email', 'featured_image', 'fullname', 'handphone','birthday', 'address','register_at', 'level')->orderBy('id','ASC')->paginate(20);
		$data = User::select('id', 'name', 'email', 'password','featured_image', 'fullname', 'handphone', 'address','birthday', 'level','remember_token', 'created_at', 'updated_at')->orderBy('id','ASC')->paginate(20);
		return view('layouts.admin.user.list', compact('data'));
	}
	public function getProfile() {
		$data = Auth::user();
		return view('layouts.admin.user.edit', compact('data'));
	}
	public function postChangePassword(Request $request) {
		$auth_user = Auth::user();
		
		if(Request::input('user_txtRePassword') != bcrypt($auth_user->pasword)){

			var_dump($auth_user->pasword);
			die();
			if(Request::input('user_txtRePassword')){
				$this->validate($request, 
					[ 'user_txtReNewPassword' => 'required|same:user_txtNewPassword' ],
					[ 'user_txtReNewPassword.same:user_txtNewPassword' => 'Mật khẩu và mật khẩu xác nhận phải giống nhau. ' ]
				);
				$pass = Request::input('same:user_txtReNewPassword');
				$auth_user->password = Hash::make($pass);
				$auth_user->remember_token 	= Request::input('_token');
				$auth_user->save();
			}
			return redirect()->route('admin.user.profile')->with(['flash_level'=>'success','flash_message'=>'Thông Báo ! Cập nhật mật khẩu thành công !']);
		}
		else
		{
			return redirect()->route('admin.user.profile')->with(['flash_level'=>'failure','flash_message'=>'Thông Báo ! Vui lòng nhập đúng mật khẩu cũ!']);
		}
	}
	public function getAdd() {
		return view('layouts.admin.user.add');
	}
	public function postAdd(UserRequest $request) {

		if($request->user_txtFeaturedImage == '')
		{
			$image_file_name = 'user-icon.png';
		}
		else
		{
			$image_file_name = $request->file($request->user_txtFeaturedImage)->getClientOriginalName();
		}
		
		$user = new User();
		$user->username 		= $request->user_txtUsername;
		$user->password 		= Hash::make($request->user_txtPassword);
		$user->email 			= $request->user_txtEmail;
		$user->featured_image 	= $image_file_name;
		$user->fullname 		= $request->user_txtFullName;
		$user->handphone 		= $request->user_txtHandphone;
		$user->address 			= $request->user_txtAddress;
		$user->birthday 		= $request->user_dateBirthday;
		$user->level 			= 5;
		$user->register_at 		= date("Y-m-d H:i:s");
		$user->remember_token 	= $request->_token;
		
		if($request->user_txtFeaturedImage != '')
		{
			$request->file('user_txtFeaturedImage')->move('public/upload/user/',$file_name);
		}
		
		$user->save();
		
		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Add User!']);
	}
	public function getDelete($id) {
	
		$user = User::find($id);
		if($user["level"] == 1){
			return redirect()->route('admin.user.list')->with(['flash_level'=>'danger','flash_message'=>'Sorry! You Cannot Detete User. Because this is admin!']);
		} else {
			$user->delete($id);
			return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Success!! Complete Delete User!']);
		}
	}
	public function getEdit($id) {
		$data = User::find($id);
		
		/*if( $data["level"] == 1 ){
			return redirect()->route('admin.user.list')->with(['flash_level'=>'danger','flash_message'=>'Sorry! You cannot edit User. Because this is Admin!']);
		}*/
		return view('layouts.admin.user.edit', compact('data'));
	}
	public function postEdit($id, Request $request) {

		$user = User::find($id);
		$user->username 		= Request::input('user_txtUsername');
		$user->password 		= Hash::make(Request::input('user_txtPassword'));
		$user->email 			= Request::input('user_txtEmail');

		if(!empty(Request::file('user_txtFeaturedImage'))){
			$image_file_name = Request::file('user_txtFeaturedImage')->getClientOriginalName();
			Request::file('user_txtFeaturedImage')->move('public/upload/user/', $image_file_name);
		}
		else
		{
			$image_file_name = 'user-icon.png';
		}
		$user->featured_image 	= $image_file_name;
		$user->fullname 		= Request::input('user_txtFullName');
		$user->handphone 		= Request::input('user_txtHandphone');
		$user->address 			= Request::input('user_txtAddress');
		$user->birthday 		= Request::input('user_dateBirthday');
		$user->level 			= 5;
		$user->register_at 		= date("Y-m-d H:i:s");
		$user->remember_token 	= Request::input('_token');
		
		$user->save();

		return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Thông Báo ! Cập nhật thông tin thành viên thành công !']);
	}
}
