<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("pokemon")->insert([
            [
                "name" => "pika",
                "img" => "poke1.jpeg",
                "level" => 50
            ],
            [
                "name" => "Cara",
                "img" => "poke2.jpeg",
                "level" => 20
            ],
            [
                "name" => "Toupiche",
                "img" => "poke3.jpeg",
                "level" => 15
            ],
        ]);
    }
}
