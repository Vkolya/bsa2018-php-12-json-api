<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JsonApiTest extends TestCase
{
    
    public function test_filtering() {
        $response = $this->get('/api/v1/wallets?filter[deleted_at]=0');
        $response->assertStatus(200);
    }
    
    public function test_wallet_id_with_amount() {
        $response = $this->get('/api/v1/wallets?include=money&fields[wallets]=wallet_id&fields[money]=amount');
        $response->assertStatus(200);
    }
  
    public function test_currency_relation()
    {
        $response = $this->get('/api/v1/wallets/1?include=currency');  
        $response->assertStatus(200);
    }
}
