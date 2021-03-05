<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

<title>Página de contacto</title>
</head>
<body>
    <div clas="container">
        <div class="row">
            <div class="col">
               <h2>Enviar mensaje</h2>
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
                    <input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre" value="{{old('nombre')}}">
                    </div>
                    <div class="form-group">
                    <input type="email" name="email" class="form-control"placeholder="Escribe tu email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                    <textarea name="mensaje" class="form-control"placeholder="Escribe tus comentarios" value="{{ old('mensaje') }}"></textarea>
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