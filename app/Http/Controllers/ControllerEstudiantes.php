<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\validarRequest;
use App\Models\estudiantes; 
class ControllerEstudiantes extends Controller
{
    public function mostrar()
    {
        return view ('AgregarEstudiantes');

    }    
    public function store(validarRequest $request)
    {
        $estudiantes=new estudiantes();
        $estudiantes->Matricula=$request->Matricula;
        $estudiantes->Nombre=$request->Nombre;
        $estudiantes->Edad=$request->Edad;
        $estudiantes->Direccion=$request->Direccion;
        $estudiantes-> save();
        return redirect('estudiantes');

    }
}





