<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instrumentos', function (Blueprint $table) {
            $table->increments('instrumento_id');
            $table->string('instrumento_nombre', 40);
            $table->string('instrumento_moneda', 6);
            $table->string('instrumento_mercado', 20)->nullable();
            $table->string('instrumento_sigla_api', 50);
            $table->string('instrumento_sigla', 50);
            $table->string('instrumento_tipo', 20);
            $table->text('instrumento_descripcion');
            $table->text('instrumento_imagen');
            $table->float('instrumento_ultimoPrecio')->default(0);
            $table->float('instrumento_ultimoPrecioCambio')->default(0);
            $table->dateTime('instrumento_ultimoPrecioFecha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
