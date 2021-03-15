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
                "img" => "erf",
                "level" => 50
            ],
        ]);
    }
}
