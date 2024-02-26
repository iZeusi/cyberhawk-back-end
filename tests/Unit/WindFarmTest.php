<?php

namespace Tests\Unit;

use App\Models\Turbine;
use App\Models\WindFarm;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class WindFarmTest extends TestCase
{
    use DatabaseTransactions;
    use WithFaker;

    // Test for retrieving all wind farms
    public function testGetAllWindFarms()
    {
        WindFarm::factory(3)->create();

        $response = $this->get('/api/farms');
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

    // Test for retrieving a specific wind farm
    public function testGetWindFarm()
    {
        $windFarm = WindFarm::factory()->create();

        $response = $this->get("/api/farms/$windFarm->id");
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'id',
            'name',
            'created_at',
            'updated_at',
        ]);
    }

    // Test for retrieving all turbines belonging to a wind farm
    public function testGetAllTurbinesForWindFarm()
    {
        $windFarm = WindFarm::factory()->create();
        Turbine::factory(5)->create(['wind_farm_id' => $windFarm->id]);

        $response = $this->get("/api/farms/$windFarm->id/turbines");
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

    // Test for retrieving a specific turbine belonging to a wind farm
    public function testGetTurbineForWindFarm()
    {
        $windFarm = WindFarm::factory()->create();
        $turbine = Turbine::factory()->create(['wind_farm_id' => $windFarm->id]);

        $response = $this->get("/api/farms/$windFarm->id/turbines/$turbine->id");
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
}
