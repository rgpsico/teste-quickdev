<?php 

namespace App\Services;

use App\Repositories\Contracts\MoviesRepositoriesInterface;
use Illuminate\Http\Request;

class MovieService
{

    protected $movieRepository;

    public function __construct(MoviesRepositoriesInterface $movieRepository)  
    {
        $this->movieRepository = $movieRepository;
   
    }

    public function allMovieDB()
    {
      return $this->movieRepository->allMovieDB();

    }

    public function moviesById($id)
    {
      return $this->movieRepository->moviesById($id);

    }

    public function moviesByGenre($id)
    {
      return $this->movieRepository->moviesByGenre($id);

    }

    public function popularMovies($popular)
    {
      return $this->movieRepository->popularMovies($popular);

    }

    public function moviesLastes()
    {
      return $this->movieRepository->moviesLastes();

    }

    public function moviesbyTitle($movietitle)
    {
      return $this->movieRepository->MoviesbyTitle($movietitle);

    }

    public function rating($movietitle)
    {
      return $this->movieRepository->rating($movietitle);

    } 


}