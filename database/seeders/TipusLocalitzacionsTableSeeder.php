<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipusLocalitzacionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipus_localitzacions')->delete();
        
        \DB::table('tipus_localitzacions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipus' => 'Carrers',
            ),
            1 => 
            array (
                'id' => 4,
                'tipus' => 'Carretera',
            ),
            2 => 
            array (
                'id' => 3,
                'tipus' => 'Entitat Població',
            ),
            3 => 
            array (
                'id' => 2,
                'tipus' => 'Punt Singular',
            ),
        ));
        
        
    }
}