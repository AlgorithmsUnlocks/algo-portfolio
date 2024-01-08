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
        // \App\Models\User::factory(10)->create();
        $this->call(CreateContactSeeder::class);
        $this->call(CreateHeroPropertiesData::class);
        $this->call(CreateAboutsData::class);
        $this->call(CreateEducationSeeder::class);
        $this->call(CreateExperiencesSeeder::class);
        $this->call(CreateGlobalSeeder::class);
    }
}
