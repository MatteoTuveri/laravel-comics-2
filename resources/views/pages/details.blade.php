@extends('layouts.app')

@section('title','details')
    
@section('content')
<div class="container my-5">
    <div class="row flex-column align-items-center gy-4">
        <div class="col-4">
            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p>
                            Serie: {{$comic->series}} <br> Tipologia: {{$comic->type}} <br> Data di uscita: {{$comic->sale_date}}
                        </p>
                        <div class="badge bg-primary">
                            {{ $comic->price }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">MODIFICA</a>
        <form class="w-100" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger delete-button w-100" data-item="{{ $comic->title }}">ELIMINA</button>
        </form>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">TORNA ALLA HOME</a>
    </div> 
</div>

@endsection

