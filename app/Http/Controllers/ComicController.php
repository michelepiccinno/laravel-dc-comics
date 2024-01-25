<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
public function index() {
  $dati = Comic::all();
  return view('home', compact("dati"));

}
}