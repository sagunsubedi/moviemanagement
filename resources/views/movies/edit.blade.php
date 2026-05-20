@extends('movies.layout')
@section('content')

<div class="wrapperdiv">  
    <div class="formcontainer">
        <div class="row">
            <div class="col-lg-12">
            <div class="pull-left">
                <h2>Edit Movie</h2>
            </div>
            </div>
        </div>
        @if ($error->any())

      <div class="altert alert-danger">
        <strong>oops!There were some problems with your input.</strong>
        <ul>
            @foreach ($erros->all() as $error )
             <li>{{ $error }}</li>   
            @endforeach
        </ul>
      </div>
            
        @endif
        <form action="{{ route('movies.update',$movie->id }}" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="form-group row mb-3">
                    <label for="title" class="col-sm-2 col-form-label" >Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="title" class="form-control" value="{{ $movie->titile }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10 mb-3">
                       <select name="genre" id="genre">
                        <option value="">Select Genre</option>
                        @if($genres)
                        @foreach ($genres as $genre )
                        @if ($genres == $movie->genre)
                         <option value="{{ $genre }}" selected>{{ $genre }}</option>
                     @else
                        <option value="{{ $genre }}">{{ $genre }}</option>
                        @endif
                         @endforeach
                         @endif
                       </select>
                    </div>
                </div>

                      <div class="form-group row mb-3">
                    <label for="release_year" class="col-sm-2 col-form-label">Release Year</label>
                    <div class="col-sm-10">
                        <input type="text" name="release_year" id="release_year" class="form-control" value="{{ $movie->release_year }}>
                    </div>
                </div>

            <div class="form-group row mb-3">
                    <label for="poster" class="col-sm-2 col-form-label">Poster</label>
                    <div class="col-sm-10">
                        <input type="file" name="poster" id="poster" class="form-control-file">
                    </div>
                </div>

             <div class="form-group row">
                    <div class="col-sm-2">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
            </div>
            </div>  
            
        </form>
    </div>
</div>
    
    
@endsection
