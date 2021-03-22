<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function getall(){
    $student=student::whereBetween('id',[3,10])->orderby('id','DESC')->get();
    return $student;
}
}