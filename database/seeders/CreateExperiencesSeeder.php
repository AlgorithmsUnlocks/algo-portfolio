<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            [
                'duration' => '2 years',
                'title' => 'PHP Expert',
                'designation' => 'PHP Developers',
                'details' => 'Laravel Experts',
            ],
        ]);
    }
}
