<?php

// database/migrations/{timestamp}_create_randevular_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandevularTable extends Migration
{
    public function up()
    {
        Schema::create('randevular', function (Blueprint $table) {
            $table->id();
            $table->string('adsoyad');
            $table->string('telno');
            $table->string('email');
            $table->dateTime('randevutarih');
            $table->string('bolum');
            $table->text('mesaj')->nullable();
            $table->dateTime('kayittarihi');
            $table->string('ipadresi');
            $table->string('durum')->default('Aktif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('randevular');
    }
}
