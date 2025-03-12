<?php

// database/migrations/{timestamp}_update_randevus_table_add_nullable_telefon.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRandevusTableAddNullableTelefon extends Migration
{
    public function up()
    {
<<<<<<< HEAD
        Schema::table('randevular', function (Blueprint $table) {
=======
        Schema::table('randevus', function (Blueprint $table) {
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
            $table->string('telefon')->nullable()->change(); // telefon alanını nullable yapıyoruz
        });
    }

    public function down()
    {
<<<<<<< HEAD
        Schema::table('randevular', function (Blueprint $table) {
=======
        Schema::table('randevus', function (Blueprint $table) {
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
            $table->string('telefon')->nullable(false)->change(); // geri almak için nullable'dan çıkarıyoruz
        });
    }
};
