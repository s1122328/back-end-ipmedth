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
    //HIERONDER IS GEMAAKT DOOR VICTOR

    public function run()
    {
        DB::table('bestellingen')->insert([
            'drank' => 'Cola',
            'categorie' => 'Frisdrank',
            'aantal' => 1,

            'bestelling' => '1 Cola',
            'besteld_door' => 1,
            'status' => "Besteld",
            'prijs' => 2.70,
            'totaal_prijs' => 2.70,
            'created_at' => '2022-06-20 21:07:00'
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Grolsch',
            'categorie' => 'Bier',
            'aantal' => 1,

            'bestelling' => '1 Grolsch',
            'besteld_door' => 1,
            'status' => "Besteld",
            'prijs' => 3.50,
            'totaal_prijs' => 3.50,
            'created_at' => '2022-06-20 21:07:00'
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Cabernet Sauvignon',
            'categorie' => 'Wijn',
            'aantal' => 3,

            'bestelling' => '3 Cabernet Sauvignon',
            'besteld_door' => 1,
            'status' => "Besteld",
            'prijs' => 4.00,
            'totaal_prijs' => 4.00,
            'created_at' => '2022-06-20 21:07:00'
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Heineken',
            'categorie' => 'Bier',
            'aantal' => 1,
            'bestelling' => '1 Heineken',
            'besteld_door' => 1,
            'status' => "Besteld",
            'prijs' => 4.00,
            'totaal_prijs' => 4.00,
            'created_at' => '2022-06-21 17:27:24'
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Jupiler',
            'categorie' => 'Bier',
            'aantal' => 1,
            'bestelling' => '1 Jupiler',
            'besteld_door' => 1,
            'status' => "Besteld",
            'prijs' => 4.00,
            'totaal_prijs' => 6.70,
            'created_at' => '2022-06-21 18:26:30'
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Bavaria',
            'categorie' => 'Bier',
            'aantal' => 1,
            'bestelling' => '1 Bavaria',
            'besteld_door' => 1,
            'status' => "Onderweg",
            'prijs' => 3.50,
            'totaal_prijs' => 3.50,
            'created_at' => '2022-06-21 22:30:45'
        ]);

        DB::table('bestellingen')->insert([
            'drank' => 'Heineken',
            'categorie' => 'Bier',
            'aantal' => 1,
            'bestelling' => '1 Heineken',
            'besteld_door' => 1,
            'status' => "Besteld",
            'prijs' => 3.20,
            'totaal_prijs' => 3.20,
            'created_at' => '2022-06-22 22:46:18'
        ]);
    }
}
