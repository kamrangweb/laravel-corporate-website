<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'baslik' => 'Welcome to Our Website',
            'alt_baslik' => 'We provide the best services for your business',
            'url' => '#',
            'video_url' => 'https://www.youtube.com/watch?v=example',
            'resim' => '/images/default-banner.jpg'
        ]);
    }
}
