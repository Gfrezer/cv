<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messageUserContoller extends Controller
{
    public function index()
    {
      return view('formMessagesUsers');
    } 
}