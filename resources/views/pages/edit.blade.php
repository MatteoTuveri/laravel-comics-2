@extends('layouts.app')

@section('title','edit'.$comic->title)
    
@section('content')
<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" class="form-control @error ('title') is-invalid @enderror" placeholder="title" name="title" value="{{ old('', $comic->title) }}" >
            @error('title')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="description" name="description" value="{{ old('', $comic->description) }}"></textarea>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control @error ('price') is-invalid @enderror" placeholder="price" name="price" value="{{ old('', $comic->price) }}" >
            @error('price')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="date" class="form-control @error ('sale_date') is-invalid @enderror" placeholder="date" name="sale_date" value="{{ old('', $comic->sale_date) }}" >
            @error('sale_date')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control @error ('series') is-invalid @enderror" placeholder="series" name="series" value="{{ old('', $comic->series) }}" >
            @error('series')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control @error ('type') is-invalid @enderror" placeholder="type" name="type" value="{{ old('', $comic->type) }}" >
            @error('type')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">submit</button>
        <button type="reset">reset</button>
        <a href="{{ route('comics.index') }}">Back to Home</a>
    </form>
</div>


@endsection
