<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{

  public function validation($data)
  {
    $validated = Validator::make($data, [
      "title" => "required|min:5|max:50",
      "description" => "required|max:1500",
      "thumb" => "required|max:120",
      "price" => "required",
      "series" => "required|max:20",
      "sale_date" => "required|date|max:20",
      "type" => "required|min:1"
    ], [
      'title.required' => 'Non hai inserito il titolo',
      'title.max' => 'Troppo lungo',
      'title.min' => 'Troppo corto',
      'type.min' => 'Non hai selezionato il tipo'
    ])->validate();

    return $validated;
  }

  /*
  * stampa dati grezzi CON VAR_DUMP
  */
  /*
public function index() {
  $dati = Comic::all();
  return view('home', compact("dati"));
} */


  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $books = Comic::all();
    return view("comics.index", compact("books"));
  }


  /**
   * Display the specified resource.
   */
  //
  public function show(Comic $comic) //CON dependecy injection la variabile dobbiamo chiamarla $comic (proprio come il modello Comic) , come anche specificato nelle route liest GET|HEAD        comics/{comic} ......................... comics.show. Anche in vista show useremo $comic
  {
    return view("comics.show", compact("comic"));
  }


  /**
   * Show the form for creating a new resource.
   */
  public function create(Comic $book)
  {
    return view("comics.create", compact("book"));
  }


  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $data = $request->all();
    $dati_validati = $this->validation($data);
    $book = new Comic();
    $book->fill($dati_validati);/*
    $book->title = $dati_validati['title'];
    $book->description = $dati_validati['description'];
    $book->thumb = $dati_validati['thumb'];
    $book->price = $dati_validati['price'];
    $book->series = $dati_validati['series'];
    $book->sale_date = $dati_validati['sale_date'];
    $book->type = $dati_validati['type'];
    $book->fill($dati_validati);                          in alternativa a quanto sopra*/
    $book->save();

    return redirect()->route('comics.show', $book->id);
  }


  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Comic $comic)
  {
    return view("comics.edit", compact("comic"));
  }


  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Comic $comic)
  {
    $data = $request->all();
    $dati_validati = $this->validation($data);
    $comic->update($dati_validati);
    return redirect()->route('comics.show', $comic->id);
  }


  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Comic $comic)
  {
    $comic->delete();
    return redirect()->route('comics.index');
  }
}
