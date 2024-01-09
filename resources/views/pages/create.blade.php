@extends('layouts.app')

@section('title','create')
    
@section('content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="price" name="price">
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" placeholder="date" name="sale_date">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="series" name="series">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="type" name="type">
        </div>
        <button type="submit">submit</button>
    </form>
</div>


@endsection
