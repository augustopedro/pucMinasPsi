<!DOCTYPE html>
<html>
@extends('Bootstrap')
<head>
    <title>Menu</title>
</head>

<body>
@if(Session::has('cadastro'))
    <div class="alert alert-info">
      {{Session::get('cadastro')}}
    </div>
@endif
<img src="logoPet.jpg" alt="..." class="img-rounded" height="42" width="42">
<h3 class="">Pet Shop</h3>
<div class="row">
    <form class="col-xs-2" method="GET" action='{{ route( 'cliente/create' )}}'>
        <fieldset>
            <div class="col-md-1">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Cliente" class="btn btn-primary btn-lg active">
                </div>
            </div>
        </fieldset>
    </form>
    <form class="col-xs-2" method="GET" action='{{ route( 'veterinario/create' )}}'>
        <fieldset>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Veterinario" class="btn btn-primary btn-lg active">
                </div>
            </div>
        </fieldset>
    </form>
    <form class="col-xs-2" method="GET" action='{{ route( 'animal/create' )}}'>
        <fieldset>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Animal" class="btn btn-primary btn-lg active">
                </div>
            </div>
        </fieldset>
    </form>
        <form class="col-xs-3" method="GET" action='{{ route( 'consulta/create' )}}'>
        <fieldset>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Agendar Consulta" class="btn btn-primary btn-lg active">
                </div>
            </div>
        </fieldset>
    </form>
        </form>
        <form class="col-xs-2" method="GET" action='{{ route( 'produto/create' )}}'>
        <fieldset>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Produto" class="btn btn-primary btn-lg active">
                </div>
            </div>
        </fieldset>
    </form>
    </form>
        </form>
        <form class="col-xs-1" method="GET" action='{{ route( 'venda/create' )}}'>
        <fieldset>
            <div class="control-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Venda" class="btn btn-primary btn-lg active">
                </div>
            </div>
        </fieldset>
    </form>
    </div>
</body>
</html>
