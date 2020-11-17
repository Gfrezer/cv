<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;


class ContactRequest extends FormRequest
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
            'nom' => 'required|alpha|max:25',
		    'email' => 'required|email|unique:contacts',
            'message' => 'required|max:1250|alpha_num',
    
        ];
    }
    
    public function messages()
    {
    return [
        'nom.alpha' => 'Le nom ne doit comporter que des caractères alphanumériques',
        'email.unique' => 'Envoyez une adresse Mail valide !',
        'message.alpha_num' => 'Envoyez un message valide !',
    ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo(url('contactClient'));
    }
}