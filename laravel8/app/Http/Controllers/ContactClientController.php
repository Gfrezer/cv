<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactClientController extends Controller
{
    public function index(){
        return view('pagePrincipale/formContact');
      
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {    
        $this->save($request->validated());      
      
    
     return redirect("formContact")->with("messageOk",'Votre message à bien été envoyé !');
    }

       function save($validatedData)
	{
        $contact = new Contact;
		$contact->nom = $validatedData['nom'];
		$contact->email = $validatedData['email'];	
		$contact->message = $validatedData['message'];
        $contact->save();         
	} 
}