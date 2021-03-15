<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TypeController;
use App\Models\Pokemon;
use App\Models\Type;
use Database\Seeders\PokemonSeeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $pokemon = Pokemon::all();
    // dd($pokemon[0]->types->name);
    $DBType = Type::all();
    $DBPokemon = Pokemon::all();
    return view('welcome', compact("DBType", "DBPokemon"));
});
Route::resource("pokemons", PokemonController::class);
Route::resource("types", TypeController::class);
