<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Esudiantes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

</head>
<body>
     <div class="container">
        <h4>Lista de estudiantes</h4>
        <div class="col-xl-12">
        <form action="{{route('Lista.index')}}" method= "get">
        <div class="form row">
        <div class="col sm-4">
        <input type="text" class="form-control" name="texto" id="texto">
        </div>
        <div class="col auto">
        <input type="submit" class="btm btn-primary" value="Buscar">
        </div>
        </div>
        </form>
</div-class-col>
           <div class="row">
             <div class="col-xl-12">
               <div class="table-responsive">
                  <table class="table table-striped">
                     <thead class="thead-light">
                         <tr>
                         <th> Matrícula</th>
                         <th> Nombre</th>
                         <th> Dirección </th>
                         <th> Acciones </th>
                         <th></th>
                         </tr>
                     </thead>
                     <tbody>
                     @foreach ($estudiante as $estudiantes) 
                     <tr>
                     <td>{{$estudiantes->Matricula}}</td>
                     <td>{{$estudiantes->Nombre}}</td>
                     <td>{{$estudiantes->Direccion}}</td>
                     <td>
                      <a href="{{route ('Lista.edit', $estudiantes->Matricula)}}" class="btn btn-primary btn-sm btn btn-warning btn-sm">Actualizar</a>
                      </td>
                     <td><form method="POST" action ="{{url("Lista/{$estudiantes->Matricula}")}}">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm ('¿Deseas borrar el registro?');">Eliminar</button>
                     </form>
                     </td>
                     </tr>
                     @endforeach
                     </tbody>
                 </table>
               </div>
             </div-class-col>
            </div class>
     </div> 
 </body>
</html>