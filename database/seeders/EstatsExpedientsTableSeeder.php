<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstatsExpedientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estats_expedients')->delete();
        
        \DB::table('estats_expedients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estat' => 'En procés',
            ),
            1 => 
            array (
                'id' => 2,
                'estat' => 'Sol·licitat',
            ),
            2 => 
            array (
                'id' => 3,
                'estat' => 'Acceptat',
            ),
            3 => 
            array (
                'id' => 4,
                'estat' => 'Tancat',
            ),
            4 => 
            array (
                'id' => 5,
                'estat' => 'Immobilitzat',
            ),
        ));
        
        
    }
}