<?php

namespace App\Http\Controllers;
use App\Models\estudiantes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ListaController extends Controller
{
    public function index(Request $request){
        
        $estudiante= estudiantes::all();
        //return $estudiante;
        $texto=trim($request->get('texto'));
        $estudiante=DB::table('estudiantes')->select('Matricula', 'Nombre', 'Direccion')->where('Matricula', '=', $texto)->paginate(10);
        return view ('VistaEstudiantes', compact('estudiante'));
    }
}
/*

$str = explode(' ',$_POST['str']);
$resultado = DB::table('empleados')
            ->select('nombres','apellidos','cargo')
            ->where('estado','a')
            ->where(function($query) use($str) {
                foreach($str as $s) {
                    $query = $query->orWhere('nombres','like',"%$s%");
                    $query = $query->orWhere('apellidos','like',"%$s%");
              }
              
            })
            ->take(5)
            ->get();*/
            