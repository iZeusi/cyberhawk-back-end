<?php

namespace Tests\Unit;

use App\Models\ComponentType;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class ComponentTypeTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    // Test for retrieving all component types
    public function testGetAllComponentTypes()
    {
       ComponentType::factory(3)->create();

        $response = $this->get('/api/component-types');
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'created_at',
                    'updated_at',
                ]
            ]
        ]);
    }

    // Test for retrieving a specific component type
    public function testGetComponentType()
    {
        $componentType = ComponentType::factory()->create();

        $response = $this->get("/api/component-types/$componentType->id");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'id',
            'name',
            'created_at',
            'updated_at',
        ]);
    }
}
