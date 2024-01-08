<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('educations')->insert([
        [
            'duration' => '2018-2021',
            'institutionName' => 'Leading University',
            'field' => 'CSE',
            'details' => 'Computer Science & Engineering'
        ],
      ]);
    }
}
