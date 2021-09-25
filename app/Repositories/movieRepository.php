<?php 

namespace App\Repositories;

use App\Models\Movie;
use App\Repositories\Contracts\MoviesRepositoriesInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class movieRepository implements  MoviesRepositoriesInterface
{
    protected $movie;

    public function __construct(Movie $movie)
    {  
      $this->movie = $movie;    
     
    }

    public function allMovieDB()
    {
      return $this->movie->Movies();

    }

    public function MoviesById($id)
    {
      return $this->movie->MoviesById($id);

    }

    public function moviesByGenre(int $genre)
    {
      return $this->movie->moviesByGenre($genre);

    }

    public function popularMovies($popular)
    {
      return $this->movie->popularMovies($popular);

    }

    public function moviesLastes()
    {
      return $this->movie->moviesLastes();

    }

    public function moviesbyTitle($title)
    {
      return $this->movie->MoviesbyTitle($title);

    }

    public function rating($rating)
    {
      return $this->movie->rating($rating);

    }
}