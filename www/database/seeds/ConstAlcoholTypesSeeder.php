<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConstAlcoholTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alcoholTypes = [
            "Wina owocowe",
            "Likiery",
            "Rum",
            "Grappa",
            "Raki",
            "Tequila",
            "Sake",
            "Armaniak",
            "Absynt",
            "Rodzaje wódek",
            "Grog",
            "Rakija",
            "Sherry",
            "Jabłecznik",
            "Malibu",
            "Miód pitny",
            "Burbon",
            "Poncz",
            "Gin"
        ];

        foreach($alcoholTypes as $alcoholType) {
            DB::table('const_alcohol_types')->insert([
               'value' => $alcoholType
            ]);
        }
    }
}
