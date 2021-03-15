@extends('template.main')
@section('content')
<section class="container">
    <h1 class="text-center">Pokémoooooooooooooon</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom du pokemon</th>
                <th scope="col">Level</th>
                <th scope="col">Show</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($DBPokemon as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->level}}</td>
                <td>
                    <form action="/pokemons/{{$item->id}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
                <td>
                    <form action="/pokemons/{{$item->id}}" method="POST">
                        @csrf
                        @method("GET")
                        <button class="btn btn-success" type="submit">Voir plus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</section>
    @endsection