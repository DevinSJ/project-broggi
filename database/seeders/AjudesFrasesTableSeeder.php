<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AjudesFrasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ajudes_frases')->delete();
        
        \DB::table('ajudes_frases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'es_lang' => '¿Cuál es tu emergencia?',
                'ca_lang' => 'Quina és la teva emergència?',
                'en_lang' => 'What’s your emergency?',
                'fr_lang' => 'Quelle est votre urgence?',
                'de_lang' => 'Was ist Ihr Notfall?',
            ),
            1 => 
            array (
                'id' => 2,
                'es_lang' => '¿Cuál es la dirección de emergencia?',
                'ca_lang' => 'Quina és l\'adreça d\'emergència?',
                'en_lang' => 'What’s the address of the emergency?',
                'fr_lang' => 'Quelle est l\'adresse de l\'urgence?',
                'de_lang' => 'Wie lautet die Notfalladresse?',
            ),
            2 => 
            array (
                'id' => 3,
                'es_lang' => '¿Qué emergencia estás reportando?',
                'ca_lang' => 'Quina emergència estàs informant?',
                'en_lang' => 'What emergency are you reporting?',
                'fr_lang' => 'Quelle urgence signalez-vous?',
                'de_lang' => 'Welchen Notfall melden Sie?',
            ),
            3 => 
            array (
                'id' => 4,
                'es_lang' => '¿En dónde estas exactamente?',
                'ca_lang' => 'On ets exactament?',
                'en_lang' => 'Where are you exactly?',
                'fr_lang' => 'Où es-tu exactement?',
                'de_lang' => 'Wo bist du genau?',
            ),
        ));
        
        
    }
}