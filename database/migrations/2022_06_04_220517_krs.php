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
        Schema::create('krs', function (Blueprint $table) {
            $table->id('id_krs');
            $table->char('id_user',8);
            $table->char('kode_kelas',6);
            $table->timestamps();
            $table->foreign('id_user')->references('id_user')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('kode_kelas')->references('kode_kelas')->on('kelas')->cascadeOnUpdate()->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs');
    }
};
