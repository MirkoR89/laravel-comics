<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('pages.comics', compact('comics'));
    }

    public function comics()
    {
        return view('pages.single_comics');
    }
}
