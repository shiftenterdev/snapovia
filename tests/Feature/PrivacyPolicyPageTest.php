<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PrivacyPolicyPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPrivacyPolicyPage()
    {
        $response = $this->get('/privacy-policy');

        $response->assertStatus(200);
    }
}
