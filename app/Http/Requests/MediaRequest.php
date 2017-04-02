<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MediaRequest extends Request {

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
			'txtName' => 'required|unique:media,name',
			'fImages' => 'required',
			'sltParent' => 'required'
		];
	}
	public function messages() {
		return [			
			'txtName.required' => 'Please enter Name!',
			'txtName.unique' => 'Name Product is exist!',
			'fImages.required' => 'Please choose Image!',
			'fImages.link' => 'This file is not Image!',
			'sltParent.required' => 'Please enter Category Media!',
		];
	}

}
