@extends('layouts.app')

@section('content')
    <!-- MAIN CARDS -->
    <div class="container">
        <div class="d-flex row row-cols-6 g-4 pt-5">
            @foreach ($books as $book)
                <a href="{{ route('comics.show', $book->id) }}"> {{-- rendo tutto il div cliccabile --}}
                    <div class="card card-box">
                        <img src="{{ $book['thumb'] }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-white">{{ $book['series'] }}</h5>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- BUTTON CREATE -->
    <div class="container">
        <div class="card-body">
            <a href="{{ route('comics.create', $book->id) }}" class="btn btn-warning">INSERISCI</a>
        </div>
    </div>

    <div class="container text-center mb-3">
        <div class="box-label bg-blue d-inline-block">
            <h3 class="m-0">LOAD MORE</h3>
        </div>
    </div>




    {{--

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
    @endforeach --}}
@endsection
