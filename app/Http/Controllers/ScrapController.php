<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        //   return with notification  success/error

        return view('dashboard/build/index')->with([
            'movieTitle' => $title
        ]);
}

public function linkScrap(Request $request)
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