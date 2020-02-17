@extends('layouts.main')

@section('title','Home Laravel Videogames')

@section('content')
<main>
    <div class="main-sez">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('videogames.create') }}" class="btn btn-info float-right upper-btn">Aggiungi videogioco</a>
                </div>
            </div>
            <div class="row">
                @forelse ($videogames as $videogame)
                <div class="col-lg-6 videogame-card">
                    <div class="card">
                      <div class="card-body">
                        <h2><class="card-title">{{ $videogame->title }}</h2>
                        <p class="card-text">Piattaforma: {{ $videogame->platform }}</p>
                        <p class="card-text">PEGI: {{ $videogame->pegi }}</p>
                        <p class="card-text">Prezzo: {{ $videogame->prezzo }}</p>
                        <a href="{{ route('videogames.show',['videogame'=>$videogame->id]) }}" class="btn btn-primary">Dettagli</a>
                        <a href="{{ route('videogames.edit',['videogame'=>$videogame->id]) }}" class="btn btn-warning">Modifica</a>
                        <form class="" action="{{ route('videogames.destroy',['videogame'=>$videogame->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Elimina">
                        </form>
                      </div>
                    </div>
                </div>
        @empty
                <p>Non è presente alcun videogioco!</p>
        @endforelse
            </div>
        </div>
    </div>
</main>
@endsection
