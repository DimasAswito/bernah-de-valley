<?php

namespace Database\Factories;

use App\Models\Wahana;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class WahanaFactory extends Factory
{
    protected $model = Wahana::class;

    public function definition(): array
    {
        $nama = $this->faker->words(3, true);
        $slug = Str::slug($nama);
        
        if (!Storage::disk('public')->exists('wahana')) {
            Storage::disk('public')->makeDirectory('wahana');
        }

        $filename = 'wahana/' . $slug . '-' . uniqid() . '.png';
        $path = Storage::disk('public')->path($filename);
        
        $image = imagecreatetruecolor(800, 600);
        $bg = imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(100, 255));
        $text_color = imagecolorallocate($image, 0, 0, 0);
        imagefilledrectangle($image, 0, 0, 800, 600, $bg);
        imagestring($image, 5, 250, 300, substr(strtoupper($nama), 0, 30), $text_color);
        imagepng($image, $path);
        imagedestroy($image);

        return [
            'nama' => ucwords($nama),
            'slug' => $slug,
            'deskripsi' => $this->faker->paragraphs(3, true),
            'gambar' => $filename,
            'harga_tiket' => $this->faker->randomElement([0, 15000, 20000, 50000]),
            'jam_buka' => '08:00:00',
            'jam_tutup' => '17:00:00',
            'kapasitas' => $this->faker->numberBetween(10, 100),
            'status' => 'aktif',
        ];
    }
}
