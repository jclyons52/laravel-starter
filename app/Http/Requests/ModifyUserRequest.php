<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ModifyUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		// if(Auth::user()->hasRole('admin'))
		// {
		// 	return true;
		// }

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
			//
		];
	}

}
