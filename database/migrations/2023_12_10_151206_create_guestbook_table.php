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
        Schema::create('guestbook', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat', 200)->nullable();
            $table->text('email');
            $table->integer('nomor_Handphone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guestbook');
    }
};