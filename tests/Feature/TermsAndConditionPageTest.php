<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TermsAndConditionPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTermsAndConditionPage()
    {
        $response = $this->get('/terms');

        $response->assertStatus(200);
    }
}
