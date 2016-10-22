<!DOCTYPE html>
<html>
@extends('Bootstrap')
<head>
    <title>Vender Produto</title>
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{route('venda/create')}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Vender Produto</legend>
            </header>
            <div class="control-group">
                <!-- Produto -->
                <label class="control-label">Produto</label>
                <div class="controls">
                    <input type=text id="idProdutoVenda" name="id_produto" class="input-xlarge" size="50" maxlength="50" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Cliente -->
                <label class="control-label">Cliente</label>
                <div class="controls">
                    <input type="text" id="idClienteVenda" name="id_cliente" class="input-xlarge" size="50" maxlength="50" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Confirmar Venda" class="btn btn-success">
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>