<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JsonApiTest extends TestCase
{
    public function test_sorting()
    {
        $response = $this->get('/api/v1/wallets?sort=user_id');  
      
        $response->assertStatus(200);
    }
     public function test_filtering() {
        $response = $this->get('/api/v1/wallets?filter[deleted_at]=null');

        $response->assertStatus(200);
    }

    public function test_relations()
    {
        $response = $this->get('/api/v1/wallets/1?include=user');  
        
        $response->assertStatus(200);
    }
}
