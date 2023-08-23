<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $categories = Category::all();
        return view('films.create', ['countries' => $countries, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $film = new Film();
        $film->namefilm = $request->namefilm;
        if ($request->hasFile('image')) {
            $film->image = $request->file('image')->store('public/images');
            $film->image = env('APP_URL').str_replace('public/', '/upload/', $film->image);
        }
        $film->director = $request->director;
        $film->lengthtime = $request->lengthtime;
        $film->releaseyear = $request->releaseyear;
        $film->country_id = $request->country_id;
        $film->save();
        $film->categories()->attach($request->categories);
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
        return view('film.show', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);
        $countries = Country::all();
        $categories = Category::all();
        return view('films.edit', ['film'=>$film, 'countries' => $countries, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $film = Film::find($id);
        $film->namefilm = $request->namefilm;
        if ($request->hasFile('image')) {
            $film->image = $request->file('image')->store('public/images');
        }
        $film->director = $request->director;
        $film->lengthtime = $request->lengthtime;
        $film->releaseyear = $request->releaseyear;
        $film->country_id = $request->country_id;
        $film->categories()->sync($request->categories);
        $film->save();
        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::find($id);
        $film->delete();
        return redirect('/film');
    }
}
