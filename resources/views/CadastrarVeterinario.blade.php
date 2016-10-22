<!DOCTYPE html>
<html>
@extends('Bootstrap')
<head>
    <title>Cadastrar Veterinário</title>
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('veterinario/create')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Cadastrar Veterinário</legend>
            </header>
            <div class="control-group">
                <!-- CTPS do Veterinário -->
                <label class="control-label">CTPS</label>
                <div class="controls">
                    <input type="text" id="idCTPS" name="ctps" class="input-xlarge" size="10" maxlength="10" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Nome do Veterinário -->
                <label class="control-label">Nome do Veterinário</label>
                <div class="controls">
                    <input type="text" id="idNomeVet" name="nomeVet" class="input-xlarge" size="30" maxlength="30" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Confirmar" class="btn btn-success">
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>