<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;



class messageUserController extends Controller
{
    public function index()
    {
      return view('formMessagesUsers');
    } 


   public function store(Request $request)
    {
        $validatedData= $request->validate([
        'pseudo' => 'required|max:255',        
        'message' => 'required|max:255',
    ]);
    $this->save($validatedData);
    return response()->json(['sucess'=>'Ok']);
    }

       function save($validatedData)
	{
        $dataMessage = new Message;
		$dataMessage->pseudo = $validatedData['pseudo'];	
		$dataMessage->message = $validatedData['message'];	

        $dataMessage->save();
         
    }
}
    