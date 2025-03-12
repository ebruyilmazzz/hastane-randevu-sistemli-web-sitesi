<?php

// database/migrations/{timestamp}_update_randevus_table_add_nullable_telefon.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRandevusTableAddNullableTelefon extends Migration
{
    public function up()
    {
        Schema::table('randevular', function (Blueprint $table) {
            $table->string('telefon')->nullable()->change(); // telefon alanını nullable yapıyoruz
        });
    }

    public function down()
    {
        Schema::table('randevular', function (Blueprint $table) {
            $table->string('telefon')->nullable(false)->change(); // geri almak için nullable'dan çıkarıyoruz
        });
    }
};
