
<!DOCTYPE html>
<html>
@extends('Bootstrap')
<head>
    <title>Agendar Consulta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('consulta/create')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Agendar Consulta</legend>
            </header>
            <div class="control-group">
                <!-- Data -->
                <label class="control-label">Data</label>
                <div class="controls">
                    <input type="data" id="idData" name="data" class="input-xlarge" size="10" maxlength="10">
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">

                <select name="veterinarios_id" id="veterinarios_id">
                @foreach ($veterinarios as $veterinario)
                        <option value= "{{$veterinario->id}}">{{$veterinario->cliente->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="control-group">
                <div class="control-group">
                <select name="animals_id" id="animals_id">
                @foreach ($animals as $animal)
                        <option value= "{{$animal->id}}">{{$animal->nome}}</option>
                    @endforeach
                </select>
<!--                 <select class="control-group"  name ="clientes_id" id="clientes_id">
                    
                </select> -->
            </div>
            </div>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Agendar" class="btn btn-success">
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>