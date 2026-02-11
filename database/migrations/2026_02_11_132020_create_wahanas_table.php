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
        Schema::create('wahana', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->string('gambar');
            $table->decimal('harga_tiket', 10, 2)->default(0);
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->integer('kapasitas')->nullable();
            $table->enum('status', ['aktif', 'maintenance', 'tutup'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wahana');
    }
};
