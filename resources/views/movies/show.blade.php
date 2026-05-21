@extends('movies.layout')
@section('content')
<div class="wrapperdiv">
    @if($movie)
    <div class="row justify-content-center">
          <div class="card" style="width: 20rem;">
  <img src="{{ asset('uploads/'.$movie->poster) }}" class="card-img-top" style="width: 150px" height="auto;" >
  <div class="card-body">
    <h5 class="card-title">{{ $movie->title }}</h5>
    <p class="card-text">{{ $movie->genre}} | {{$movie->release_year }}</p>
    
  </div>
</div>
   
    @endif
</div>
@endsection
