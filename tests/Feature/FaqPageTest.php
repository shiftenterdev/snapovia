<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FaqPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFaqPage()
    {
        $response = $this->get('/faq');

        $response->assertStatus(200);
    }
}
