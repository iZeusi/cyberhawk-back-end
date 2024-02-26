<?php

namespace Tests\Unit;

use App\Models\Component;
use App\Models\Grade;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComponentTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    // Test for retrieving all components
    public function testGetAllComponents()
    {
        Component::factory(3)->create();

        $response = $this->get('/api/components');
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'component_type_id',
                    'turbine_id',
                    'created_at',
                    'updated_at',
                ]
            ]
        ]);
    }

    // Test for retrieving a specific component
    public function testGetComponent()
    {
        $component = Component::factory()->create();

        $response = $this->get("/api/components/$component->id");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'id',
            'component_type_id',
            'turbine_id',
            'created_at',
            'updated_at',
        ]);
    }

    // Test for retrieving all grades belonging to a component
    public function testGetAllGradesForComponent()
    {
        $component = Component::factory()->create();
        Grade::factory(5)->create(['component_id' => $component->id]);

        $response = $this->get("/api/components/$component->id/grades");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'inspection_id',
                    'component_id',
                    'grade_type_id',
                    'created_at',
                    'updated_at',
                ]
            ]
        ]);
    }

    // Test for retrieving a specific grade belonging to a component
    public function testGetGradeForComponent()
    {
        $component = Component::factory()->create();
        $grade = Grade::factory()->create(['component_id' => $component->id]);

        $response = $this->get("/api/components/$component->id/grades/$grade->id");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'id',
            'inspection_id',
            'component_id',
            'grade_type_id',
            'created_at',
            'updated_at',
        ]);
    }
}
