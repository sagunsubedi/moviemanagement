@extends('movies.layout')
@section('content')
<div class="wrapperdiv">
    <div class="formcontainer">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Movie</h2>
            </div>
            </div>

        </div>
        <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row mb-3">
                    <label for="title" class="col-sm-2 col-form-control">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-control">Genre</label>
                    <div class="col-sm-10 mb-3">
                       <select name="genre" id="genre">
                        <option value="">Select Genre</option>
                        @if($genres)
                        @foreach ($genres as $genre )
                        <option value="{{ $genre }}">{{ $genre }}</option>
                    
                         @endforeach
                         @endif
                       </select>
                    </div>
                </div>

                      <div class="form-group row mb-3">
                    <label for="release_year" class="col-sm-2 col-form-control">Release Year</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                </div>


            <div class="form-group row mb-3">
                    <label for="poster" class="col-sm-2 col-form-control">Poster</label>
                    <div class="col-sm-10">
                        <input type="file" name="poster" id="title" class="form-control-file">
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
