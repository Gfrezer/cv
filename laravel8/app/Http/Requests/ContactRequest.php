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
		    'email' => 'required|email',
            'message' => ['required','regex:#^[^<>/]*[^<>/]*[^<>/]$#'],
    
        ];
    }
    
    public function messages()
    {
        return [
             'nom.required' => 'Le champ nom est requis',
             'nom.max' => 'Le champ nom ne doit pas dépasser 25 caractères',
             'nom.alpha' => 'Le champ nom ne doit comporter que des caractères alphanumériques',
             'email.email' => 'Le champ email est invalide',
             'email.required' => 'Le champ email est requis',
             'message.required' => 'Le champ message est requis',
             'message.regex' => "Le champ message n'est pas valide !",
    ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo(url('formContact'));
    }
}