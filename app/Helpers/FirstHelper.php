<?php

use App\Models\Teacher;


if (!function_exists('data_teacher')) {

    function data_teacher()
    {
        $teacher = Teacher::all();
       
        // return response()->json($teacher);
        return response()->json([
            $teacher,
            'message' => 'success'
        ], 200);
    }
}

if (!function_exists('err')) {

    function err()
    {
        $teacher = Teacher::find(123);
       
        // return response()->json($teacher);
        return response()->json([
            $teacher,
            'message' => 'fail'
        ], 500);
    }
}
