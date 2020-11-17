<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Message;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        $contacts = Contact::all();
        $messagesUsers = Message::all();
        return view('admin/admin_Page_Principale', compact('contacts','messagesUsers'));
    }

    public function update(Request $request ,$id){
        $message = Message::find($id);
        $message->messageaccueil = TRUE;
        $message->save();
        return redirect('admin');
    }

    public function destroy(Request $request ,int $id){
      $messageSuppr = Message::destroy($id);
   
      return redirect('admin');
    }
  
}