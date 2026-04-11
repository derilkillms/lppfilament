<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'hero_title', 'label' => 'Hero Title', 'value' => 'Politeknik LPP Yogyakarta', 'type' => 'text'],
            ['key' => 'hero_description', 'label' => 'Hero Description', 'value' => 'Dikenal dengan keunggulan dalam pendidikan di bidang perkebunan, Politeknik LPP menjadi pilihan yang tepat untuk meraih sukses di masa depan, melalui pendidikan vokasi yang menghasilkan lulusan kompeten dan berkarakter.', 'type' => 'textarea'],
            ['key' => 'hero_button_text', 'label' => 'Hero Button Text', 'value' => 'Daftar Sekarang', 'type' => 'text'],
            ['key' => 'hero_button_url', 'label' => 'Hero Button URL', 'value' => '#', 'type' => 'text'],
            ['key' => 'footer_address', 'label' => 'Footer Address', 'value' => 'Jl. LPP No. 1A, Babarsari, Yogyakarta 55222', 'type' => 'textarea'],
            ['key' => 'footer_phone', 'label' => 'Footer Phone', 'value' => '(0274) 1030779', 'type' => 'text'],
            ['key' => 'footer_email', 'label' => 'Footer Email', 'value' => 'mail@poltekniklpp.ac.id', 'type' => 'text'],
            ['key' => 'social_facebook', 'label' => 'Facebook URL', 'value' => '#', 'type' => 'text'],
            ['key' => 'social_instagram', 'label' => 'Instagram URL', 'value' => '#', 'type' => 'text'],
            ['key' => 'social_youtube', 'label' => 'YouTube URL', 'value' => '#', 'type' => 'text'],
            ['key' => 'social_twitter', 'label' => 'Twitter URL', 'value' => '#', 'type' => 'text'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
