<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegisterRequest extends FormRequest
{
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
            'email'      => 'email|required|unique:customers',
            'first_name' => 'required|min:3|max:20|alpha',
            'last_name'  => 'required|min:3|max:20|alpha',
            'password'   => 'confirmed|min:6',
            'redirect'   => 'alpha_num',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Email address already exists',
            'password'     => 'Password must be confirmed'
        ];
    }
}
