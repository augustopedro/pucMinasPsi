<!DOCTYPE html>
<html>

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
                <!-- Veterinário Responsável -->
                <label class="control-label">Veterinário Responsável</label>
                <div class="controls">
                    <input type="text" id="idVet" name="veterinarios_id" class="input-xlarge " size="5" required>
                    <br>
                    </br>
                </div>
            </div>
            <div class="control-group">
                <!-- Animal -->
                <label class="control-label ">Animal</label>
                <div class="controls">
                    <input type="text" id="idAnimal" name="animals_id" class="input-xlarge" size="5" required>
                    <br>
                    </br>
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