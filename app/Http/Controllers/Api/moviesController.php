<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\moviesResource;
use App\Repositories\movieRepository;
use App\Services\MovieService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class moviesController extends Controller
{


   protected $service;

   public function __construct(MovieService $service)
   {
      $this->service = $service;
   }

   public function index()
   {
      $popularMovies  = $this->service->allMovieDB();
      return moviesResource::collection($popularMovies);
   }


   public function show($id)
   {
      $popularMovies =  $this->service->moviesById($id);

      return $popularMovies;
   }


   public function byGenre($genreId)
   {
      $popularMovies =  $this->service->moviesByGenre($genreId);
      return moviesResource::collection($popularMovies);
   }



   public function popularmMovies($popular)
   {
      if (!$popularMovies =  $this->service->popularMovies($popular)) {
         return response()->json(['message' => 'thee movie Not Found'], 404);
      }

      return moviesResource::collection($popularMovies);
   }

   public function releaseDate()
   {
      $popularMovies =  $this->service->moviesLastes();
      return moviesResource::collection($popularMovies);
   }

   public function byTitle($movieByTitle)
   {
      if (!$popularMovies =  $this->service->moviesbyTitle($movieByTitle)) {
         return response()->json(['message' => 'the movie Not Found'], 404);
      }
      return moviesResource::collection($popularMovies);
   }



   public function rating($rating)
   {
      if (!$popularMovies =  $this->service->rating($rating)) {
         return response("the movie Not Found", 403);
      }
      return moviesResource::collection($popularMovies);
   }

}
