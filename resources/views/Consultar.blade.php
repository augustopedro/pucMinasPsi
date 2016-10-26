<!DOCTYPE html>
<html>
@extends('Bootstrap')
<head>
    <title>Consultar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('consulta/create')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Consulta em Andamento</legend>
            </header>
            <div class="control-group">
                <select name="consultas_id" id="consultas_id">
                    @foreach ($consulta as $consulta)
                    <option value= "{{$consulta->id}}">{{$consulta->animal->cliente->nome}}</option>
                    @endforeach
                </select>
            </div>
            @if (is_null($consulta))
                <div class="control-group">
                <textarea name="diagnostico" id="diagnostico_id" placeholder="Insira o diagnóstico" required> 
                </textarea>
                </div>
            @endif
            <div class="control-group">
                <textarea name="diagnostico" id="diagnostico_id" placeholder="Insira o diagnóstico" required> 
                </textarea>
            </div>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Finalizar" class="btn btn-success">
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>