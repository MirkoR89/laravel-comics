<?php

namespace App\Http\Controllers\Admin;
use App\Comic;
use App\Drawer;
use App\Writer;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::latest()->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drawers = Drawer::all();
        $writers = Writer::all();

        return view('admin.comics.create', compact('drawers', 'writers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedDate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cover' => 'nullable | mimes:jpeg,png,jpg,gif,svg | max:500',
            'banner' => 'nullable | mimes:jpeg,png,jpg,gif,svg | max:500',
            'available' => 'required',
            'series' => 'required',
            'price' => 'required',
            'on_sale_date' => 'required',
            'volume_issue' => 'required',
            'trim_size' => 'required',
            'page_count' => 'required',
            'rated' => 'required'

        ]);
 
        $cover = Storage::put('cover_comics', $request->cover); 
        $validatedDate['cover'] = $cover;

        $banner = Storage::put('banner_comics', $request->banner); 
        $validatedDate['banner'] = $banner;

        $new_comic = Comic::create($validatedDate);

        $new_comic->drawers()->attach($request->drawers);
        $new_comic->writers()->attach($request->writers);

        return redirect()->route('admin.comics.index', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    { 
        //dd($comic);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validatedDate = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('admin.comics.index');
    }
}
