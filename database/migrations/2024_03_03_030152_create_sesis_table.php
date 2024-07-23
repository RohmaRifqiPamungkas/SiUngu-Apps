<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('sesi')) {
            Schema::create('sesi', function (Blueprint $table) {
                $table->id();
                $table->string('judul', 100);
                $table->string('deskripsi_kegiatan', 255);
                $table->dateTime('tanggal');
                $table->timestamps();
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesis');
    }
};
