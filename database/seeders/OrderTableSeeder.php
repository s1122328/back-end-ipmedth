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
            'aantal' => 1,
            'user_id' => 1,
            'besteld_door' => 'Pieter',
            'status' => "Besteld",
            'prijs' => 2.70,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Grolsch',
            'categorie' => 'Bier',
            'aantal' => 1,
            'user_id' => 2,
            'besteld_door' => 'Henk',
            'status' => "Besteld",
            'prijs' => 3.50,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Cabernet Sauvignon',
            'categorie' => 'Wijn',
            'aantal' => 3,
            'user_id' => 3,
            'besteld_door' => 'Freek',
            'status' => "Besteld",
            'prijs' => 4.00,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Heineken',
            'categorie' => 'Bier',
            'aantal' => 1,
            'user_id' => 4,
            'besteld_door' => 'Gerard',
            'status' => "Besteld",
            'prijs' => 4.00,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Jupiler',
            'categorie' => 'Bier',
            'aantal' => 1,
            'user_id' => 1,
            'besteld_door' => 'Pieter',
            'status' => "Besteld",
            'prijs' => 4.00,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Bavaria',
            'categorie' => 'Bier',
            'aantal' => 1,
            'user_id' => 5,
            'besteld_door' => 'Jason',
            'status' => "Besteld",
            'prijs' => 3.50,
            
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Ijwit',
            'categorie' => 'Bier',
            'aantal' => 1,
            'user_id' => 6,
            'besteld_door' => 'Mark',
            'status' => "Besteld",
            'prijs' => 4.00,
        ]);
    }
}
