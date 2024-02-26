<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Component::factory(50)->has(Grade::factory(5));
    }
}
