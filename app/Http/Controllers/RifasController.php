<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RifasController extends Controller
{
    public function index(){
        $premios = DB::table('premios')->select('id','nombre', 'descripcion','estado')
            ->join('patrocinadores','patrocinadores.id_patrocinador','=','premios.id_patrocinador')->where('estado','=','1')
            ->get();
        $participantes = DB::table('participante')->select('nombre','participante.id','num_boleto')
            ->join('asistencia','asistencia.id_participante','=','participante.id')
            ->where('estado','=','1')->where('premio','=','0')->where('ausente','=','1')->orderByRaw('RAND()')->first();

        $index = DB::table('participante')->select('nombre','num_boleto','descripcion')
            ->join('ganadores','ganadores.id_participante','=','participante.id')->
            join('premios','premios.id','=','ganadores.id_obsequio')->get();

        $pendientes = DB::table('participante')->select('nombre','num_boleto')
            ->join('asistencia','asistencia.id_participante','=','participante.id')
            ->where('estado','=','1')->where('premio','=','0')->where('ausente','=','1')->get();

        return view('rifas.index',compact('premios', 'participantes','index','pendientes'));
    }
    public function saveRifas(Request $request){

        DB::table('asistencia')->where('id_participante',$request->id_participante)
            ->update(['premio'=>$request->premio_asistencia]);

        DB::table('premios')->where('id',$request->id_premio)
            ->update(['estado'=>$request->estado_premio_premios]);
        DB::table('ganadores')->insert([
            'id_participante'=>$request->id_participante,
            'id_obsequio'=>$request->id_premio
        ]);
        return redirect(route('rifas'));
    }
}
