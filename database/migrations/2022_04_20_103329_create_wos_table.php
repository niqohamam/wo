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
        Schema::create('wos', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pekerjaan_temuan');
            $table->string('lokasi');
            $table->date('tgl_open');
            $table->time('jam_open');
            $table->string('bidang_pekerjaan');
            $table->string('status_pekerjaan');
            $table->string('pic');
            $table->date('tgl_close');
            $table->time('jam_close');
            $table->string('penyebab');
            $table->string('tindakan');
            $table->string('jenis_pekerjaan');
            $table->string('material');
            $table->string('ket');
            $table->string('foto_open');
            $table->string('foto_close');
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
        Schema::dropIfExists('wos');
    }
};
