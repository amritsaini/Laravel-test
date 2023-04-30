<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                [
                    'id' => 1,
                    'title' => "firstcontent",
                    'content' => "first content data",
                ],
                [
                    'id' => 2,
                    'title' => "secondcontent",
                    'content' => "second content data",
                ],
                [
                    'id' => 3,
                    'title' => "thirdcontent",
                    'content' => "third content data",
                ],
                [
                    'id' => 4,
                    'title' => "fourthcontent",
                    'content' => "fourth content data",
                ],
                [
                    'id' => 5,
                    'title' => "fifthcontent",
                    'content' => "fifth content data",
                ]
            ]
        );
    }
}
