<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class loginAdminController extends Controller
{
    
    public function adminLogin(Request $request)
    {
      $credentials = $request->only('nom','password');
        if (Auth::guard('admin')->attempt($credentials)) {
           if(Auth::guard('admin')->user()->admin === 1){
                return view('admin/adminAccueil');
      }           
        }else{
            return view('admin/adminLogin',['error' =>'ok']);
        }
    }
}