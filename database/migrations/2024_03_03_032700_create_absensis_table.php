<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 20);
            $table->string('nama_mahasiswa', 150);
            $table->string('divisi', 100);
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id')->on('sesi'); 
            $table->timestamp('waktu_absen')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('presensi');
    }
};
