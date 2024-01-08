<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateGlobalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            [
                'twitterLink' => 'https://twitter.com',
                'githubLink' => 'https://twitter.com',
                'linkedinLink' => 'https://twitter.com',
            ],
        ]);
    }
}
