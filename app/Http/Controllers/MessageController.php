<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view('message');
    }


        /*
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|digits:10|integer',
            'title'=>'required',
            'message'=> 'required',

        ],[
            'name.required' => 'İsim Soyisim Boş Geçilemez.',
            'name.string' => 'İsim Alanı Sayısal Bir Veri İçeremez.',
            'email.required' => 'E-Posta Alanı Zorunludur.',
            'email.email' => 'Geçerli bir E-Posta Adresi Giriniz.',
            'phone.required' => 'Telefon Zorunlu',
            'phone.digits' => 'Telefon Numarası 10 Karakterden Oluşmalıdır.',
            'phone.integer' => 'Telefon Sadece Rakamlardan Oluşmalı ve Boşluk İçermemelidir.',
            'title.required' => 'Başlık Boş Geçilemez.',
            'message.required' => 'Mesaj Boş Geçilemez.',

        ]);
        */
        public function store(MessageRequest $request)
        {
            Message::create($request->all());
            return back()->with('success', 'Mesaj başarı ile gönderildi.');
        }

        public function update(MessageRequest $request,Message $msg)
        {
            $msg->update($request->all());
        }

}
