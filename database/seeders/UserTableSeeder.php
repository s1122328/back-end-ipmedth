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
            'toegewezen' => 'Nee'
        ]);

        DB::table('users')->insert([
            'name' => 'Henk',
            'toegewezen' => 'Nee'
        ]);

        DB::table('users')->insert([
            'name' => 'Freek',
            'toegewezen' => 'Nee'
        ]);

        DB::table('users')->insert([
            'name' => 'Gerard',
            'toegewezen' => 'Ja'
        ]);

        DB::table('users')->insert([
            'name' => 'Jason',
            'toegewezen' => 'Nee'
        ]);

        DB::table('users')->insert([
            'name' => 'Mark',
            'toegewezen' => 'Ja'
        ]);
    }
}
