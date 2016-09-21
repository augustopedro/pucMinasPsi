<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Http\Util\Consts;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('raca');
            $table->date('aniversario')->nullable();
            $table->integer('clientes_id')->unsigned()->nullable();
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->enum('sexo',array('Masc','Fem'))->nullable();
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
        Schema::drop('animals');
    }
}
