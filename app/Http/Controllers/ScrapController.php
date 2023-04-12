<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Weidner\Goutte\GoutteFacade;
use Illuminate\Support\Collection;
class ScrapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getMovie()
    {
        $crawler = GoutteFacade::request('GET', 'https://www.imdb.com/chart/moviemeter/?ref_=nv_mv_mpm');
        $scrap = $crawler->filter('.titleColumn')->each(function ($node) {
            return$node->text();
          });

         $collection = collect($scrap);
         $title = $collection->take(12);
        //   insert data to database
        foreach ( $title as $movieTitle) {
            Movie::create([
                'title' => $movieTitle
            ]);        
                }
            return redirect('/dashboard/scrap')->with('success','New post has been added');
    }

public function index()
{
    return view('admin.scrap.index');
}
public function scrapMovie(Request $request)
{   
    
    $link = $request->link;
    $querySelector = $request->css;
    $crawler = GoutteFacade::request('GET', $link);
    $scrap = $crawler->filter($querySelector)->each(function ($node) {
        return$node->text();
      });
      return $scrap;
    // 
}

}