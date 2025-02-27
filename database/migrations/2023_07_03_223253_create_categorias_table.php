<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateCategoriasTable extends Migration
    {
        public function up()
        {
            Schema::create('categorias', function (Blueprint $table) {
                $table->id();
                $table->string('nombre', 45);
                $table->text('descripcion');
                $table->timestamps();
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('categorias');
        }
    }
    
