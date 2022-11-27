<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                "publisherid"=>"1",
                "title"=>"Manusia Setengah Salmon",
                "author"=>"Raditya Dika",
                "year"=>2011,
                "synopsis"=>"loremipsum",
                "image"=>"https://upload.wikimedia.org/wikipedia/id/thumb/2/2f/Manusia_Setengah_Salmon.jpg/220px-Manusia_Setengah_Salmon.jpg"
            ],
            [
                "publisherid"=>"2",
                "title"=>"Dilan 1990",
                "author"=>"Pidi Baiq",
                "year"=>2014,
                "synopsis"=>"loremipsum",
                "image"=>"https://th.bing.com/th/id/OIP.3pm5qpXYonEbcf5xvBd1ZwHaKt?pid=ImgDet&rs=1"
            ],
            [
                "publisherid"=>"3",
                "title"=>"Senjakala",
                "author"=>"Risa Saraswati",
                "year"=>2018,
                "synopsys"=>"loremipsum",
                "image"=>"https://1.bp.blogspot.com/-2h6HzbZLo6U/XYhoQLGG3kI/AAAAAAAABIY/Pqdi37uwgTYqbngDxBdYKKeKArQMqtfIgCLcBGAsYHQ/s320/SENJAKALA.png"
            ],
            [
                "publisherid"=>"4",
                "title"=>"Negeri 5 Menara",
                "author"=>"Ahmad Fuadi",
                "year"=>2009,
                "synopsis"=>"loremipsum",
                "image"=>"https://www.jagatreview.com/wp-content/uploads/2011/07/negeri-5-menara.jpg"
            ],
            [
                "publisherid"=>"4",
                "title"=>"Superman",
                "author"=>"Kadafi",
                "year"=>2007,
                "synopsis"=>"loremipsum",
                "image"=>"https://th.bing.com/th/id/OIP.Lf2cgpEo0Nj_lKh91baUJAHaLZ?w=198&h=305&c=7&r=0&o=5&pid=1.7"
            ],
            [
                "publisherid"=>"3",
                "title"=>"Iron Man",
                "author"=>"Ghalz",
                "year"=>2006,
                "synopsis"=>"loremipsum",
                "image"=>"https://lrpctech.files.wordpress.com/2013/05/026-iron-man-126-john-romita-jr.jpg"
            ]
        ]);
    }
}
