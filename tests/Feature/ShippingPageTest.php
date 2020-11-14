<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShippingPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShippingPage()
    {
        $response = $this->get('/shipping-and-returns');

        $response->assertStatus(200);
    }
}
