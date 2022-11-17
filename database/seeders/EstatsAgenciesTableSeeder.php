<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstatsAgenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estats_agencies')->delete();
        
        \DB::table('estats_agencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estat' => 'Contactat',
            ),
            1 => 
            array (
                'id' => 2,
                'estat' => 'En procés',
            ),
            2 => 
            array (
                'id' => 3,
                'estat' => 'Finalitzat',
            ),
        ));
        
        
    }
}