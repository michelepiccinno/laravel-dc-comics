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
public function index() {
  $books = Comic::all();
  return view("comics.index", compact("books"));
}



}