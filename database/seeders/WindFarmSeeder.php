<?php

namespace Database\Seeders;

use App\Models\Turbine;
use App\Models\WindFarm;
use Illuminate\Database\Seeder;

class WindFarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WindFarm::factory(50)->has(Turbine::factory(5));
    }
}
