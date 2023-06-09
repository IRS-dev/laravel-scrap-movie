<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Exports\MoviesExport;
use Maatwebsite\Excel\Facades\Excel;

class MoviesController extends Controller
{
    public function movieExport()
    {
        return Excel::download(new MoviesExport, 'movie.xlsx');
    }

    public function public()
    {
        
        return view('public.index',[
            'movies' => Movie::all()
        ]);
    }
    public function publicShow($id)
    {
        return view('public.show',[
            'movie' => Movie::find($id)
        ]);
    }
    public function admin()
    {
        return view('admin.index',[
            'movies' => Movie::all()
        ]);
    }
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
            'genre' => ['required', 'max:255'],
            'poster' => ['required',],
            'rating' =>['required'],
            'sinopsis'=> ['required'],
        ]);
        // if($request->file('poster')){
        //     $validatedData['poster'] = $request->file('poster')->store('posters');
        // }
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
    public function edit($id)
    {
        return view('admin.movie.edit',[
            'movie' => Movie::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Movie $movie)
    {

        
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'actor' => ['required','max:255'],
            'genre' => ['required', 'max:255'],
            'sinopsis'=> ['required'],
        ]);
        Movie::where('id',$movie->id)->update($validatedData);
        return redirect('/dashboard/movie');
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