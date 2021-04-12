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
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cover' => 'nullable | mimes:jpeg,png,jpg,gif,svg | max:1024',
            'banner' => 'nullable | mimes:jpeg,png,jpg,gif,svg | max:1024',
            'available' => 'required',
            'series' => 'required',
            'price' => 'required',
            'on_sale_date' => 'required',
            'volume_issue' => 'required',
            'trim_size' => 'required',
            'page_count' => 'required',
            'rated' => 'required',
            'drawers'=>'exists:drawers,id',
            'writers'=>'exists:writers,id'
        ]);
 
        $cover = Storage::put('cover_comics', $request->cover); 
        $validatedData['cover'] = $cover;

        $banner = Storage::put('banner_comics', $request->banner);
        $validatedData['banner'] = $banner;

        $new_comic = Comic::create($validatedData);

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
        $drawers = Drawer::all();
        $writers = Writer::all();
        return view('admin.comics.edit', compact('comic', 'drawers', 'writers'));
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
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cover' => 'nullable | mimes:jpeg,png,jpg,gif,svg | max:1024',
            'banner' => 'nullable | mimes:jpeg,png,jpg,gif,svg | max:1024',
            'available' => 'required',
            'series' => 'required',
            'price' => 'required',
            'on_sale_date' => 'required',
            'volume_issue' => 'required',
            'trim_size' => 'required',
            'page_count' => 'required',
            'rated' => 'required',
            'drawers'=>'exists:drawers,id',
            'writers'=>'exists:writers,id'
        ]);

        if ($request->hasFile('cover')) {
            Storage::delete($comic->cover);
            $cover = Storage::put('cover_comics', $request->cover);
            $validatedData['cover'] = $cover;
        }

        if ($request->hasFile('banner')) {
            Storage::delete($comic->banner);
            $banner = Storage::put('banner_comics', $request->banner);
            $validatedData['banner'] = $banner;
        }
        
        $comic->update($validatedData);
        
        $comic->drawers()->sync($request->drawers);
        $comic->writers()->sync($request->writers);

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
        Storage::delete($comic->cover);
        Storage::delete($comic->banner);

        $comic->delete();
        return redirect()->route('admin.comics.index');
    }
}
