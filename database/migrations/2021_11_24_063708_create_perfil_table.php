<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->integer('nro_doc')->primary();
            $table->string('nombres',50);
            $table->string('ap_paterno',30);
            $table->string('ap_materno',30);
            $table->string('direccion',200)->nullable();
            $table->string('celular',11);
            $table->string('correo',100)->unique();
            $table->date('fecha_nacimiento');
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
        Schema::dropIfExists('perfil');
    }
}
