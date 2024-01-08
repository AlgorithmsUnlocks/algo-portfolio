<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'fullName' => 'Hello World',
                'email' => 'hello@world.com',
                'phone' =>'0198828222',
                'message' => 'Hello World',
            ],
            [
                'fullName' => 'Algo Unlocks',
                'email' => 'algo@world.org',
                'phone' =>'0198828222',
                'message' => 'Algo World',
            ],
        ]);
    }
}
