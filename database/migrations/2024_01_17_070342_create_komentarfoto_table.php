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
        Schema::create('komentarfoto', function (Blueprint $table) {
            $table->id('KomentarID');
            $table->integer('FotoID');
            $table->integer('UserID');
            $table->text('IsiKomentar');
            $table->date('TanggalKomentar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentarfoto');
    }
};
