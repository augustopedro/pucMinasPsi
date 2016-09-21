<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Animal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('animal/create')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Cadastrar Animal</legend>
            </header>
            <div class="control-group">
                <!-- Id do Cliente -->
                <label class="control-label">Identificador do Cliente</label>
                <div class="controls">
                    <input type="text" id="idCliente" name="clientes_id" class="input-xlarge" size="5" readonly>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Nome Completo -->
                <label class="control-label">Nome do Animal</label>
                <div class="controls">
                    <input type="text" id="idNome" name="nome" class="input-xlarge " size="20" maxlength="20" required>
                    <p class="help-block">Apenas letras e espaços</p>
                </div>
            </div>
            <div class="control-group">
                <!-- CPF -->
                <label class="control-label ">Raça</label>
                <div class="controls">
                    <input type="text" id="idRaca" name="raca" class="input-xlarge" size="15" maxlength="15" required>
                    <p class="help-block">Apenas letras</p>
                </div>
            </div>
            <div class="control-group ">
                <!-- Sexo -->
                <label class="control-label">Sexo</label>
                <div class="controls">
                    <select name="sexo" id="idSexo" required>
                        <option value="masc">Masculino</option>
                        <option value="femi">Feminino</option>
                    </select>
                    <p class="help-block">Selecione o sexo</p>
                </div>
            </div>
            <div class="control-group">
                <!-- Aniversário -->
                <label class="control-label">Aniversário</label>
                <div class="controls">
                    <input type="date" id="idAniversario" name="aniversario" class="input-xlarge" size="10" maxlength="10" required>
                    <p class="help-block">Selecione no calendário</p>
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