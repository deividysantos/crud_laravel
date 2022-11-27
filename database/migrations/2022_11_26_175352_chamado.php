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
        Schema::create('chamado', function (Blueprint $table) {
            $table->id();
            $table->foreignId('setor_id')->references('id')->on('setor');
            $table->foreignId('situacao_id')->references('id')->on('situacao');
            $table->string('titulo',30);
            $table->string('descricao',2000);
            $table->date('dataTermino');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamado');
    }
};
