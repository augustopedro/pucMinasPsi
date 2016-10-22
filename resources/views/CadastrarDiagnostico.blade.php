<!DOCTYPE html>
<html>
@extends('Bootstrap')
<head>
    <title>Cadastrar Diagnóstico</title>
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action=''>
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