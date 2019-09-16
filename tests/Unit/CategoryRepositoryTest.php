<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use App\Repositories\CategoryRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryRepositoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_save_method_in_repository()
    {
        $data = [
            "name" => "Test Category",
        ];
        $categoryRepo = new CategoryRepository(new Category);

        $category = $categoryRepo->save($data);

        $this->assertInstanceOf(Category::class,$category);
    }
}
