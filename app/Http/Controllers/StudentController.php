<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class StudentController extends Controller
{
   
   function display(){
      return view('registrationStudent');
   }

}
