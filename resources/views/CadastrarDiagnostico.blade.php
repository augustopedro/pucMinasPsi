<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Diagnóstico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('diagnostico/create')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Cadastrar Diagnóstico</legend>
            </header>
            <div class="control-group">
                <!-- Id do Diagnóstico -->
                <label class="control-label">Identificador do Diagnóstico</label>
                <div class="controls">
                    <input type="text" id="idDiagnostico" name="clientes_id" class="input-xlarge" size="5" readonly>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Descrição -->
                <label class="control-label">Descrição</label>
                <div class="controls">
                    <input type="textarea" id="idDescricao" name="descricao" class="input-xlarge" rows="5" cols="10" required>
                    <p class="help-block">Apenas letras e espaços</p>
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>