<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('posts')->insert([
            [
                "name" => "Charles",
                "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aut adipisci doloremque ratione recusandae esse atque ipsum. Earum impedit rem illo quas doloremque error, dicta natus libero exercitationem ad molestias?"
            ],
            [
                "name" => "Lui",
                "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aut adipisci doloremque ratione recusandae esse atque ipsum. Earum impedit rem illo quas doloremque error, dicta natus libero exercitationem ad molestias?"
            ],
            [
                "name" => "Eux",
                "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aut adipisci doloremque ratione recusandae esse atque ipsum. Earum impedit rem illo quas doloremque error, dicta natus libero exercitationem ad molestias?"
            ],
            [
                "name" => "Moi",
                "post" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam aut adipisci doloremque ratione recusandae esse atque ipsum. Earum impedit rem illo quas doloremque error, dicta natus libero exercitationem ad molestias?"
            ],
        ]);
    }
}
