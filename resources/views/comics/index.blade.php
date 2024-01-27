@extends('layouts.app')

@section('content')
    PROVIENE DA <h1>index.blade.php</h1>
    {{-- @php
var_dump($books);    
@endphp --}}
    <br><br><br>

    <h3 class="border">Display a listing of the resource.</h3>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book['id'] }}</li> <br><br>
            <li>{{ $book['title'] }}</li> <br><br>
            <li>{{ $book['description'] }}</li> <br><br>
            <li>{{ $book['thumb'] }}</li> <br><br>
            <li>{{ $book['price'] }}</li> <br><br>
            <li>{{ $book['series'] }}</li> <br><br>
            <li>{{ $book['sale_date'] }}</li> <br><br>
            <li>{{ $book['type'] }}</li> <br><br>
    </ul>

    <form action="{{ route('comics.destroy', $book->id) }}" method="POST" class="d-inline-block">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cancella" class="btn btn-danger">
    </form>

    <div class="border">
        <h4>ROTTA SHOW (VISUALIZZA title e description)</h4>
        <a href="{{ route('comics.show', $book->id) }}">Dettagli</a>
    </div>
    @endforeach
@endsection
