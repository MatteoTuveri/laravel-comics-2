@extends('layouts.app')
@section('content')
<main>
    <div id="jumbo" class="w-100">
    </div>
    <div class="bg-cards">
        <div class="container py-5 position-relative d-flex flex-column align-items-center">
            <div class="ind text-white bg-dc position-absolute p-3 fw-bold">
                CURRENT SERIES
            </div>
            <div class="row py-5">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-xl-2 my-4 ">
                        <a href="{{ route('comics.show',$comic->id) }}" class="d-flex flex-column align-items-center">
                            <div class="img-card overflow-hidden">
                                <img src="{{  $comic->thumb }}" class="w-100" alt="{{$comic->title}}">
                            </div>
                            <div class="text-white text-center py-2">
                                {{ $comic->title }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('comics.create') }}" class="text-center text-white bg-dc px-5 py-2 fw-bold">CREATE</a>
        </div>
    </div>
    <div class="bg-dc">
        <div class="container d-flex flex-wrap justify-content-center py-5">
{{--             @foreach ($store['options_shop'] as $item)
            <div class="d-flex align-items-center px-3 ">
                <div>
                    <img src="{{ Vite::asset($item['img']) }}" alt="{{$item['title']}}" class="opt">
                </div>
                <div class=" text-start text-uppercase text-white ms-2">
                    {{$item['title']}}
                </div>
            </div>  
            @endforeach --}}
        </div>
    </div>
</main>
@endsection