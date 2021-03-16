<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DBPokemon = Pokemon::all();
        return view("pages.createPokemon", compact("DBPokemon"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            
            "name" => "required|max:250",
            "level" => "required|max:250",
            "img" => "required|max:950",

        ]);

        $newEntry = new Pokemon;

        $newEntry->name = $request->name;
        $newEntry->level = $request->level;
        Storage::put("public/img",$request->img);
        $newEntry->img = $request->file("img")->hashName();
        $newEntry->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Pokemon::find($id);
        return view("pages.show.showPokemon", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Pokemon::find($id);
        return view ("pages.edit.editPokemon", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $validation = $request->validate([
            
            "name" => "required|max:250",
            "level" => "required|max:250",
            "img" => "required",

        ]);
        $update = Pokemon::find($id);
        $update->name = $request->name;
        $update->level = $request->level;
        Storage::delete('public/img/'.$update->img);
        Storage::put("public/img", $request->img);
        $update->img = $request->file("img")->hashName();


        $update->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Pokemon::find($id);
        Storage::delete("public/img/".$destroy->img);
        $destroy->delete();
        return redirect("/");
    }
}
