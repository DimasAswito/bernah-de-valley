<?php

namespace Database\Factories;

use App\Models\Galeri;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriFactory extends Factory
{
    protected $model = Galeri::class;

    public function definition(): array
    {
        $judul = $this->faker->words(3, true);
        $kategori = $this->faker->randomElement(['wahana', 'fasilitas', 'kegiatan', 'umum']);
        
        if (!Storage::disk('public')->exists('galeri')) {
            Storage::disk('public')->makeDirectory('galeri');
        }

        $filename = 'galeri/' . Str::slug($judul) . '-' . uniqid() . '.png';
        $path = Storage::disk('public')->path($filename);
        
        $image = imagecreatetruecolor(800, 600);
        $bg = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
        $text_color = imagecolorallocate($image, 255, 255, 255);
        imagefilledrectangle($image, 0, 0, 800, 600, $bg);
        imagestring($image, 5, 250, 300, substr(strtoupper($judul), 0, 30), $text_color);
        imagepng($image, $path);
        imagedestroy($image);

        return [
            'judul' => ucwords($judul),
            'deskripsi' => $this->faker->sentence(),
            'kategori' => $kategori,
            'tipe_file' => 'foto',
            'file_path' => $filename,
            'wahana_id' => null,
            'is_active' => true,
        ];
    }
}
