<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class ParticipanteController extends Controller
{
    public function index(){
        return view('pages.iniciar');
    }
    public function index2(){
        $facultad = DB::table('facultad')->get();
        $participantes = DB::table('participante')
            ->select('id','num_boleto','nombre','telefono', 'email','estado', 'nombre_facultad','num_recibo')
            ->join('facultad', 'facultad.id_facultad','=','participante.id_carrera')
            ->get();
        return view('pages.participantes', compact('facultad', 'participantes'));
    }
    public function saveParticipante(Request $request){
        DB::table('participante')->insert([
            'num_boleto'=>$request->boleto,
            'nombre'=>$request->nombre,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'estado'=>$request->estado,
            'id_carrera'=>$request->select_facultad,
            'num_recibo'=>$request->recibo,
        ]);
        return redirect(route('index'));
    }

    public function store(Request $request){
        if ($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $ruta = asset($path);
        }
        DB::table('participante')->where('id',$request->id)
            ->update(['img'=>$ruta]);
        return redirect(route('index2'));
    }
}
