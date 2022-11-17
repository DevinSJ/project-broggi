<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerfilsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('perfils')->delete();
        
        \DB::table('perfils')->insert(array (
            0 => 
            array (
                'id' => 3,
                'nom' => 'Administrador Sistema',
            ),
            1 => 
            array (
                'id' => 1,
                'nom' => 'Operador 112',
            ),
            2 => 
            array (
                'id' => 2,
                'nom' => 'Supervisor 112',
            ),
        ));
        
        
    }
}