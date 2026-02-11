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
        Schema::create('kritik_saran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->nullable();
            $table->text('isi');
            $table->integer('rating');
            $table->enum('kategori', ['umum', 'wahana', 'fasilitas', 'pelayanan']);
            $table->foreignId('wahana_id')->nullable()->constrained('wahana')->onDelete('cascade');
            $table->enum('status', ['pending', 'published', 'rejected'])->default('pending');
            $table->text('balasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik_saran');
    }
};
