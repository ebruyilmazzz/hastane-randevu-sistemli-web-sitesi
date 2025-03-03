<?php
// database/migrations/{timestamp}_add_telno_to_randevus_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTelnoToRandevusTable extends Migration
{
    public function up()
    {
        Schema::table('randevus', function (Blueprint $table) {
            $table->string('telno')->nullable(); // telno alanını ekliyoruz
        });
    }

    public function down()
    {
        Schema::table('randevus', function (Blueprint $table) {
            $table->dropColumn('telno'); // Geri almak için telno kolonunu sileriz
        });
    }
};
