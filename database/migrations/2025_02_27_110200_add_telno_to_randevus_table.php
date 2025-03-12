<?php
// database/migrations/{timestamp}_add_telno_to_randevus_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTelnoToRandevusTable extends Migration
{
    public function up()
    {
<<<<<<< HEAD
        Schema::table('randevular', function (Blueprint $table) {
=======
        Schema::table('randevus', function (Blueprint $table) {
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
            $table->string('telno')->nullable(); // telno alanını ekliyoruz
        });
    }

    public function down()
    {
<<<<<<< HEAD
        Schema::table('randevular', function (Blueprint $table) {
=======
        Schema::table('randevus', function (Blueprint $table) {
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
            $table->dropColumn('telno'); // Geri almak için telno kolonunu sileriz
        });
    }
};
