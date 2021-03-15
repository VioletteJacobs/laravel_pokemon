<?php

namespace Database\Seeders;

use App\Http\Controllers\TypeController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PokemonSeeder::class,
            TypeSeeder::class,
        ]);
    }
}
