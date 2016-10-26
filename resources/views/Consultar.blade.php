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
    @if(!empty($consultas))
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('consulta/procurar')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Consulta em Andamento</legend>
            </header>
            <div class="control-group">
                <select name="id" id="id onchange="this.form.submit()">
                    <option value= "null"></option>
                    @foreach ($consultas as $consulta)
                    <option value= "{{$consulta->id}}">{{$consulta->animal->cliente->nome}}</option>
                    @endforeach
                </select>
                 <div class="controls">
                    <input type="submit" name="submit" value="Procurar" class="btn btn-success">
                </div>
            </div>
        </fieldset>
    </form>
    @else
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('consulta/update')}}'>
        <fieldset>
            <label>{{$consulta->animal->cliente->nome}}</label><br>
            <label>{{$consulta->animal->nome}}</label>
            <div class="control-group">
                <textarea name="diagnostico" id="descricao" placeholder="Insira o diagnóstico" required> 
                </textarea>
            </div>
            <div class="controls">
                <input  value="Finalizar" id="submit" class="btn btn-success" onclick="valida_form()">
            </div>



            <div class="control-group">
                <textarea name="diagnostico" id="justificativa" style="display:none;" placeholder="Insira a justificativa" required> 
                </textarea>
            </div>
            <div class="controls">
                <input type="submit" id="submitJustificativa" style="display:none;" name="submit" value="Confirmar" class="btn btn-success">
            </div>
            <script type="text/javascript" language="javascript">
            function valida_form ()
            {   
                if(document.getElementById("descricao").value == "")
                {
                    alert('Você optou por não adicionar um diagnostico, favor preencher o campo justificativa');
                    var descricao = document.getElementById("descricao");
                    var submit = document.getElementById("submit");
                    descricao.style.display = 'none'; 
                    submit.style.display = 'none';
                    var descricao = document.getElementById("justificativa");
                    var submit = document.getElementById("submitJustificativa");
                    descricao.style.display = 'inline';
                    submit.style.display = 'inline';
                    // document.getElementById("nome").focus();
                    // return false
                }
            }
            </script>
        </fieldset>
    </form>
    @endif
            
     
</body>
</html>