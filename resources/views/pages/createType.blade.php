@extends('template.main')
@section('content')
    <section class="container">
        <h1 class="text-center">Ajouter un Type</h1>
        @if ($errors->any()) 
	    <div class="alert alert-danger"> 
		    <ul> @foreach ($errors->all() as $error) 
			    <li>{{ $error }}</li> @endforeach 
			</ul> </div> 
        @endif
        
        <form action="/types" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name : </label>
              <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pokemon: </label>
                <select name="pokemon_id" id="">
                    <option value="">No pokemon</option>
                    @foreach ($DBPokemon as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection