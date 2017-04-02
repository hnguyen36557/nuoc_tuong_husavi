<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SlideRequest extends Request {

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
			'slide_txtName' =>  'required|unique:slides,name'
		];
	}
	public function messages(){
		return [
				'slide_txtName.required' => 'Please Enter Name Category',
				'slide_txtName.unique'   => 'This Name CateGory Is Exist'
		];
	}

}
