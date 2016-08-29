<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Http\Util\Consts;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone',15)->nullable();
            $table->string('celular',16)->nullable();
            $table->string('cep',10)->nullable();
            $table->string('numero',5)->nullable();
            $table->string('complemento',20)->nullable();
            $table->string('rua')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('cpf')->nullable();
            $table->date('aniversario')->nullable();
            $table->enum('sexo',array('Masc','Fem','None'))->nullable();
            $table->integer('status')->default(Consts::ACTIVE); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
