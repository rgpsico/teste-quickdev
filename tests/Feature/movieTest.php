<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class movieTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testifHomeIsOkCoudStattus200()
    {
        $response = $this->getJson('/api');             
        $response->assertSee('The Suicide Squad');
        $response->assertSee('2021-07-28');
        $response->assertStatus(200);

  
    }

    public function testByidMovie()
    {
        $id = 867;
        $response = $this->getJson('api/movie/{$id}/show');        
        $response->assertStatus(200);
    }

    public function testbyNameMovie()
    {
        $name = "Who Framed Roger Rabbit";
        $response = $this->getJson('api/movie/'.$name);
      
        $response->assertStatus(200);
        $response->assertSee('Who Framed Roger Rabbit');
        $response->assertSee("Toon star Roger is worried that his wife Jessica is playing pattycake with someone else, so the studio hires detective Eddie Valiant to snoop on her. But the stakes are quickly raised when Marvin Acme is found dead and Roger is the prime suspect.");
    }

    public function testbyGenreMovie()
    {
        $genre = 28;
        $response = $this->getJson('api/movie/'.$genre);
      
        $response->assertStatus(200);
    }

    public function testbyPopularMovie()
    {
        $popular = "asc";
        $response = $this->getJson('api/movie/popular/'.$popular);
      
        $response->assertStatus(200);
    }

    public function testbyRateMovie()
    {
        $rate = "asc";
        $response = $this->getJson('api/movie/rate/movies/'.$rate);      
        $response->assertStatus(200);
    }


    



}
