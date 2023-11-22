<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomeTestControllerTeacher extends Controller
{
    public function index()
    {
        return view('studentHomePage');
    }
}