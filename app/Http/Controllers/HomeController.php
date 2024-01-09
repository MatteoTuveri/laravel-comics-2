<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Comic::inRandomOrders()->limit(5)->get();
        dd($products);
        return view('home', compact($products));
    }
}
