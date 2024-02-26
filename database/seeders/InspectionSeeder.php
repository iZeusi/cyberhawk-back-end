<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Inspection;
use Illuminate\Database\Seeder;

class InspectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inspection::factory(50)->has(Grade::factory(5));
    }
}
