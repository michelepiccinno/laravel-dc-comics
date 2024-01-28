@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 ps-5">
                <br><br>
                {{ $comic->title }}
                <br><br>
                {{ $comic->description }}
                <br><br>
                {{ $comic->price }}
                <br><br>
            </div>
            <div class="col-4 pe-5">
                <div class="d-flex row row-cols-6 g-4 pt-5">
                    <div class="card card-box">
                        <img src="/imgs/adv.jpg" alt="" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection