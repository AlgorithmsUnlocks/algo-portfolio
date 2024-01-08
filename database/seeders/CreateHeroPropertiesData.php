<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreateHeroPropertiesData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroproperties')->insert([
            [
                'keyLine' => 'Hello World',
                'title' => 'This is Hero Title',
                'short_title' => 'This is Hero Short Title',
                'img' =>'image.png',
            ],
            [
                'keyLine' => 'Hello World',
                'title' => 'This is Hero Title 2',
                'short_title' => 'This is Hero Short Title 2',
                'img' =>'image.png',
            ],
        ]);
    }
}
