<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartesTrucadesHasAgenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cartes_trucades_has_agencies')->delete();
        
        \DB::table('cartes_trucades_has_agencies')->insert(array (
            0 => 
            array (
                'cartes_trucades_id' => 1,
                'agencies_id' => 3,
                'estats_agencies_id' => 1,
            ),
            1 => 
            array (
                'cartes_trucades_id' => 23,
                'agencies_id' => 265,
                'estats_agencies_id' => 1,
            ),
            2 => 
            array (
                'cartes_trucades_id' => 1,
                'agencies_id' => 1,
                'estats_agencies_id' => 2,
            ),
            3 => 
            array (
                'cartes_trucades_id' => 2,
                'agencies_id' => 2,
                'estats_agencies_id' => 3,
            ),
            4 => 
            array (
                'cartes_trucades_id' => 3,
                'agencies_id' => 3,
                'estats_agencies_id' => 3,
            ),
        ));
        
        
    }
}