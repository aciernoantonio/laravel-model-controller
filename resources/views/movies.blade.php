@extends('layouts.app')

@section('content')

@foreach ($movies as $movie)
   <div class="card py-4">
        <div class="card-body">

            <h4 class="card-title">{{$movie->title}}</h4>
            <div class="card-text">{{$movie->original_title}}div>
            <div class="card-text">{{$movie->nationality}}</div>
            <div class="card-text">{{$movie->date}}</div>
            <div class="card-text">{{$movie->vote}}</div>
        </div>
    </div> 
@endforeach

    
@endsection