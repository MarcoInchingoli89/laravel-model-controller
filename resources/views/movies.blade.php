@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row row-cols-4 g-4">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $movie->poster }}" class="card-img-top" alt="...">
                        <div class="card-body bg-dark text-white rounded-1">
                            <h6>{{ 'Titolo: ' . $movie->title }}</h6>
                            <h6>{{ 'Titolo Originale: ' . $movie->original_title }}</h6>
                            <h6>{{ 'Nazionalità: ' . $movie->nationality }}</h6>
                            <h6>{{ 'Data d/uscita: ' . $movie->date }}</h6>
                            <h6>{{ 'Voto: ' . $movie->vote }}</h6>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
