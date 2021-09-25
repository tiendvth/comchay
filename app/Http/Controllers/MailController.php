<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_mail($order){
        $data = [
            'order' => $order,
            'user' => Auth::user(),
        ];
        Mail::send('mails.mail',$data,function ($message){
            $message->from('phuonghdth2009010@outlook.com.vn','Cơm chay');
            $message->to(Auth::user()->email,'Phuong');
            $message->subject('Cơm chay - Đơn hàng mới');
        });
    }
}
