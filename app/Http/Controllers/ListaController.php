<?php

namespace App\Http\Controllers;
use App\Models\estudiantes;
use Illuminate\Http\Request;
use App\Http\Requests\validarUpdate;
use App\Http\Requests\validarRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ListaController extends Controller
{
    public function index(Request $request){
        
        $estudiante= estudiantes::all();
        //return view ('VistaEstudiantes', compact('estudiante'));
        //return $estudiante;
        
        $texto=trim($request->get('texto'));
        $estudiante=DB::table('estudiantes')->select('Matricula', 'Nombre', 'Direccion', 'Edad')->where('Nombre','like',"%$texto%")->paginate(10);
        return view ('VistaEstudiantes', compact('estudiante'));
    }
    public function destroy($Id)
    {
        $estudiante= estudiantes::find($Id);
        //dd($estudiante);
        $estudiante->delete();
        return redirect()->route('Lista.index');
    }
    public function edit($Matricula)
    {
        $estudiante = estudiantes::whereMatricula($Matricula)->firstOrFail();
        return view ('EditaEstudiante', compact('estudiante'));
    }

    public function update(validarUpdate $request, $Id)
    {
        $estudiante= estudiantes::findOrFail($Id);
        $estudiante->Matricula = $request->input('Matricula');
        $estudiante->Nombre =$request->input('Nombre');
        $estudiante->Direccion =$request->input('Direccion');
        $estudiante->Edad =$request->input('Edad');
        $estudiante->save();
        return redirect()->route('Lista.index');
    }
        

}