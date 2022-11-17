<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DadesPersonalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dades_personals')->delete();
        
        \DB::table('dades_personals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'telefon' => '665836882',
                'adreca' => 'Urquinaona 10',
                'antecedents' => 'Test xiao',
            ),
            1 => 
            array (
                'id' => 2,
                'telefon' => '665762417',
                'adreca' => 'Urquinaona 10',
                'antecedents' => 'Test devin',
            ),
            2 => 
            array (
                'id' => 3,
                'telefon' => '666148666',
                'adreca' => 'Calle de Santiago',
                'antecedents' => 'Uruguasho ladrón de calzones',
            ),
        ));
        
        
    }
}