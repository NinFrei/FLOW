<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:5|max:500',
        ];
    }



    //public function messeges() {
        //return [
          //'name.required' => 'Bitte fügen Sie Ihre Namen an ',
           //'email.required' => 'Bitte fügen Sie Ihre E-mail an',
         //'subject.required' => 'Bitte fügen Sie Ihre Thema an',
           // 'message.required' => 'Bitte fügen Sie Ihre Nachricht an'
       // ]
   // }

}
