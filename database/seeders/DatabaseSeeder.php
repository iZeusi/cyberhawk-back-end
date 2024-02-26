<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            WindFarmSeeder::class,
            TurbineSeeder::class,
            InspectionSeeder::class,
            GradeTypeSeeder::class,
            GradeSeeder::class,
            ComponentTypeSeeder::class,
            ComponentSeeder::class,
        ]);
    }
}
