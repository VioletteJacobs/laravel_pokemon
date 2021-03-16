@extends('template.main')
@section('content')
    <section class="container">
        <h1 class="text-center">Ajouter un POKEMOOOOOOOOON</h1>

        @if ($errors->any()) 
	    <div class="alert alert-danger"> 
		    <ul> @foreach ($errors->all() as $error) 
			    <li>{{$error}}</li> @endforeach 
        </ul> 
      </div> 
        @endif
        
        <form action="/pokemons" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name : </label>
              <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
              <label for="img">Image : </label>
              <input type="file"  id="img" name="img">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Level : </label>
                <input type="number" class="form-control" id="level" name="level">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </section>
@endsection