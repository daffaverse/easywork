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
        Schema::create('pelamar', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id')->unique();
            $table->string('tanggal_lahir')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('cv')->nullable();
            $table->string('transkrip_nilai')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('portofolio')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamar');
    }
};
