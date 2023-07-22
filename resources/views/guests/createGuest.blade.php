<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar invitado</title>
    
    
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <main class="m-4">
        <h1>Agregar invitado</h1>
        <form action="{{route('guest.store', $event)}}" method="POST">
            @csrf
            <div class='col-12'>
                <label for='name_g'>Nombre:</label>
                <input type="text" name="name_g" id="name_g" class="form-control" value="{{old('name_g')}}" required> 
                @error('name_g')
                    <h5>{{$message}}</h5>
                @enderror
            </div>
            <br>

            <div class="col-12">
                <label for="tickets_g"># de pases:</label>
                <input type="number" name='tickets_g' id='tickets_g'  value="{{old('tickets_g') ?? 1}}" required class="form-control">
                @error('tickets_g')
                    <h5>Debe de haber al menos un pase</h5>
                @enderror
            </div>
            <br>

            <div class="row"></div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>