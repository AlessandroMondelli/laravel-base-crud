@extends('layouts.main')

@section('title','Modifica Laravel Videogame')

@section('content')
<main>
    <div id="create">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('videogames.index') }}" class="btn btn-info float-right upper-btn">Home</a>
                </div>
            </div>
            <div class="row">
                <form action="{{ route('videogames.update',['videogame'=>$videogame->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tipo">Titolo Videogioco</label>
                        <input type="text" name="title" class="form-control" value="{{ $videogame->title }}" placeholder="Inserire titolo"></input>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Piattaforma</label>
                        <input type="text" name="platform" class="form-control" value="{{ $videogame->platform }}" placeholder="Inserire piattaforma"></input>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Pegi</label>
                        <input type="number" name="pegi" class="form-control" value="{{ $videogame->pegi }}" min="3" max="18" placeholder="Inserire pegi"></input>
                    </div>
                    <div class="form-group">
                        <label for="prezzo">Prezzo</label>
                        <input type="text" name="prezzo" class="form-control" value="{{ $videogame->prezzo }}" placeholder="Inserire Prezzo"></input>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="Invia" value="Modifica">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
