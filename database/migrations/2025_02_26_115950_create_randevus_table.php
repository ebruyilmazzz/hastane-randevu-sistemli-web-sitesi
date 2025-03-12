<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('randevus', function (Blueprint $table) {
        $table->id();
        $table->string('adsoyad');
        $table->string('email');
        $table->string('telefon');
        $table->string('bolum');
        $table->date('randevu_tarihi');
        $table->text('mesaj')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('randevus');
    }
};
