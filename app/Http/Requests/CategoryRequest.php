<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request {

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
			'cate_txtName' =>  'required|unique:categorys,name'
		];
	}
	public function messages(){
		return [
				'cate_txtName.required' => 'Please Enter Name Category',
				'cate_txtName.unique'   => 'This Name CateGory Is Exist'
		];
	}

}
