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
            'user_id' => 1,
            'aantal' => 1,
            'status' => "Besteld",
            'prijs' => 2.70,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Grolsch',
            'categorie' => 'Bier',
            'user_id' => 2,
            'aantal' => 1,
            'status' => "Besteld",
            'prijs' => 3.50,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Cabernet Sauvignon',
            'categorie' => 'Wijn',
            'user_id' => 3,
            'aantal' => 3,
            'status' => "Besteld",
            'prijs' => 4.00,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Heineken',
            'categorie' => 'Bier',
            'user_id' => 4,
            'aantal' => 1,
            'status' => "Besteld",
            'prijs' => 4.00,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Jupiler',
            'categorie' => 'Bier',
            'user_id' => 1,
            'aantal' => 1,
            'status' => "Besteld",
            'prijs' => 4.00,

        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Bavaria',
            'categorie' => 'Bier',
            'user_id' => 5,
            'aantal' => 1,
            'status' => "Besteld",
            'prijs' => 3.50,
            
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Ijwit',
            'categorie' => 'Bier',
            'user_id' => 6,
            'aantal' => 1,
            'status' => "Besteld",
            'prijs' => 4.00,
        ]);
    }
}
