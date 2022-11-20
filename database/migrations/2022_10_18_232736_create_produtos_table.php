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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100);
            $table->double("preco");
            $table->integer("quantidade");
            $table->text("descricao");
            $table->string("imagem");
            $table->timestamps();
            $table->foreignId('id_Categoria')->constrained('categorias');
            $table->foreignId('id_Fornecedor')->constrained('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};


//$table->unsignedInteger("id_Categoria")
//->foreign("id_Categoria")
//->references("id")
//->on("categorias");
//$table->unsignedInteger("id_Fornecedor")
//->foreign("id_Fornecedor")
//->references("id")
//->on("fornecedores");