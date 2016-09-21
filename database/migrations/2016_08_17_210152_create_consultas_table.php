<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Http\Util\Consts;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data')->nullable();
            $table->integer('veterinarios_id')->unsigned();
            $table->foreign('veterinarios_id')->references('id')->on('veterinarios');
            $table->integer('animals_id')->unsigned();
            $table->foreign('animals_id')->references('id')->on('animals');
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
        Schema::drop('consultas');
    }
}
