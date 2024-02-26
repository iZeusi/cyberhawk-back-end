<?php

namespace Tests\Unit;

use App\Models\Component;
use App\Models\Turbine;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TurbineTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    // Test for retrieving all turbines
    public function testGetAllTurbines()
    {
        Turbine::factory(3)->create();

        $response = $this->get('/api/turbines');
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'farm_id',
                    'lat',
                    'lng',
                    'created_at',
                    'updated_at',
                ]
            ]
        ]);
    }

    // Test for retrieving a specific turbine
    public function testGetTurbine()
    {
        $turbine = Turbine::factory()->create();

        $response = $this->get("/api/turbines/$turbine->id");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'id',
            'name',
            'farm_id',
            'lat',
            'lng',
            'created_at',
            'updated_at',
        ]);
    }

    // Test for retrieving all components belonging to a turbine
    public function testGetAllComponentsForTurbine()
    {
        $turbine = Turbine::factory()->create();
        Component::factory(5)->create(['turbine_id' => $turbine->id]);

        $response = $this->get("/api/turbines/$turbine->id/components");
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

    // Test for retrieving a specific component belonging to a turbine
    public function testGetComponentForTurbine()
    {
        $turbine = Turbine::factory()->create();
        $component = Component::factory()->create(['turbine_id' => $turbine->id]);

        $response = $this->get("/api/turbines/$turbine->id/components/$component->id");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'id',
            'component_type_id',
            'turbine_id',
            'created_at',
            'updated_at',
        ]);
    }
}
