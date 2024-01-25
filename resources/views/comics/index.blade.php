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
            <li>{{ $book['title'] }}</li> <br><br>
            <li>{{ $book['description'] }}</li> <br><br>
            <li>{{ $book['description'] }}</li> <br><br>
            <li>{{ $book['thumb'] }}</li> <br><br>
            <li>{{ $book['price'] }}</li> <br><br>
            <li>{{ $book['series'] }}</li> <br><br>
            <li>{{ $book['sale_date'] }}</li> <br><br>
            <li>{{ $book['type'] }}</li> <br><br>
    </ul>
    @endforeach
@endsection
