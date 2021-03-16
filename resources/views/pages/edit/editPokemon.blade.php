@extends('template.main')
@section('content')
<section class="container">
    <h1 class="text-center">Vous souhaitez modifier votre élément <span class="text-success">{{$edit->name}}</span></h1>
    <form action="/pokemons" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="form-group">
          <label for="exampleInputEmail1">Name : </label>
          <input type="text" class="form-control" name="name" id="name" value="{{$edit->name}}">
        </div>
        <div class="form-group">
          <label for="img">Image : </label>
          <input type="file"  id="img" name="img" value="{{$edit->img}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Level : </label>
            <input type="number" class="form-control" id="level" name="level" value="{{$edit->level}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</section>

@endsection