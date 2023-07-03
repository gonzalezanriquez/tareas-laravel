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
        Schema::create('juegos', function (Blueprint $table) {
            $table->increments('id_Juego');
            $table->string('nombre', 50)->nullable();
            $table->string('descripcion', 50)->nullable();
            $table->unsignedBigInteger('id_categoria');
            $table->double('precio')->nullable();
            $table->string('path_imagen', 50)->nullable();
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegos');
    }
};