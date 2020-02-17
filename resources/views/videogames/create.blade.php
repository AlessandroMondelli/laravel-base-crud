@extends('layouts.main')

@section('title','Aggiungi Laravel Videogame')

@section('content')
    <div id="create">
        <div class="container">
            <div class="row">
                <form class="" action="{{ route('videogames.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Titolo Videogioco</label>
                        <input type="text" name="title" class="form-control" placeholder="Inserire titolo"></input>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Piattaforma</label>
                        <input type="text" name="platform" class="form-control" placeholder="Inserire piattaforma"></input>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Pegi</label>
                        <input type="number" name="pegi" class="form-control" min="3" max="18" placeholder="Inserire pegi"></input>
                    </div>
                    <div class="form-group">
                        <label for="prezzo">Prezzo</label>
                        <input type="text" name="prezzo" class="form-control" placeholder="Inserire Prezzo"></input>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="Invia" value="Crea">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
