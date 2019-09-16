<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_can_save_a_new_category()
    {
        $data = [
            "name" => "Test Category"
        ];
        $response = $this->post('/categories',$data);

        $this->assertDatabaseHas('categories',$data);
    }
}
