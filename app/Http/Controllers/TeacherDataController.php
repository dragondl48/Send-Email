<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherDataController extends Controller
{
    public function show(){
        $a=data_teacher();
        
        return $a;
        
    }

    public function error(){
        $err=err();
        return $err;
    }
}
