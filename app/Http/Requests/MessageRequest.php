<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|digits:10|integer',
            'title'=>'required',
            'message'=> 'required',
        ];
    }

    public function messages ()
    {
        return [
            'name.required' => '*İsim Soyisim Boş Geçilemez.',
            'name.string' => '*İsim Alanı Sayısal Bir Veri İçeremez.',
            'email.required' => '*E-Posta Alanı Zorunludur.',
            'email.email' => '*Geçerli bir E-Posta Adresi Giriniz.',
            'phone.required' => '*Telefon Zorunlu',
            'phone.digits' => '*Telefon Numarası 10 Karakterden Oluşmalıdır.',
            'phone.integer' => '*Telefon Sadece Rakamlardan Oluşmalı ve Boşluk İçermemelidir.',
            'title.required' => '*Başlık Boş Geçilemez.',
            'message.required' => '*Mesaj Boş Geçilemez.',
        ];
    }
}
