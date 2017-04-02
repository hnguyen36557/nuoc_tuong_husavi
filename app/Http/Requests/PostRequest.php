<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request {

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
			'post_txtName' => 'required|unique:posts,name'
			
		];
	}
	public function messages() {
		return [			
			'post_txtName.required' => 'Please enter Name!',
			'post_txtName.unique' => 'Name Product is exist!'
		
		];
	}

}
