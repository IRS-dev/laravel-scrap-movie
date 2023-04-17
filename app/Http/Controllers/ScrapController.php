<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Symfony\Component\CssSelector\Node\NodeInterface;
use Symfony\Component\CssSelector\XPath\Extension\NodeExtension;
use Symfony\Component\DomCrawler\Crawler;

use Illuminate\Http\Request;
use App\Models\Movie;
use Weidner\Goutte\GoutteFacade;

class ScrapController extends Controller
{
 



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
    
    $url = $request->link;

    $client = new Client();
    
    $crawler = $client->request('GET', $url);
    
    $title = $crawler->filter('h1[data-testid="hero__pageTitle"] span')->text();
    $poster = $crawler->filter('.ipc-media--poster-l > img:nth-child(1)')->attr('src');
    $desc = $crawler->filter('span[data-testid="plot-xl"]')->text();
    
    $trailerLink = $crawler->filter('a[data-testid="videos-slate-overlay-1"]')->attr('href');
    $crawlerTrailer = $client->request('GET', $trailerLink);
    $data = json_decode($crawlerTrailer->filter('#__NEXT_DATA__')->text());
    $videoUrl = $data->props->pageProps->videoPlaybackData->video->playbackURLs[0]->url;
    $cast = $crawler->filter('div[data-testid="title-cast-item"]')->each(function(Crawler $element) {
        $castName = $element->filter('a[data-testid="title-cast-item__actor"]')->text();
        $imgElement = $element->filter('div.ipc-avatar__avatar-image img');
        $img = $imgElement->count() > 0 ? $imgElement->attr('src') : null;
        $characterNames = $element->filter('a[data-testid="cast-item-characters-link"]')->each(function($characterNameEl){
            return $characterNameEl->text();
        });
    
        return [
            'cast_name' => $castName,
            'avatar_url' => $img,
            'character_names' => $characterNames
        ];
    
    });
    foreach($cast as $actor){
         $character =   ($actor['character_names'][0]);
         $img_actor =   ($actor['avatar_url']);
        $actor_name =  ($actor['cast_name']); 
    }

    // Movie::create([
    //     'title' => $title,
    //     'sinopsis' => $desc,
    //     'poster' => $poster,
    //     'actor' => $actor_name,
    //     'img_actor' => $img_actor,
    //     'character' => $character
    // ]);
    
        Movie::create([
            'title' => $title,
            'sinopsis' => $desc,
            'poster' => $poster,

        ]);

        return redirect('/dashboard/scrap')->with('success','New post has been added');
}

}