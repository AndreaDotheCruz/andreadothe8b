<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\validaRequest;
class datosController extends Controller
{
public function mostrar()
{
return view ('datos');
}
public function store(validaRequest $request)
{
return $request->all();
}
}
