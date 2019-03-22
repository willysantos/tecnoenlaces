<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PatrocinadorController extends Controller
{
    public function index(){
        $patrocinadores = DB::table('patrocinadores')->get();
        return(view('pages.patrocinadores', compact('patrocinadores')));
    }
    public function savePatrocinador(Request $request){
        DB::table('patrocinadores')->insert([
            'nombre'=>$request->nombre,
            'telefono'=>$request->telefono
        ]);
        return redirect(route('patrocinadores'));
    }
    public function premios(Request $request){
        DB::table('premios')->insert([
            'id_patrocinador'=>$request->id,
            'descripcion'=>$request->descripcion,
            'estado'=>$request->estado
        ]);
        return redirect(route('patrocinadores'));
    }

    public function premios2(Request $request){
        DB::table('premios')->insert([
            'id_patrocinador'=>$request->id,
            'descripcion'=>$request->descripcion,
            'estado'=>$request->estado
        ]);
        return redirect(route('premios'));
    }

    public function vPremios(){
        $patrocinadores = DB::table('patrocinadores')->get();
        $premios = DB::table('premios')
            ->select('nombre','descripcion', 'estado')
            ->join('patrocinadores','patrocinadores.id_patrocinador','=','premios.id_patrocinador')
            ->get();
        return (view('pages.premios', compact('premios','patrocinadores')));
    }
}
