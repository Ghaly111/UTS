<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                "name"=>"Gagas Media",
                "address"=>"Jl. H. Montong No. 57 Ciganjur Jagakarsa 12360",
                "phone"=>"021-7888-3030",
                "email"=>"redaksi@gagasmedia.net",
                "image"=>"https://mizanstore.com/assets/img/vendor/Logo-Gagas-Media-265.jpg"
            ],
            [
                "name"=>"Pastel Books",
                "address"=>"Jl.Cinambo No.135, Cisaranten Wetan, Ujung Berung, Bandung 40294 Indonesia",
                "phone"=>"021-783462513",
                "email"=>"redaksi.pastelbooks@gmail.com",
                "image"=>"https://th.bing.com/th/id/OIP.2Wh18BbDz6F_ZuLVkZqLRwAAAA?pid=ImgDet&rs=1"
            ],
            [
                "name"=>"Bukune",
                "address"=>"Jl. H. Montong No. 57 Ciganjur-Jagakarsa Jakarta Selatan 12630 Indonesia",
                "phone"=>"021-78883030",
                "email"=>"redaksi@bukune.com",
                "image"=>"https://bukune.com/wp-content/uploads/2017/04/logo-web.png"
            ],
            [
                "name"=>"Gramedia",
                "address"=>"Gedung Kompas Gramedia Blok 1 lt.5 Jl. Palmerah Barat No.29-37 Jakarta 10270 Indonesia",
                "phone"=>"(021)53650110/11",
                "email"=>"redaksi@gramediapustakautama.id",
                "image"=>"https://logosave.com/images/large/common/02/gramedia-pustaka-utama--gpu-.png"
            ]
            ]);
    }
}
