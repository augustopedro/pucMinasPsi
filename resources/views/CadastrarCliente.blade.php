<!DOCTYPE html>
<html>
@extends('Bootstrap')
<head>
    <title>Cadastrar Cliente</title>
</head>

<body>
    <form class="col-md-7 col-md-offset-3" method="POST" action='{{ route( 'cliente/create' )}}'>
        <fieldset>
            <header class="legend">
                <legend class="">Cadastrar Cliente</legend>
            </header>
            <div class="control-group">
                <!-- Nome Completo -->
                <label class="control-label">Nome completo</label>
                <div class="controls">
                    <input type="text" id="idNome" name="nome" placeholder=" " class="input-xlarge " size="50" required>
                    <p class="help-block">Apenas letras e espaços</p>
                </div>
            </div>
            <div class="control-group">
                <!-- CPF -->
                <label class="control-label ">CPF</label>
                <div class="controls">
                    <input type="text" id="idCPF" name="cpf" placeholder=" " class="input-xlarge" pattern="\d*" size="11" maxlength="11" required>
                    <p class="help-block">Apenas números</p>
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
                <!-- E-mail -->
                <label class="control-label">Email</label>
                <div class="controls">
                    <input type="email" id="idEmail" name="email" class="input-xlarge">
                    <p class="help-block">Insira um endereço de email válido</p>
                </div>
            </div>
            <div class="control-group">
                <!-- Telefone-->
                <label class="control-label">Telefone</label>
                <div class="controls">
                    <input type="tel" id="idTelefone" name="telefone" class="input-xlarge" pattern="\d*" required>
                    <p class="help-block">Apenas números</p>
                </div>
            </div>
            <div class="control-group">
                <!-- Celular -->
                <label class="control-label">Celular</label>
                <div class="controls">
                    <input type="tel" id="idCelular" name="celular" pattern="\d*" class="input-xlarge">
                    <p class="help-block">Apenas números</p>
                </div>
            </div>
            <div class="control-group ">
                <!-- Rua -->
                <label class="control-label">Rua</label>
                <div class="controls">
                    <input type="text" id="idRua" name="rua" class="input-xlarge" size="50" required>
                    <p class="help-block">Apenas letras</p>
                </div>
            </div>
            <div class="control-group ">
                <!-- Número -->
                <label class="control-label">Número</label>
                <div class="controls">
                    <input type="text" id="idNumero" name="numero" class="input-xlarge" size="5" maxlength="6" required>
                    <p class="help-block">Apenas números</p>
                </div>
            </div>
            <div class="control-group">
                <!-- Complemento -->
                <label class="control-label">Complemento</label>
                <div class="controls">
                    <input type="text" id="idComplemento" name="complemento" class="input-xlarge" size="30" maxlength="30">
                    <p class="help-block">Casa, Apartamento, Bloco, Quadra</p>
                </div>
            </div>
            <div class="control-group ">
                <!-- Bairro -->
                <label class="control-label">Bairro</label>
                <div class="controls">
                    <input type="text" id="idBairro" name="bairro" class="input-xlarge" maxlength="15" size="15">
                    <p class="help-block">Apenas letras</p>
                </div>
            </div>
            <div class="control-group">
                <!-- Cidade -->
                <label class="control-label">Cidade</label>
                <div class="controls">
                    <input type="text" id="idCidade" name="cidade" class="input-xlarge" size="15" maxlength="15">
                    <p class="help-block">Apenas letras</p>
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
