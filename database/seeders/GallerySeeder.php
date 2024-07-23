<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Gallery::create([
            'title' => 'Foto Kegiatan 1',
            'image_path' => 'path/to/image1.jpg',
            'description' => 'Deskripsi untuk foto kegiatan 1.',
        ]);
    }
}
