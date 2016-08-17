<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda_produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendas_id')->unsigned()->nullable();
            $table->foreign('vendas_id')->references('id')->on('vendas');
            $table->integer('produtos_id')->unsigned()->nullable();
            $table->foreign('produtos_id')->references('id')->on('produtos');
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
        Schema::drop('venda_produtos');
    }
}
