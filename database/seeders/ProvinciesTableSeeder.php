<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provincies')->delete();
        
        \DB::table('provincies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Barcelona',
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Girona',
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Lleida',
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'Tarragona',
            ),
        ));
        
        
    }
}