<?php

namespace App\Http\Controllers\Emails;

use App\Mail\SendMailContato;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
    	return view('contato.contato');
    }

    public function enviar_email(Request $request)
    {
    	$dataForm = $request->all();
    	$to = "saimom_costa@hotmail.com";
    	Mail::to($to)->send(new SendMailContato($dataForm));

    	return redirect()->route('contato.index')->with('success','Encaminhado seu E-mail com sucesso!');
    }
}
