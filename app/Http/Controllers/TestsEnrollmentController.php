<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\TestEnrollment;
use Illuminate\Http\Request;

class TestsEnrollmentController extends Controller
{
    public function sendTestNotification(){
        $user=User::find(1);
        $enrollmentData=[
            'mail.mail',
            'body'=>'phuc dep trai',
            'enrollmentText'=>'you are alowed to enroll',
            'url'=>url('/'),
            'thankyou'=>'dmm thang ngu'
        ];

        $user->notify(new TestEnrollment($enrollmentData));
    }
}
