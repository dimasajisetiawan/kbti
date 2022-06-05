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
        Schema::create('daftar_pengumpul_tugas', function (Blueprint $table) {
            $table->id('id_daftar_pengumpul_tugas');
            $table->char('id_user',8);
            $table->char('kode_tugas',6);
            $table->string('file_tugas')->nullable();
            $table->timestamps();
            $table->foreign('kode_tugas')->references('kode_tugas')->on('tugas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('id_user')->references('id_user')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_pengumpul_tugas');
    }
};
