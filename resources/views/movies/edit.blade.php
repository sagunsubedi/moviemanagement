@extends('movies.layout')
@section('content')

<div class="wrapperdiv">
    <div class="formcontainer">

        <h2>Edit Movie</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops! There were some problems with your input.</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $movie->title }}">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Genre</label>
                <div class="col-sm-10">
                    <select name="genre" class="form-control">
                        <option value="">Select Genre</option>

                        @foreach ($genres as $genre)
                            <option value="{{ $genre }}"
                                {{ $genre == $movie->genre ? 'selected' : '' }}>
                                {{ $genre }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Release Year</label>
                <div class="col-sm-10">
                    <input type="text" name="release_year" class="form-control"
                           value="{{ $movie->release_year }}">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Poster</label>
                <div class="col-sm-10">
                    <input type="file" name="poster" class="form-control">
                </div>
            </div>
 
            <div class="row">
                <div class="col-sm-10 ms-auto">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection