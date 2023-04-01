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
        dd($scrap);
        return view('dashboard/build/index',[
            'title' => $title
        ]);
}

public function linkScrap(Request $request)
{
    return view('admin.scrap.link')
}



}