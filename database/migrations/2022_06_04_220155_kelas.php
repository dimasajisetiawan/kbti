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
        Schema::create('kelas', function (Blueprint $table) {
            $table->char('kode_kelas',6)->primary();
            $table->string('hari');
            $table->string('jam');
            $table->char('kode_mk',6);
            $table->char('id_user',8);
            $table->timestamps();
            $table->foreign('kode_mk')->references('kode_mk')->on('matakuliah')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('kelas');
    }
};
