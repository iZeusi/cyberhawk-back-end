<?php

namespace Tests\Unit;

use App\Models\Grade;
use App\Models\Inspection;
use App\Models\Turbine;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class InspectionTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    // Test for retrieving all inspections belonging to a turbine
    public function testGetAllInspectionsForTurbine()
    {
        $turbine = Turbine::factory()->create();
        Inspection::factory(5)->create(['turbine_id' => $turbine->id]);

        $response = $this->get("/api/turbines/$turbine->id/inspections");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'turbine_id',
                    'inspected_at',
                    'created_at',
                    'updated_at',
                ]
            ]
        ]);
    }

    // Test for retrieving a specific inspection belonging to a turbine
    public function testGetInspectionForTurbine()
    {
        $turbine = Turbine::factory()->create();
        $inspection = Inspection::factory()->create(['turbine_id' => $turbine->id]);

        $response = $this->get("/api/turbines/$turbine->id/inspections/$inspection->id");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'id',
            'turbine_id',
            'inspected_at',
            'created_at',
            'updated_at',
        ]);
    }

    // Test for retrieving all grades belonging to an inspection
    public function testGetAllGradesForInspection()
    {
        $inspection = Inspection::factory()->create();
        Grade::factory(5)->create(['inspection_id' => $inspection->id]);

        $response = $this->get("/api/inspections/$inspection->id/grades");
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

    // Test for retrieving a specific grade belonging to an inspection
    public function testGetGradeForInspection()
    {
        $inspection = Inspection::factory()->create();
        $grade = Grade::factory()->create(['inspection_id' => $inspection->id]);

        $response = $this->get("/api/inspections/$inspection->id/grades/$grade->id");
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
