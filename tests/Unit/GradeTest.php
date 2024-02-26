<?php

namespace Tests\Unit;

use App\Models\Grade;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GradeTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    // Test for retrieving all grades
    public function testGetAllGrades()
    {
        Grade::factory(3)->create();

        $response = $this->get('/api/grades');
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

    // Test for retrieving a specific grade
    public function testGetGrade()
    {
        $grade = Grade::factory()->create();

        $response = $this->get("/api/grades/$grade->id");
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
