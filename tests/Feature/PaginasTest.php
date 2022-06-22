<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaginasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_vind_drinks()
    {
        $response = $this->get('/drinks');

        $response->assertStatus(200);
    }

    public function test_vind_edit_pagina()
    {
        $response = $this->get('/edit/3');

        $response->assertStatus(200);
    }

    public function test_vind_overzicht_pagina()
    {
        $response = $this->get('/klanten_overzicht');

        $response->assertStatus(200);
    }
}
