<?php

namespace Database\Seeders;

use App\Models\Master;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 52; $i++) {
            Master::create([
                "user_id" => $i,
                "logo_atas_kiri" => "/3DVista/master-gambar/data-{$i}/logo-atas-kiri.png",
                "logo_rak_atas" => "/3DVista/master-gambar/data-{$i}/logo-rak-atas.png",
                "logo_rak_bawah" => "/3DVista/master-gambar/data-{$i}/logo-rak-bawah.png",
                "logo_rak_tengah" => "/3DVista/master-gambar/data-{$i}/logo-rak-tengah.png",
                "logo_tengah" => "/3DVista/master-gambar/data-{$i}/logo-tengah.png",
                "logo_text" => "/3DVista/master-gambar/data-{$i}/logo-text.png",
                "logo_on" => "/3DVista/master-gambar/data-{$i}/logo-on.png",
                "logo_off" => "/3DVista/master-gambar/data-{$i}/logo-off.png",
                "logo_link" => "/3DVista/master-gambar/data-{$i}/logo-link.png",
                "logo_pdf" => "/3DVista/master-gambar/data-{$i}/logo-pdf.png",
                "logo_wa" => "/3DVista/master-gambar/data-{$i}/logo-wa.png",
                "link_youtube" => "https://www.youtube.com/stand-{$i}",
                "link_browser" => "https://browser-stand-{$i}.com/",
                "link_pdf" => "https://pdf-stand-{$i}.com/",
                "link_wa" => "https://wa.me/stand-{$i}",
            ]);
        }
    }
}
