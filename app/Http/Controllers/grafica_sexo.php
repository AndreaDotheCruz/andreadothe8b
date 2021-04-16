<?php

namespace App\Http\Controllers;
use App\Http\Requests\validaRequest;

use Illuminate\Http\Request;

class grafica_sexo extends Controller
{
    public function chartjs(){
        $pastel=estudiantes::
        select(conut('Edad'))
        ->join('Edad')->get();
        return view('grafica', ['pastel'=>$pastel]);
    }
}