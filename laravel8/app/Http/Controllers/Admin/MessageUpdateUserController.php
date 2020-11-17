<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageUpdateUserController extends Controller
{


   public function update(Request $request ,$id){
      $message = Message::find($id);
      $message->messageaccueil = TRUE;
      $message->save();
      return redirect('contact');
      }
   }