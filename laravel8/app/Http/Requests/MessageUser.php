<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class messageUser extends FormRequest
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
            'pseudo' => 'required|alpha|max:25',
            'message_user' => ['required','max:250','regex:#^[^<>/]*[^<>/]*[^<>/]$#'],
            'sexe' => 'required',

        ];
    }
       public function messages()
    {
        return [
             'pseudo.required' => 'Le champs Pseudo est requis!',
             'pseudo.max' => 'Le champs Pseudo ne doit pas dépasser 25 caractères!',
             'pseudo.alpha' => 'Le Pseudo ne doit comporter que des caractères alphanumériques!',            
             'message_user.required' => 'Envoyez un message valide!',
             'message_user.regex' => 'Envoyez un message valide!',
             'message_user.max' => 'Le champs Message ne doit pas dépasser 250 caractères!',
             'sexe.required' => 'Veillez selectionner votre genre!',
    ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo(url('message'));
    }
}