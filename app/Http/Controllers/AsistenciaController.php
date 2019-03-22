<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AsistenciaController extends Controller
{
    public function index(){
        $asistencia = DB::table('participante')->where('estado','=','0')->get();
        $asis = DB::table('participante')
            ->select('nombre','email','estado','premio','ausente')->join('asistencia','asistencia.id_participante','=','participante.id')
            ->where('estado','=','1')->get();
        $as = DB::table('asistencia')->get();
        return view('asistencia.index', compact('asistencia', 'asis','as'));
    }
    public function confirmacion(Request $request){
        DB::table('asistencia')->insert([
            'id_participante'=>$request->id,
            'premio'=>$request->premio,
            'ausente'=>$request->presencia
        ]);
        DB::table('participante')->where('id',$request->id)
            ->update(['estado'=>$request->estado]);
        return redirect(route('asistencia'));
    }
    public function au(Request $request){
        redirect(route('asistencia'));
    }
}
