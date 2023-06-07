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
        Schema::create('personas', function (Blueprint $table) {
            $table->id(column:'persona_id');
            $table->unsignedBigInteger(column:'libro_id');
            $table->string(column:'Nombre');
            $table->string(column:'Correo');

            $table->foreign(columns:'libro_id')->references(columns:'libro_id')->on(table:'libros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('personas', function (Blueprint $table) {
            $table->dropForeign(['libro_id']);
        });
        Schema::dropIfExists('personas');
    }
};
