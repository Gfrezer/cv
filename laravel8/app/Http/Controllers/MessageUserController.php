<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\MessageUser;


class MessageUserController extends Controller
{
    public function index()
    {
      return view("pagePrincipale/messModalResponse");  

    } 


   public function store(MessageUser $request)
    {
        
     $this->save($request->validated());
    
     return redirect("message")->with("messageClientOk",'Votre message à bien été envoyé, il sera traité rapidement!');
    }

       function save($validatedData)
	{
        $dataMessage = new Message;
		$dataMessage->pseudo = $validatedData['pseudo'];	
		$dataMessage->message_user = $validatedData['message_user'];
        $dataMessage->save();         
    }


     public function show()
     {
        $messagesUsers = Message::all();
        return view('pagePrincipale/accueil', compact('messagesUsers'));
     }

 
}

    