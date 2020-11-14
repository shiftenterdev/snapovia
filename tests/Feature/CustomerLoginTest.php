<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCustomerLoginPage()
    {
        $response = $this->get('/customer/login');

        $response->assertStatus(200);
    }
}
