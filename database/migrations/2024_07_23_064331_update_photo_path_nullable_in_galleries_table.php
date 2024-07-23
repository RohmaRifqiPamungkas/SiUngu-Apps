<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePhotoPathNullableInGalleriesTable extends Migration
{
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->string('photo_path')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->string('photo_path')->nullable(false)->change();
        });
    }
}
