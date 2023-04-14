<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function publicNews()
     {
        return view('public.news.index',[
            'news' => News::all()
        ]);
     }
    public function index()
    {
        return view('admin.news.index',[
            'news' =>News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'body' => ['required','max:255'],
        ]);
        News::create($validatedData);
        return redirect('/dashboard/news')->with('success','New News has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('admin.news.show',[
            'news' => News::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.news.edit',[
            'news'=> News::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'body' => ['required','max:255'],
        ]);
        News::where($news->id)->update($validatedData);
        return redirect('/dashboard/news')->with('success','New News has been added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        News::destroy($id);
        return redirect('/dashboard/news')->with('success delete news!');
    }
}
