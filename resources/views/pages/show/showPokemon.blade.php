@extends('template.main')
@section('content')

<section class="container">
    <div class="card text-center" style="width: 58rem;">
        <img class="card-img-top" src="{{asset('storage/img/'.$show->img)}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nom : {{$show->name}}</h5>
          <p class="card-text">Level : {{$show->level}}</p>
          {{-- <p class="card-text">Type : {{$show->types->name}}</p> --}}
          <form action="/pokemons/{{$show->id}}/edit" method="POST">
                @csrf
                @method("GET")
                <button class="btn btn-warning" type="submit">Modifier</button>
        </form>
        </div>
      </div>
</section>

@endsection