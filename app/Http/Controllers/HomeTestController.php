<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HomeTestController extends Controller
{
    public function index()
    {
        return view('studentHomePage');
    }
}