<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
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
    public function create()
    {
        return view("comics.create");
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $book = new Comic();
  
        $book->title = $data['title'];
        $book->description = $data['description'];
        $book->thumb = $data['thumb'];
        $book->price = $data['price'];
        $book->series = $data['series'];
        $book->sale_date = $data['sale_date'];
        $book->type = $data['type'];
        $book->save();

      
        return redirect()->route('comics.show', $book->id);
    }

}