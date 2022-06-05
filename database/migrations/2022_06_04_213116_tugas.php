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
        Schema::create('tugas', function (Blueprint $table) {
            $table->char('kode_tugas',6)->primary();
            $table->string('keterangan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('file_terlampir');
            $table->string('file_tugas');
            $table->unsignedBigInteger('id_daftar_tugas');
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
        Schema::dropIfExists('tugas');
    }
};
