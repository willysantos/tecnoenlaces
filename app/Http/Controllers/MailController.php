<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function correo(){
        $enviar = DB::table('participante')->get();
        return view('pages.correo', compact('enviar'));
    }

    public function store(Request $request){
        Mail::send('pages.mail',$request->all(), function($msj){
           $msj->to('david_delcid@icloud.com');
           $msj->subject('Correo de contacto');
           $msj->setBody('Hi, welcome user!');
        });
        return redirect('cor');
    }
}
