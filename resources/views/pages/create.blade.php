@extends('layouts.app')

@section('title','create')
    
@section('content')
<div class="container">
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control @error ('title') is-invalid @enderror" placeholder="title" name="title" required>
            @error('title')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="price" name="price" required>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" placeholder="date" name="sale_date" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="series" name="series" required>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="type" name="type" required>
        </div>
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>
</div>


@endsection
