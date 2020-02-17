@extends('layouts.main')

@section('title','Home Laravel Videogames')

@section('content')
    @forelse ($videogames as $videogame)

    @empty
        <p>Non è presente alcun videogioco!</p>
    @endforelse
@endsection
