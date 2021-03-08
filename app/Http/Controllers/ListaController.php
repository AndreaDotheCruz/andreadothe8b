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
        $estudiante=DB::table('estudiantes')->select('Matricula', 'Nombre', 'Direccion')->where('Nombre','like',"%$texto%")->paginate(10);
        return view ('VistaEstudiantes', compact('estudiante'));
    }
}