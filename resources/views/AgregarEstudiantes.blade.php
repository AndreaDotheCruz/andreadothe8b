<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
<title>Agregar estudiantes</title>
</head>
<body>
    <div clas="container">
        <div class="row">
            <div class="col">
               <h2>Agregar estudiantes</h2>
               <form method="POST" action="{{route ('estudiantes.store')}}">
               @if (count($errors) > 0)
                  <div class="alert alert-danger">
                   <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }} </li>
                      @endforeach 
                   </ul>
                  </div>
               @endif
                    <div class="form-group">
                    <input type="text" name="Matricula" class="form-control" placeholder="Matricula" value="{{old('Matricula')}}">
                    </div>
                    <div class="form-group">
                    <input type="text" name="Nombre" class="form-control"placeholder="Escribe tu Nombre" value="{{ old('Nombre') }}">
                    </div>
                    <div class="form-group">
                    <input type="text" name="Edad" class="form-control"placeholder="Escribe tu Edad" value="{{ old('Edad') }}">
                    </div>
                    <div class="form-group">
                    <textarea name="Direccion" class="form-control"placeholder="Escribe tu dirección" value="{{ old('Direccion') }}"></textarea>
                    </div>
                    <div class="form-group">
                       <input type="submit" value="Enviar"  class="btn btn-primary">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
              </form>
            </div>
        </div>
    </div>
</body>
</html>