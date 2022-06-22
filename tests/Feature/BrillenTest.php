<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrillenTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_verwijder_bril_id() 
    {
        $response = $this->get('/edit/3');

        $response->assertStatus(200);
    }
}
