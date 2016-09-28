    <!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Produto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('produto/create')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Cadastrar Produto</legend>
            </header>
            <div class="control-group">
                <!-- Descrição -->
                <label class="control-label">Descrição</label>
                <div class="controls">
                    <input type=text id="idDescricao" name="descricao" class="input-xlarge" size="50" maxlength="50" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Preço -->
                <label class="control-label ">Preço</label>
                <div class="controls">
                    <input type="text" id="idPreco" name="price" class="input-xlarge" size="10" maxlength="10" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Cadastrar" class="btn btn-success">
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>