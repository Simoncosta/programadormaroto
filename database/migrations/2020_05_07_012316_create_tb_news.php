<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_news', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->comment('IDENTIFICADOR UNIVERSAL EXCLUSIVO DAS NEWS');
            $table->string('reading',100)->comment('APROXIMADAMENTE QUANTOS MINUTOS LENDO ESSA NOTICIA');
            $table->string('title',255)->comment('TITULO DA NOTICIA');
            $table->string('sub_image',255)->commet('NOME DA IMAGEM CADASTRADA NA SUB');
            $table->text('sub_news')->comment('NOTICIA CADASTRADA NA SUB');
            $table->text('news')->commet('NOTICIA');
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
        Schema::dropIfExists('tb_news');
    }
}
