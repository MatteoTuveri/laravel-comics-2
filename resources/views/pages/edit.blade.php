@extends('layouts.app')

@section('title','edit'.$comic->title)
    
@section('content')
<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="title" name="title" value="{{ old('', $comic->title) }}" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="description" name="description" value="{{ old('', $comic->description) }}"></textarea>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="price" name="price" value="{{ old('', $comic->price) }}" required>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" placeholder="date" name="sale_date" value="{{ old('', $comic->sale_date) }}" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="series" name="series" value="{{ old('', $comic->series) }}" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="type" name="type" value="{{ old('', $comic->type) }}" required>
        </div>
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>
</div>


@endsection
