<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuarisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usuaris')->delete();
        
        \DB::table('usuaris')->insert(array (
            0 => 
            array (
                'id' => 1,
                'usuari' => 'admin',
                'contrassenya' => '$2y$10$XqybLkAW617V1fbObTjL7OkfWJ7TxoRxjpaNl7cMpt2GtZxJXNEpC',
                'nom' => 'Admin',
                'cognoms' => 'admin',
                'perfils_id' => 3,
                'actiu' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'usuari' => 'operador',
                'contrassenya' => '$2y$10$hOG2qXJejNOTP6dlsBcT7ecBwXn1QjPkm1IcDjJl756Dvcrb8WyEW',
                'nom' => 'Operador',
                'cognoms' => 'operador',
                'perfils_id' => 1,
                'actiu' => 1,
            ),
        ));
        
        
    }
}