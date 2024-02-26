<?php

namespace Tests\Unit;

use App\Models\GradeType;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GradeTypeTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    // Test for retrieving all grade types
    public function testGetAllGradeTypes()
    {
        GradeType::factory(3)->create();

        $response = $this->get('/api/grade-types');
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

    // Test for retrieving a specific grade type
    public function testGetGradeType()
    {
        $gradeType = GradeType::factory()->create();

        $response = $this->get("/api/grade-types/$gradeType->id");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'id',
            'name',
            'created_at',
            'updated_at',
        ]);
    }
}
