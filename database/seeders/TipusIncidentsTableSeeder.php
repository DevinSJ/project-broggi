<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipusIncidentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipus_incidents')->delete();
        
        \DB::table('tipus_incidents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcio' => 'ACCIDENT',
            ),
            1 => 
            array (
                'id' => 5,
                'descripcio' => 'ALTRES INCIDÈNCIES',
            ),
            2 => 
            array (
                'id' => 2,
                'descripcio' => 'ASSISTÈNCIA SANITÀRIA',
            ),
            3 => 
            array (
                'id' => 8,
                'descripcio' => 'CIVISME',
            ),
            4 => 
            array (
                'id' => 4,
            'descripcio' => 'FUITA (AIGUA, GAS, ALTRES)',
            ),
            5 => 
            array (
                'id' => 3,
                'descripcio' => 'INCENDI',
            ),
            6 => 
            array (
                'id' => 9,
                'descripcio' => 'MEDI AMBIENT',
            ),
            7 => 
            array (
                'id' => 10,
                'descripcio' => 'METEOROLOGIA',
            ),
            8 => 
            array (
                'id' => 6,
                'descripcio' => 'SEGURETAT',
            ),
            9 => 
            array (
                'id' => 7,
                'descripcio' => 'TRÀNSIT',
            ),
        ));
        
        
    }
}