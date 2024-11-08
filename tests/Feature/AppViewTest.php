<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppViewTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home_view(): void
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_api_view(): void
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/api');

        $response->assertStatus(200);
    }
}
