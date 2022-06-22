<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pieter',
            'toegewezen' => 'Nee',
            'bril_id' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Henk',
            'toegewezen' => 'Nee',
            'bril_id' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Freek',
            'toegewezen' => 'Nee',
            'bril_id' => 0
        ]);
    //HIERONDER IS GEMAAKT DOOR VICTOR

        DB::table('users')->insert([
            'name' => 'Gerard',
            'toegewezen' => 'Ja',
            'bril_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Jason',
            'toegewezen' => 'Nee',
            'bril_id' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Mark',
            'toegewezen' => 'Ja',
            'bril_id' => 2
        ]);
    }
}
