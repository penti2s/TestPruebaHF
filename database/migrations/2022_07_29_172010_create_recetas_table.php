<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pocion');
            $table->foreign('id_pocion')->references('id')->on('pociones');
            $table->string('ingrediente');
            $table->float('cantidad');
            $table->integer('precio');
            $table->timestamps();
        });
    }

    /**172026
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
};
