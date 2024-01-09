<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        $comics = Comic::inRandomOrder()->limit(12)->get();
        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'title' => 'required|min:5|max:255|unique:comics',
            'price' => 'required|max:30',
            'sale_date' => 'required',
            'series' => 'required|max:100',
            'type' => 'required',
        ]);
        //tutto in uno
        //$new_comic = Comic::create($data) solo con fillable
        $new_comic = new Comic;
        $new_comic -> fill($data); //solo con fillable
/*         $new_comic->title = $data['title'] ;
        $new_comic->description = $data['description'] ;
        $new_comic->price = $data['price'] ;
        $new_comic->sale_date = $data['sale_date'] ;
        $new_comic->series = $data['series'] ;
        $new_comic->type = $data['type'] ; */
        $new_comic->save();
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function show(Comic $comic)
    {
        return view('pages.details',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function edit(Comic $comic)
    {
        return view('pages.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
/*         $comic->title = $data['title'] ;
        $comic->description = $data['description'] ;
        $comic->price = $data['price'] ;
        $comic->sale_date = $data['sale_date'] ;
        $comic->series = $data['series'] ;
        $comic->type = $data['type'] ; */
        $comic -> fill($data); //solo con fillable
        $comic->update();
        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('msg',"$comic->title è stato eliminato");
    }
}
