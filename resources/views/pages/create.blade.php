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
            <input type="text" class="form-control @error ('title') is-invalid @enderror" placeholder="title" name="title">
            @error('title')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control @error ('price') is-invalid @enderror"" placeholder="price" name="price">
            @error('price')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="date" class="form-control @error ('sale_date') is-invalid @enderror"" placeholder="date" name="sale_date">
            @error('sale_date')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control @error ('series') is-invalid @enderror"" placeholder="series" name="series">
            @error('series')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control @error ('type') is-invalid @enderror"" placeholder="type" name="type">
            @error('type')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>
</div>


@endsection
