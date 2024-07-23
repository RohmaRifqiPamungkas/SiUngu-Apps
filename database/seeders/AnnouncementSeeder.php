<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    public function run()
    {
        Announcement::create([
            'title' => 'Pengumuman Penting',
            'content' => 'Ini adalah isi pengumuman penting.',
            'announcement_date' => now(),
        ]);
    }
}

