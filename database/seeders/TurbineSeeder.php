<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\Inspection;
use App\Models\Turbine;
use Illuminate\Database\Seeder;

class TurbineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Turbine::factory(50)->has(Component::factory(5))->has(Inspection::factory(5));
    }
}
