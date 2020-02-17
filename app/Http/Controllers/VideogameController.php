<?php

namespace App\Http\Controllers;

use App\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function index()
    {
        $videogame = Videogame::all();
        return view('videogames.index',['videogames' => $videogame]);
    }

    public function create()
    {
        return view('videogames.create');
    }

    public function store(Request $request)
    {
        $form_data = $request->all(); //Prendo tutti i nuovi dati dal form
        $videogame = new Videogame(); //Creo nuovo elemento

        $videogame->fill($form_data); //Riempio dati per db
        $videogame->save(); //Salvo nel db

        return redirect()->route('videogames.index');
    }

    public function show(Videogame $videogame)
    {
        return view('videogames.show',['videogame' => $videogame]);
    }

    public function edit(Videogame $videogame)
    {
        return view('videogames.edit',['videogame' => $videogame]);
    }

    public function update(Request $request, Videogame $videogame)
    {
        $form_data = $request->all(); //Prendo tutti i nuovi dati dal form
        $videogame->update($form_data); //Aggiorno dati
        return redirect()->route('videogames.index'); //Indirizzo all'index
    }

    public function destroy(Videogame $videogame)
    {
        $videogame->delete(); //Elimino dati
        return redirect()->route('videogames.index'); //Indirizzo all'index
    }
}
