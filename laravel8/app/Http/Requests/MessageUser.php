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
            'pseudo' => ['required','max:35','regex:/^[\pL\s\-]+$/u'],
            'message_user' => ['required','max:250','regex:#^[^<>/]*[^<>/]*[^<>/]$#'],
            'sexe' => 'required',

        ];
    }
       public function messages()
    {
        return [
             'pseudo.required' => 'Le champ pseudo est requis',
             'pseudo.max' => 'Le champ pseudo ne doit pas dépasser 25 caractères',
             'pseudo.alpha' => 'Le champ pseudo ne doit comporter que des caractères alphanumériques',            
             'message_user.required' => 'Le champ message est requis',
             'message_user.regex' => "Le champ message n'est pas valide !",
             'message_user.max' => 'Le champ message ne doit pas dépasser 250 caractères',
             'sexe.required' => 'Veuillez selectionner votre genre',
    ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new ValidationException($validator))
                    ->errorBag($this->errorBag)
                    ->redirectTo(url('message'));
    }
}