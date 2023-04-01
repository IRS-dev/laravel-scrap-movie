<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.movie.index',[
            'movies' => Movie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'actor' => ['required','max:255'],
            'genre' => ['required', 'max:255'],
            'poster' => ['required'],
            'rating' =>['required'],
            'sinopsis'=> ['required'],
        ]);
        Movie::create($validatedData);
        return redirect('/dashboard/movie')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('admin.movie.show',[
            'movie' => Movie::find($id)
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Movie::destroy($id);
        return redirect('/dashboard/movie')->with('success');
    }
}