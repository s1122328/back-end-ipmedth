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
            'drank' => 'Cola',
            'categorie' => 'Frisdrank',
            'besteld_door' => 'Pieter',
            'aantal' => 1,
            'status' => "Besteld",
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Grolsch',
            'categorie' => 'Bier',
            'besteld_door' => 'Henk',
            'aantal' => 1,
            'status' => "Besteld",
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Cabernet Sauvignon',
            'categorie' => 'Wijn',
            'besteld_door' => 'Mark',
            'aantal' => 3,
            'status' => "Besteld",
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Heineken',
            'categorie' => 'Bier',
            'besteld_door' => 'Freek',
            'aantal' => 1,
            'status' => "Besteld",
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Jupiler',
            'categorie' => 'Bier',
            'besteld_door' => 'Pieter',
            'aantal' => 1,
            'status' => "Besteld",
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Bavaria',
            'categorie' => 'Bier',
            'besteld_door' => 'Gerard',
            'aantal' => 1,
            'status' => "Besteld",
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Ijwit',
            'categorie' => 'Bier',
            'besteld_door' => 'Jason',
            'aantal' => 1,
            'status' => "Besteld",
        ]);
    }
}
