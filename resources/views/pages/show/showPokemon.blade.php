@extends('template.main')
@section('content')

<section class="container">
    <div class="card text-center" style="width: 58rem;">
        <img class="card-img-top" src="{{asset('storage/img/poke1.jpeg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nom : {{$show->name}}</h5>
          <p class="card-text">Level : {{$show->level}}</p>
          {{-- <p class="card-text">Type : {{$show->types->name}}</p> --}}
          <a href="pokemons/{{$show->id}}/edit" class="btn btn-warning">Modify</a>
        </div>
      </div>
</section>

@endsection