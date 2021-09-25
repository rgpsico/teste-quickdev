<?php 

namespace App\Repositories\Contracts;

interface MoviesRepositoriesInterface 
{
    public function allMovieDB();
    public function moviesById(int $id);
    public function moviesByGenre(int $id);
    public function popularMovies(string $popular);
    public function moviesLastes();
    public function moviesbyTitle( string $title);
    public function rating( string $title);
}