<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComarquesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comarques')->delete();
        
        \DB::table('comarques')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Alt Camp',
                'provincies_id' => 4,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Alt Empordà',
                'provincies_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Alt Penedès',
                'provincies_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'Alt Urgell',
                'provincies_id' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'Alta Ribagorça',
                'provincies_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'Anoia',
                'provincies_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'nom' => 'Aran',
                'provincies_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'nom' => 'Bages',
                'provincies_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'nom' => 'Baix Camp',
                'provincies_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'nom' => 'Baix Ebre',
                'provincies_id' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'nom' => 'Baix Empordà',
                'provincies_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'nom' => 'Baix Llobregat',
                'provincies_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'nom' => 'Baix Penedès',
                'provincies_id' => 4,
            ),
            13 => 
            array (
                'id' => 14,
                'nom' => 'Barcelonès',
                'provincies_id' => 1,
            ),
            14 => 
            array (
                'id' => 16,
                'nom' => 'Berguedà',
                'provincies_id' => 1,
            ),
            15 => 
            array (
                'id' => 17,
                'nom' => 'Cerdanya',
                'provincies_id' => 2,
            ),
            16 => 
            array (
                'id' => 18,
                'nom' => 'Cerdanya',
                'provincies_id' => 3,
            ),
            17 => 
            array (
                'id' => 19,
                'nom' => 'Conca de Barberà',
                'provincies_id' => 4,
            ),
            18 => 
            array (
                'id' => 20,
                'nom' => 'Garraf',
                'provincies_id' => 1,
            ),
            19 => 
            array (
                'id' => 21,
                'nom' => 'Garrigues',
                'provincies_id' => 3,
            ),
            20 => 
            array (
                'id' => 22,
                'nom' => 'Garrotxa',
                'provincies_id' => 2,
            ),
            21 => 
            array (
                'id' => 23,
                'nom' => 'Gironès',
                'provincies_id' => 2,
            ),
            22 => 
            array (
                'id' => 24,
                'nom' => 'Maresme',
                'provincies_id' => 1,
            ),
            23 => 
            array (
                'id' => 25,
                'nom' => 'Moianès',
                'provincies_id' => 1,
            ),
            24 => 
            array (
                'id' => 26,
                'nom' => 'Montsià',
                'provincies_id' => 4,
            ),
            25 => 
            array (
                'id' => 27,
                'nom' => 'Noguera',
                'provincies_id' => 3,
            ),
            26 => 
            array (
                'id' => 28,
                'nom' => 'Osona',
                'provincies_id' => 1,
            ),
            27 => 
            array (
                'id' => 29,
                'nom' => 'Osona',
                'provincies_id' => 2,
            ),
            28 => 
            array (
                'id' => 30,
                'nom' => 'Pallars Jussà',
                'provincies_id' => 3,
            ),
            29 => 
            array (
                'id' => 31,
                'nom' => 'Pla de l\'Estany',
                'provincies_id' => 2,
            ),
            30 => 
            array (
                'id' => 32,
                'nom' => 'Pla d\'Urgell',
                'provincies_id' => 3,
            ),
            31 => 
            array (
                'id' => 33,
                'nom' => 'Priorat',
                'provincies_id' => 4,
            ),
            32 => 
            array (
                'id' => 34,
                'nom' => 'Ribera d\'Ebre',
                'provincies_id' => 4,
            ),
            33 => 
            array (
                'id' => 35,
                'nom' => 'Ripollès',
                'provincies_id' => 2,
            ),
            34 => 
            array (
                'id' => 36,
                'nom' => 'Segarra',
                'provincies_id' => 3,
            ),
            35 => 
            array (
                'id' => 37,
                'nom' => 'Segrià',
                'provincies_id' => 3,
            ),
            36 => 
            array (
                'id' => 38,
                'nom' => 'Selva',
                'provincies_id' => 2,
            ),
            37 => 
            array (
                'id' => 39,
                'nom' => 'Solsonès',
                'provincies_id' => 3,
            ),
            38 => 
            array (
                'id' => 40,
                'nom' => 'Tarragonès',
                'provincies_id' => 4,
            ),
            39 => 
            array (
                'id' => 41,
                'nom' => 'Terra Alta',
                'provincies_id' => 4,
            ),
            40 => 
            array (
                'id' => 42,
                'nom' => 'Urgell',
                'provincies_id' => 3,
            ),
            41 => 
            array (
                'id' => 43,
                'nom' => 'Vallès Occidental',
                'provincies_id' => 1,
            ),
            42 => 
            array (
                'id' => 44,
                'nom' => 'Vallès Oriental',
                'provincies_id' => 1,
            ),
            43 => 
            array (
                'id' => 45,
                'nom' => 'Pallars Sobirà',
                'provincies_id' => 3,
            ),
        ));
        
        
    }
}