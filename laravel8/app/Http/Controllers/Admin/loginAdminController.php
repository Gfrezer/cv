<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class LoginAdminController extends Controller
{
    
    public function adminLogin(Request $request)
    {
      $credentials = $request->only('nom','password');
        if (Auth::guard('admin')->attempt($credentials)) {
           if(Auth::guard('admin')->user()->admin == 1){
                \Log::info('Ca se passe bien avec le '.gettype(Auth::guard('admin')->user()->admin));
                return redirect('admin');
          } 
          else{
            \Log::info('Erreur avec le '.gettype(Auth::guard('admin')->user()->admin));
          }          
        }else{
            return redirect('/login')->with('error','ok');
        }
    }
  public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();    
        return redirect('/');
    }
}