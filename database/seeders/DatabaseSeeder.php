<?php

namespace Database\Seeders;

use App\Models\Galeri;
use App\Models\User;
use App\Models\Wahana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Wahana::factory()->count(5)->create();

        $kategoris = ['wahana', 'fasilitas', 'kegiatan', 'umum'];
        foreach ($kategoris as $kat) {
            Galeri::factory()->count(3)->create(['kategori' => $kat]);
        }
    }
}
