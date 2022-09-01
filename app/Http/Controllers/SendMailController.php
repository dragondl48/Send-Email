<?php

namespace App\Http\Controllers;

use App\Mail\FirstMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(){
        $user=User::find(3);
        $mailable=new FirstMail($user);
        Mail::to("dgit initaohongphuc1999@gmail.com")->queue($mailable);
        return true;
    }
}
