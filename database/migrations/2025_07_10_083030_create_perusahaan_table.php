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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id')->unique();
            $table->string('bidang_usaha')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('NIP')->unique();
            $table->string('NPWP')->unique();
            $table->string('izin_operasional')->nullable();
            $table->string('surat_pernyataan')->nullable();
            $table->enum('status', ['pending', 'verified', 'rejected'])->default('pending');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
