<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KanyeApiTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testFailedApiResponse(): void
    {
        $response = $this->get('/api/kanye-quotes');
        $response->assertStatus(401);
    }

    public function testSuccessApiResponse(): void
    {
        $user = User::factory()->create();
        $token = $user->createToken('Test Token')->plainTextToken;

        $response = $this->get('/api/kanye-quotes', [
            'Authorization' => 'Bearer ' . $token,
        ]);

        $response->assertStatus(401);
    }



}
