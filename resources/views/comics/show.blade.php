@extends('layouts.app')

@section('content')
    <H1>SHOW.BLADE.PHP</H1>

    @if (isset($comic))
       TITLE: {{ $comic->title }}
       <br> DESCRIPTION: {{ $comic->description }}
    @else
        <p>Il libro non è stato trovato.</p>
    @endif
@endsection

