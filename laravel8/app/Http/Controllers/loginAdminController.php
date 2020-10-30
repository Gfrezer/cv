<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class loginAdminController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('nom', 'password');

        if (Auth::attempt(array('nom'=> $credentials['nom'],'password' => $credentials['password']))) {
      
            return view('pagePrincipale/accueil');
        }else{
            return view('pagePrincipale/accueil');
        }
    }
}