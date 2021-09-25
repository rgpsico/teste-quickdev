<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Movie extends Model
{
    use HasFactory;

    public $urlDefault = "https://api.themoviedb.org/3/movie/popular?api_key=";
    public $urlDescovery = "https://api.themoviedb.org/3/discover/movie?api_key=";
    public $urlSearch = "https://api.themoviedb.org/3/search/movie?api_key=";
    
    public function Movies()
    {

         $popularMovies = Http::get(config('services.tmdb.urlDefault').config('services.tmdb.token'))
        ->json()['results']; 
        return $popularMovies;

    }

    public function MoviesById($id)
    {
         $popularMovies = Http::get("https://api.themoviedb.org/3/movie/".$id."?api_key=".config('services.tmdb.token').'&language=en-US')
        ->json(); 
        return $popularMovies;

    }

    public function moviesByGenre($genreId)
    {
        $popularMovies = Http::get(config('services.tmdb.urlDescovery').config('services.tmdb.token').'&with_genres='.$genreId)
        ->json()['results'];     
        return $popularMovies;

    }

    public function popularMovies($popular)
    {
        $popularMovies = Http::get(config('services.tmdb.urlDescovery').config('services.tmdb.token')."&certification=R&sort_by=vote_average.".$popular)
        ->json()['results'];      
        return   $popularMovies;
    }

    public function moviesLastes()
    {
        $popularMovies = Http::get(config('services.tmdb.urlDescovery').config('services.tmdb.token')."&sort_by.desc")
    ->json()['results'];     
    return  $popularMovies;

    }

    public function moviesbyTitle($name) 
    {      
       $popularMovies = Http::get($this->urlSearch.config('services.tmdb.token').'&query='.$name)
       ->json()['results'];   
       return $popularMovies;
    }

    public function rating() 
    {   

        $popularMovies = Http::get(config('services.tmdb.urlDescovery').config('services.tmdb.token'))
        ->json()['results'];    
        return $popularMovies;
    }


   


}
