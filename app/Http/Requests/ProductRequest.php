<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
			'product_txtName' => 'required|unique:products,name'
		
		];
	}
	public function messages() {
		return [			
			'product_txtName.required' => 'Please enter Name!',
			'product_txtName.unique' => 'Name Product is exist!'
			
		];
	}

}
