@extends('template.main')
@section('content')
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset('storage/img/.poke1.jpeg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nom : {{$show->name}}</h5>
      <p class="card-text">Level : {{$show->level}}</p>
      <p class="card-text">Type : {{$show->types->name}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endsection