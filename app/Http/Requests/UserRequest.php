<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'user_txtUsername' => 'required|unique:users,username',
			'user_txtPassword' => 'required',
			'user_txtReenterPassword' => 'required|same:user_txtPassword',
			'user_txtEmail' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
		];
	}
	public function messages(){
		return [
			'user_txtUsername.required'	=> "Please enter Username",
			'user_txtUsername.unique'	=> "User is exists.",
			'user_txtPassword.required'	=> "Please enter Password",
			'user_txtReenterPassword.required'	=> "Please enter Re-Password",
			'user_txtReenterPassword.same:user_txtPassword'	=> "Two Password don\'t match!",
			'user_txtEmail.required'	=> "Please enter Email",
			'user_txtEmail.regex'	=> "Email error syntax",
		];
	}

}
