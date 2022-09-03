<?php

namespace App\Http\Controllers;

use App\Mail\FirstMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request){
        $input=$request->all();
        
        $user=User::find(3);
        $mailable=new FirstMail($user);
        Mail::to("daohongphuc1999@gmail.com")->queue($mailable);
        return true;
        // return view('form');
    }

    public function getForm(){
        return view('form');
    }

    public function handleForm(Request $request){
        $content=$request->input('nd');
       
        // return view('mail.mail', compact('content'));
        // return  view('mail.mail')->with('content', $content);
        return $content;
        
    }
}
