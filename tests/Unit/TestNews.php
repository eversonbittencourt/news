<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestResponse;


class TestNews extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConsultPosts()
    {
    	$response = $this->json('GET', '/api/news/');
        $response->assertStatus(200);

    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConsultPostsByPage()
    {
    	$response = $this->json('GET', '/api/news/{page?}', ['page' => 2]);
        $response->assertStatus(200);

    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testConsultPost()
    {	
		$response = $this->json('GET', 'api/news/{id}', ['id' => 'banco-central-reduz-para-13-previsao-de-crescimento-do-pib-em-2018']);
        $response->assertStatus(200);    	
    }
}
