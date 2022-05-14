<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bestellingen')->insert([
            'drank'=> 'Cola',
            'categorie'=> "Frisdrank",
            'besteld_door'=>"Erik"
        ]);

        DB::table('bestellingen')->insert([
            'drank'=> 'Grolsch',
            'categorie'=> "Bier",
            'besteld_door'=>"Koen"
        ]);
    }
}
