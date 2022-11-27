<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_cats')->insert([
            [
                "bookid"=>1,
                "categoryid"=>1
            ],
            [
                "bookid"=>2,
                "categoryid"=>1
            ],
            [
                "bookid"=>3,
                "categoryid"=>1
            ],
            [
                "bookid"=>4,
                "categoryid"=>1
            ],
            [
                "bookid"=>5,
                "categoryid"=>2
            ],
            [
                "bookid"=>6,
                "categoryid"=>2
            ]
            ]);
    }

}
