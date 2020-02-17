@extends('layouts.main')

@section('title','Mostra Laravel Videogame')

@section('content')
<main>
    <div class="main-sez">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('videogames.index') }}" class="btn btn-info float-right upper-btn">Home</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 videogame-card">
                    <div class="card">
                      <div class="card-body">
                        <h2><class="card-title">{{ $videogame->title }}</h2>
                        <p class="card-text">Piattaforma: {{ $videogame->platform }}</p>
                        <p class="card-text">PEGI: {{ $videogame->pegi }}</p>
                        <p class="card-text">Prezzo: {{ $videogame->prezzo }}</p>
                        <p class="card-text">Data creazione: {{ $videogame->created_at }}</p>
                        <p class="card-text">Data aggiornamento: {{ $videogame->updated_at }}</p>
                        <a href="#" class="btn btn-primary">Acquista ora</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
