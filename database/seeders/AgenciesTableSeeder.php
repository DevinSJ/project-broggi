<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agencies')->delete();
        
        \DB::table('agencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Àrea Regional de Trànsit (Regió Policial Camp',
                    'carrer' => 'Plaça dels Mossos d\'Esquadra, 1 (c. del Riu B',
                        'codi_postal' => '43006',
                        'correu' => NULL,
                        'municipis_id' => 807,
                    ),
                    1 => 
                    array (
                        'id' => 2,
                        'nom' => 'Àrea Regional de Trànsit (Regió Policial Cent',
                            'carrer' => 'Avinguda dels Països Catalans, 169-171 (Secto',
                                'codi_postal' => '8243',
                                'correu' => NULL,
                                'municipis_id' => 410,
                            ),
                            2 => 
                            array (
                                'id' => 3,
                                'nom' => 'Àrea Regional de Trànsit (Regió Policial Giro',
                                    'carrer' => 'Carretera de Santa Coloma de Farners, 72-76 (',
                                        'codi_postal' => '17005',
                                        'correu' => NULL,
                                        'municipis_id' => 330,
                                    ),
                                    3 => 
                                    array (
                                        'id' => 4,
                                        'nom' => 'Àrea Regional de Trànsit (Regió Policial Metr',
                                            'carrer' => 'Carretera de Sànson, 66',
                                            'codi_postal' => '8980',
                                            'correu' => NULL,
                                            'municipis_id' => 676,
                                        ),
                                        4 => 
                                        array (
                                            'id' => 5,
                                            'nom' => 'Àrea Regional de Trànsit (Regió Policial Metr',
                                                'carrer' => 'Carrer de l\'Olivar, 6',
                                                'codi_postal' => '8402',
                                                'correu' => NULL,
                                                'municipis_id' => 341,
                                            ),
                                            5 => 
                                            array (
                                                'id' => 6,
                                                'nom' => 'Àrea Regional de Trànsit (Regió Policial Piri',
                                                    'carrer' => 'Avinguda de Guillem Graell, s/n',
                                                    'codi_postal' => '25700',
                                                    'correu' => NULL,
                                                    'municipis_id' => 782,
                                                ),
                                                6 => 
                                                array (
                                                    'id' => 7,
                                                    'nom' => 'Àrea Regional de Trànsit (Regió Policial Pone',
                                                        'carrer' => 'Carrer de Sant Hilari, 38',
                                                        'codi_postal' => '25008',
                                                        'correu' => NULL,
                                                        'municipis_id' => 386,
                                                    ),
                                                    7 => 
                                                    array (
                                                        'id' => 8,
                                                        'nom' => 'Àrea Regional de Trànsit (Regió Policial Terr',
                                                            'carrer' => 'Carrer de Ferran Arasa, 5-7',
                                                            'codi_postal' => '43500',
                                                            'correu' => NULL,
                                                            'municipis_id' => 848,
                                                        ),
                                                        8 => 
                                                        array (
                                                            'id' => 9,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Carrer de les Joies, 32',
                                                            'codi_postal' => '8180',
                                                            'correu' => NULL,
                                                            'municipis_id' => 439,
                                                        ),
                                                        9 => 
                                                        array (
                                                            'id' => 10,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Avinguda de Francesc Macià, s/n',
                                                            'codi_postal' => '25400',
                                                            'correu' => NULL,
                                                            'municipis_id' => 131,
                                                        ),
                                                        10 => 
                                                        array (
                                                            'id' => 11,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Avinguda de Josep Tarradellas, 1',
                                                            'codi_postal' => '25300',
                                                            'correu' => NULL,
                                                            'municipis_id' => 808,
                                                        ),
                                                        11 => 
                                                        array (
                                                            'id' => 12,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Carretera de Calaf, C-1412, km. 1,5',
                                                            'codi_postal' => '25740',
                                                            'correu' => NULL,
                                                            'municipis_id' => 572,
                                                        ),
                                                        12 => 
                                                        array (
                                                            'id' => 13,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Carrer de Belianes, s/n',
                                                            'codi_postal' => '25230',
                                                            'correu' => NULL,
                                                            'municipis_id' => 442,
                                                        ),
                                                        13 => 
                                                        array (
                                                            'id' => 14,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Avinguda de Victoriano Muñoz, s/n',
                                                            'codi_postal' => '25520',
                                                            'correu' => NULL,
                                                            'municipis_id' => 567,
                                                        ),
                                                        14 => 
                                                        array (
                                                            'id' => 15,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Carrer de Bosch de la Trinxeria, 1',
                                                            'codi_postal' => '17700',
                                                            'correu' => NULL,
                                                            'municipis_id' => 367,
                                                        ),
                                                        15 => 
                                                        array (
                                                            'id' => 16,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Carretera TV-3025, km 0,500',
                                                            'codi_postal' => '43860',
                                                            'correu' => NULL,
                                                            'municipis_id' => 49,
                                                        ),
                                                        16 => 
                                                        array (
                                                            'id' => 17,
                                                            'nom' => 'Comissaria de Districte de la Policia de la G',
                                                            'carrer' => 'Avinguda del Mil·lenari, 5 E (anteriorment Av',
                                                                'codi_postal' => '8840',
                                                                'correu' => NULL,
                                                                'municipis_id' => 898,
                                                            ),
                                                            17 => 
                                                            array (
                                                                'id' => 18,
                                                                'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                'carrer' => 'Camí de la Cabanera, 1',
                                                                'codi_postal' => '25560',
                                                                'correu' => NULL,
                                                                'municipis_id' => 794,
                                                            ),
                                                            18 => 
                                                            array (
                                                                'id' => 19,
                                                                'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                'carrer' => 'Carrer de la Devesa, s/n',
                                                                'codi_postal' => '8870',
                                                                'correu' => NULL,
                                                                'municipis_id' => 786,
                                                            ),
                                                            19 => 
                                                            array (
                                                                'id' => 20,
                                                                'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                'carrer' => 'Avinguda de Mossèn Jacint Verdaguer, 29',
                                                                'codi_postal' => '8130',
                                                                'correu' => NULL,
                                                                'municipis_id' => 761,
                                                            ),
                                                            20 => 
                                                            array (
                                                                'id' => 21,
                                                                'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                'carrer' => 'Carrer E cantonada B - Polígon industrial Mol',
                                                                'codi_postal' => '8620',
                                                                'correu' => NULL,
                                                                'municipis_id' => 738,
                                                            ),
                                                            21 => 
                                                            array (
                                                                'id' => 22,
                                                                'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                'carrer' => 'Carrer de Maria Montserrat, 2 - cantonada amb',
                                                                'codi_postal' => '8770',
                                                                'correu' => NULL,
                                                                'municipis_id' => 732,
                                                            ),
                                                            22 => 
                                                            array (
                                                                'id' => 23,
                                                                'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                'carrer' => 'Carrer d\'Alfons d\'Aragó, 3',
                                                                'codi_postal' => '8174',
                                                                'correu' => NULL,
                                                                'municipis_id' => 668,
                                                            ),
                                                            23 => 
                                                            array (
                                                                'id' => 24,
                                                                'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                'carrer' => 'Carrer de Joan Minuart, s/n (Urbanització Les',
                                                                    'codi_postal' => '8470',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 665,
                                                                ),
                                                                24 => 
                                                                array (
                                                                    'id' => 25,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer de Cristóbal de Moura, 41',
                                                                    'codi_postal' => '8930',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 653,
                                                                ),
                                                                25 => 
                                                                array (
                                                                    'id' => 26,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer Pla de Salt, 2',
                                                                    'codi_postal' => '17190',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 651,
                                                                ),
                                                                26 => 
                                                                array (
                                                                    'id' => 27,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer de Salvador Espriu, 5',
                                                                    'codi_postal' => '43840',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 650,
                                                                ),
                                                                27 => 
                                                                array (
                                                                    'id' => 28,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer de Sant Jaume, 82',
                                                                    'codi_postal' => '8291',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 621,
                                                                ),
                                                                28 => 
                                                                array (
                                                                    'id' => 29,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer de Gregal, 4',
                                                                    'codi_postal' => '8397',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 544,
                                                                ),
                                                                29 => 
                                                                array (
                                                                    'id' => 30,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer de Francesc Garcia Grau, 5',
                                                                    'codi_postal' => '43740',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 472,
                                                                ),
                                                                30 => 
                                                                array (
                                                                    'id' => 31,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer del Pla de Matabous, 2',
                                                                    'codi_postal' => '8110',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 452,
                                                                ),
                                                                31 => 
                                                                array (
                                                                    'id' => 32,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer del Regne de Nàpols, 2',
                                                                    'codi_postal' => '43400',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 450,
                                                                ),
                                                                32 => 
                                                                array (
                                                                    'id' => 33,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer de Jaume Ciurana i Galceran, s/n',
                                                                    'codi_postal' => '43730',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 281,
                                                                ),
                                                                33 => 
                                                                array (
                                                                    'id' => 34,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer del Molinot, 1',
                                                                    'codi_postal' => '8860',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 204,
                                                                ),
                                                                34 => 
                                                                array (
                                                                    'id' => 35,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Avinguda d\'Adelaida, 46',
                                                                    'codi_postal' => '43850',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 168,
                                                                ),
                                                                35 => 
                                                                array (
                                                                    'id' => 36,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer de Montserrat Roig, 3',
                                                                    'codi_postal' => '8140',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 159,
                                                                ),
                                                                36 => 
                                                                array (
                                                                    'id' => 37,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Carrer d\'Estoril, 2',
                                                                    'codi_postal' => '8210',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 90,
                                                                ),
                                                                37 => 
                                                                array (
                                                                    'id' => 38,
                                                                    'nom' => 'Comissaria de Districte de la Policia de la G',
                                                                    'carrer' => 'Avinguda de la Farga, s/n',
                                                                    'codi_postal' => '17820',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 87,
                                                                ),
                                                                38 => 
                                                                array (
                                                                    'id' => 39,
                                                                    'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                    'carrer' => 'Carrer de l\'Era d\'en Sellés, 5',
                                                                    'codi_postal' => '8500',
                                                                    'correu' => NULL,
                                                                    'municipis_id' => 888,
                                                                ),
                                                                39 => 
                                                                array (
                                                                    'id' => 40,
                                                                    'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                    'carrer' => 'Carrer del Programari Lliure, 7 (Seu: comissa',
                                                                        'codi_postal' => '8600',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 114,
                                                                    ),
                                                                    40 => 
                                                                    array (
                                                                        'id' => 41,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Carrer de Cèsar Martinell i Bruner, 20-24',
                                                                        'codi_postal' => '43700',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 883,
                                                                    ),
                                                                    41 => 
                                                                    array (
                                                                        'id' => 42,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Avinguda de l\'Onze Setembre, 26-28',
                                                                        'codi_postal' => '8820',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 581,
                                                                    ),
                                                                    42 => 
                                                                    array (
                                                                        'id' => 43,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Avinguda de Guillem Graell, s/n',
                                                                        'codi_postal' => '25700',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 782,
                                                                    ),
                                                                    43 => 
                                                                    array (
                                                                        'id' => 44,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                    'carrer' => 'Carrer del Teide, 99-100 (barri Les Planes)',
                                                                        'codi_postal' => '8905',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 357,
                                                                    ),
                                                                    44 => 
                                                                    array (
                                                                        'id' => 45,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Plaça d\'Espanya, 1',
                                                                        'codi_postal' => '8015',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 91,
                                                                    ),
                                                                    45 => 
                                                                    array (
                                                                        'id' => 46,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Ronda Ibérica, 68',
                                                                        'codi_postal' => '8800',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 926,
                                                                    ),
                                                                    46 => 
                                                                    array (
                                                                        'id' => 47,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Carrer de Subirats, 5',
                                                                        'codi_postal' => '8720',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 903,
                                                                    ),
                                                                    47 => 
                                                                    array (
                                                                        'id' => 48,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Carretera de França, N-230, pk.164,5',
                                                                        'codi_postal' => '25530',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 891,
                                                                    ),
                                                                    48 => 
                                                                    array (
                                                                        'id' => 49,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Passeig del President Tarradellas, 12',
                                                                        'codi_postal' => '43800',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 877,
                                                                    ),
                                                                    49 => 
                                                                    array (
                                                                        'id' => 50,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Passeig de Pompeu Fabra, 20',
                                                                        'codi_postal' => '25620',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 851,
                                                                    ),
                                                                    50 => 
                                                                    array (
                                                                        'id' => 51,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Carrer de Ferran Arasa, 5-7',
                                                                        'codi_postal' => '43500',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 848,
                                                                    ),
                                                                    51 => 
                                                                    array (
                                                                        'id' => 52,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Carretera de Matadepera, 272',
                                                                        'codi_postal' => '8226',
                                                                        'correu' => NULL,
                                                                        'municipis_id' => 816,
                                                                    ),
                                                                    52 => 
                                                                    array (
                                                                        'id' => 53,
                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                        'carrer' => 'Plaça dels Mossos d\'Esquadra, 1 (c. del Riu B',
                                                                            'codi_postal' => '43006',
                                                                            'correu' => NULL,
                                                                            'municipis_id' => 807,
                                                                        ),
                                                                        53 => 
                                                                        array (
                                                                            'id' => 54,
                                                                            'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                            'carrer' => 'Carrer de Mossèn Jacint Verdaguer, 19',
                                                                            'codi_postal' => '25280',
                                                                            'correu' => NULL,
                                                                            'municipis_id' => 791,
                                                                        ),
                                                                        54 => 
                                                                        array (
                                                                            'id' => 55,
                                                                            'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                            'carrer' => 'Carrer dels Quatre Camins, 16',
                                                                            'codi_postal' => '8022',
                                                                            'correu' => NULL,
                                                                            'municipis_id' => 91,
                                                                        ),
                                                                        55 => 
                                                                        array (
                                                                            'id' => 56,
                                                                            'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                            'carrer' => 'Carrer d\'Ulldecona, 35',
                                                                            'codi_postal' => '8038',
                                                                            'correu' => NULL,
                                                                            'municipis_id' => 91,
                                                                        ),
                                                                        56 => 
                                                                        array (
                                                                            'id' => 57,
                                                                            'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                            'carrer' => 'Carrer del Romaní, 7 (cantonada c. de Cervant',
                                                                                'codi_postal' => '8924',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 743,
                                                                            ),
                                                                            57 => 
                                                                            array (
                                                                                'id' => 58,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carrer de Francesc Moragas, 65-67',
                                                                                'codi_postal' => '17430',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 742,
                                                                            ),
                                                                            58 => 
                                                                            array (
                                                                                'id' => 59,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carrer de Bolívia, 30-32',
                                                                                'codi_postal' => '8018',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 91,
                                                                            ),
                                                                            59 => 
                                                                            array (
                                                                                'id' => 60,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carretera de Sànson, 66',
                                                                                'codi_postal' => '8980',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 676,
                                                                            ),
                                                                            60 => 
                                                                            array (
                                                                                'id' => 61,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carrer del Canigó, s/n',
                                                                                'codi_postal' => '17220',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 675,
                                                                            ),
                                                                            61 => 
                                                                            array (
                                                                                'id' => 62,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carrer de Joan Batista Milà i Rebull, 2',
                                                                                'codi_postal' => '8830',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 661,
                                                                            ),
                                                                            62 => 
                                                                            array (
                                                                                'id' => 63,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Passeig de Torras i Bages, 145',
                                                                                'codi_postal' => '8030',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 91,
                                                                            ),
                                                                            63 => 
                                                                            array (
                                                                                'id' => 64,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carretera de Prats de Lluçanès, 401',
                                                                                'codi_postal' => '8207',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 643,
                                                                            ),
                                                                            64 => 
                                                                            array (
                                                                                'id' => 65,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carrer de Maria Aurèlia Capmany, 27-33',
                                                                                'codi_postal' => '8191',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 639,
                                                                            ),
                                                                            65 => 
                                                                            array (
                                                                                'id' => 66,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carretera de les Arenes, s/n',
                                                                                'codi_postal' => '17480',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 636,
                                                                            ),
                                                                            66 => 
                                                                            array (
                                                                                'id' => 67,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carrer del Pla d\'Ordina, s/n',
                                                                                'codi_postal' => '17500',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 620,
                                                                            ),
                                                                            67 => 
                                                                            array (
                                                                                'id' => 68,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Carrer de l\'Alfàbrega, 4',
                                                                                'codi_postal' => '43206',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 610,
                                                                            ),
                                                                            68 => 
                                                                            array (
                                                                                'id' => 69,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Ronda de Joan Maragall, 63',
                                                                                'codi_postal' => '17520',
                                                                                'correu' => NULL,
                                                                                'municipis_id' => 592,
                                                                            ),
                                                                            69 => 
                                                                            array (
                                                                                'id' => 70,
                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                'carrer' => 'Torrent d\'en Malet, s/n (cantonada Enric Borr',
                                                                                    'codi_postal' => '8330',
                                                                                    'correu' => NULL,
                                                                                    'municipis_id' => 589,
                                                                                ),
                                                                                70 => 
                                                                                array (
                                                                                    'id' => 71,
                                                                                    'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                    'carrer' => 'Carrer de França, s/n (Seu: comissaria d\'Olot',
                                                                                        'codi_postal' => '17800',
                                                                                        'correu' => NULL,
                                                                                        'municipis_id' => 498,
                                                                                    ),
                                                                                    71 => 
                                                                                    array (
                                                                                        'id' => 72,
                                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                        'carrer' => 'Carrer d\'Aiguablava, 55',
                                                                                        'codi_postal' => '8042',
                                                                                        'correu' => NULL,
                                                                                        'municipis_id' => 91,
                                                                                    ),
                                                                                    72 => 
                                                                                    array (
                                                                                        'id' => 73,
                                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                        'carrer' => 'Rambla de Pompeu Fabra, 60-62',
                                                                                        'codi_postal' => '8100',
                                                                                        'correu' => NULL,
                                                                                        'municipis_id' => 444,
                                                                                    ),
                                                                                    73 => 
                                                                                    array (
                                                                                        'id' => 74,
                                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                        'carrer' => 'Avinguda de Lluís Companys, 87',
                                                                                        'codi_postal' => '8302',
                                                                                        'correu' => NULL,
                                                                                        'municipis_id' => 431,
                                                                                    ),
                                                                                    74 => 
                                                                                    array (
                                                                                        'id' => 75,
                                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                        'carrer' => 'Avinguda de les Mancomunitats Comarcals, 11',
                                                                                        'codi_postal' => '8760',
                                                                                        'correu' => NULL,
                                                                                        'municipis_id' => 414,
                                                                                    ),
                                                                                    75 => 
                                                                                    array (
                                                                                        'id' => 76,
                                                                                        'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                        'carrer' => 'Avinguda dels Països Catalans, 169-171 (Secto',
                                                                                            'codi_postal' => '8243',
                                                                                            'correu' => NULL,
                                                                                            'municipis_id' => 410,
                                                                                        ),
                                                                                        76 => 
                                                                                        array (
                                                                                            'id' => 77,
                                                                                            'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                            'carrer' => 'Carrer de Sant Hilari, 38',
                                                                                            'codi_postal' => '25008',
                                                                                            'correu' => NULL,
                                                                                            'municipis_id' => 386,
                                                                                        ),
                                                                                        77 => 
                                                                                        array (
                                                                                            'id' => 78,
                                                                                            'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                            'carrer' => 'Travessera de les Corts, 319-321',
                                                                                            'codi_postal' => '8029',
                                                                                            'correu' => NULL,
                                                                                            'municipis_id' => 91,
                                                                                        ),
                                                                                        78 => 
                                                                                        array (
                                                                                            'id' => 79,
                                                                                            'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                            'carrer' => 'Avinguda de Josep Irla, 43 (Seu: comissaria d',
                                                                                                'codi_postal' => '17100',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 122,
                                                                                            ),
                                                                                            79 => 
                                                                                            array (
                                                                                                'id' => 80,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Avinguda dels Països Catalans, 20-22',
                                                                                                'codi_postal' => '8700',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 360,
                                                                                            ),
                                                                                            80 => 
                                                                                            array (
                                                                                                'id' => 81,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer de la Marina, 347-349',
                                                                                                'codi_postal' => '8025',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 91,
                                                                                            ),
                                                                                            81 => 
                                                                                            array (
                                                                                                'id' => 82,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Avinguda de Vallcarca, 169-203',
                                                                                                'codi_postal' => '8023',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 91,
                                                                                            ),
                                                                                            82 => 
                                                                                            array (
                                                                                                'id' => 83,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - Mossos d\'Esquadra a Granollers',
                                                                                                'carrer' => 'Carrer de l\'Olivar, 6',
                                                                                                'codi_postal' => '8402',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 341,
                                                                                            ),
                                                                                            83 => 
                                                                                            array (
                                                                                                'id' => 84,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer de Vista Alegre, 5',
                                                                                                'codi_postal' => '17004',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 330,
                                                                                            ),
                                                                                            84 => 
                                                                                            array (
                                                                                                'id' => 85,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Avinguda d\'Eramprunyà, 48-50',
                                                                                                'codi_postal' => '8850',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 324,
                                                                                            ),
                                                                                            85 => 
                                                                                            array (
                                                                                                'id' => 86,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer de Miquel Ferrer Boira, 13',
                                                                                                'codi_postal' => '43780',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 317,
                                                                                            ),
                                                                                            86 => 
                                                                                            array (
                                                                                                'id' => 87,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer del Ter, s/n',
                                                                                                'codi_postal' => '17600',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 290,
                                                                                            ),
                                                                                            87 => 
                                                                                            array (
                                                                                                'id' => 88,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer de Laureà Miró, 80-88',
                                                                                                'codi_postal' => '8950',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 270,
                                                                                            ),
                                                                                            88 => 
                                                                                            array (
                                                                                                'id' => 89,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer de la Travessera, 11',
                                                                                                'codi_postal' => '8940',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 251,
                                                                                            ),
                                                                                            89 => 
                                                                                            array (
                                                                                                'id' => 90,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer Nou de la Rambla, 76-78',
                                                                                                'codi_postal' => '8001',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 91,
                                                                                            ),
                                                                                            90 => 
                                                                                            array (
                                                                                                'id' => 91,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Avinguda de Francesc Macià, 49',
                                                                                                'codi_postal' => '25200',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 229,
                                                                                            ),
                                                                                            91 => 
                                                                                            array (
                                                                                                'id' => 92,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Avinguda del Parc Tecnològic, 12',
                                                                                                'codi_postal' => '8290',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 227,
                                                                                            ),
                                                                                            92 => 
                                                                                            array (
                                                                                                'id' => 93,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                            'carrer' => 'Carrer del Ter, 49 (Urbanització Els Pavos) (',
                                                                                                'codi_postal' => '17300',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 125,
                                                                                            ),
                                                                                            93 => 
                                                                                            array (
                                                                                                'id' => 94,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer d\'Àngel Guimerà, 60',
                                                                                                'codi_postal' => '25600',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 83,
                                                                                            ),
                                                                                            94 => 
                                                                                            array (
                                                                                                'id' => 95,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Avinguda de Pomar, 3-5',
                                                                                                'codi_postal' => '8915',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 79,
                                                                                            ),
                                                                                            95 => 
                                                                                            array (
                                                                                                'id' => 96,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Carrer de Jaume Partagàs Rabell, 3',
                                                                                                'codi_postal' => '8350',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 59,
                                                                                            ),
                                                                                            96 => 
                                                                                            array (
                                                                                                'id' => 97,
                                                                                                'nom' => 'Comissaria de la Policia de la Generalitat - ',
                                                                                                'carrer' => 'Passeig de la Generalitat, 82-104',
                                                                                                'codi_postal' => '43870',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 52,
                                                                                            ),
                                                                                            97 => 
                                                                                            array (
                                                                                                'id' => 98,
                                                                                                'nom' => 'Guàrdia Urbana de Barcelona',
                                                                                                'carrer' => 'Carrer de la Guàrdia Urbana, 3',
                                                                                                'codi_postal' => '8004',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 91,
                                                                                            ),
                                                                                            98 => 
                                                                                            array (
                                                                                                'id' => 99,
                                                                                                'nom' => 'Guàrdia Urbana de l\'Hospitalet de Llobregat',
                                                                                                'carrer' => 'Carrer del Migdia, 5-7',
                                                                                                'codi_postal' => '8901',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 357,
                                                                                            ),
                                                                                            99 => 
                                                                                            array (
                                                                                                'id' => 100,
                                                                                                'nom' => 'Guàrdia Urbana de Lleida',
                                                                                                'carrer' => 'Carrer de Salmerón, 1',
                                                                                                'codi_postal' => '25004',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 386,
                                                                                            ),
                                                                                            100 => 
                                                                                            array (
                                                                                                'id' => 101,
                                                                                                'nom' => 'Guàrdia Urbana de Molins de Rei',
                                                                                                'carrer' => 'Carrer de Rubió i Ors, 8',
                                                                                                'codi_postal' => '8750',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 441,
                                                                                            ),
                                                                                            101 => 
                                                                                            array (
                                                                                                'id' => 102,
                                                                                                'nom' => 'Guàrdia Urbana de Reus',
                                                                                                'carrer' => 'Avinguda de Marià Fortuny, 27',
                                                                                                'codi_postal' => '43204',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 610,
                                                                                            ),
                                                                                            102 => 
                                                                                            array (
                                                                                                'id' => 103,
                                                                                                'nom' => 'Guàrdia Urbana de Tarragona',
                                                                                                'carrer' => 'Carrer de l\'Arquebisbe Pont i Gol, 8',
                                                                                                'codi_postal' => '43005',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 807,
                                                                                            ),
                                                                                            103 => 
                                                                                            array (
                                                                                                'id' => 104,
                                                                                                'nom' => 'Guàrdia Urbana de Vic',
                                                                                                'carrer' => 'Carrer de l\'Era d\'en Sellés, 10',
                                                                                                'codi_postal' => '8500',
                                                                                                'correu' => NULL,
                                                                                                'municipis_id' => 888,
                                                                                            ),
                                                                                            104 => 
                                                                                            array (
                                                                                                'id' => 105,
                                                                                                'nom' => 'Oficina d\'Atenció Ciutadana (Comissaria Mòbil',
                                                                                                    'carrer' => 'Plaça de la Vila, 1',
                                                                                                    'codi_postal' => '8921',
                                                                                                    'correu' => NULL,
                                                                                                    'municipis_id' => 743,
                                                                                                ),
                                                                                                105 => 
                                                                                                array (
                                                                                                    'id' => 106,
                                                                                                    'nom' => 'Oficina d\'Atenció Ciutadana a Sants (Àrea Bàs',
                                                                                                        'carrer' => 'Plaça dels Països Catalans, s/n (Estació de S',
                                                                                                            'codi_postal' => '8014',
                                                                                                            'correu' => NULL,
                                                                                                            'municipis_id' => 91,
                                                                                                        ),
                                                                                                        106 => 
                                                                                                        array (
                                                                                                            'id' => 107,
                                                                                                            'nom' => 'Oficina d\'Atenció Ciutadana a Tarragona (Àrea',
                                                                                                                'carrer' => 'Carrer del Doctor Mallafré Guasch, 7',
                                                                                                                'codi_postal' => '43007',
                                                                                                                'correu' => NULL,
                                                                                                                'municipis_id' => 807,
                                                                                                            ),
                                                                                                            107 => 
                                                                                                            array (
                                                                                                                'id' => 108,
                                                                                                                'nom' => 'Oficina d\'Atenció Ciutadana Complex Santa Cat',
                                                                                                                'carrer' => 'Gran Via de Jaume I, 57 (Complex Santa Cateri',
                                                                                                                    'codi_postal' => '17001',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 330,
                                                                                                                ),
                                                                                                                108 => 
                                                                                                                array (
                                                                                                                    'id' => 109,
                                                                                                                    'nom' => 'Oficina d\'Atenció Ciutadana dels Mossos d\'Esq',
                                                                                                                    'carrer' => 'Carrer d\'Aragó, 332',
                                                                                                                    'codi_postal' => '8009',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 91,
                                                                                                                ),
                                                                                                                109 => 
                                                                                                                array (
                                                                                                                    'id' => 110,
                                                                                                                    'nom' => 'Oficina Policial de la Generalitat - Mossos d',
                                                                                                                    'carrer' => 'Aeroport de Barcelona',
                                                                                                                    'codi_postal' => '8820',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 581,
                                                                                                                ),
                                                                                                                110 => 
                                                                                                                array (
                                                                                                                    'id' => 111,
                                                                                                                    'nom' => 'Oficina Policial de la Generalitat - Mossos d',
                                                                                                                    'carrer' => 'Avinguda de García Lorca, 1',
                                                                                                                    'codi_postal' => '17200',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 514,
                                                                                                                ),
                                                                                                                111 => 
                                                                                                                array (
                                                                                                                    'id' => 112,
                                                                                                                    'nom' => 'Oficina Policial de la Generalitat - Mossos d',
                                                                                                                    'carrer' => 'Carrer de Francesc Cambó, 43',
                                                                                                                    'codi_postal' => '17310',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 398,
                                                                                                                ),
                                                                                                                112 => 
                                                                                                                array (
                                                                                                                    'id' => 113,
                                                                                                                    'nom' => 'Oficina Policial de la Generalitat - Mossos d',
                                                                                                                    'carrer' => 'Carretera de Torroella de Montgrí a l\'Estarti',
                                                                                                                    'codi_postal' => '17258',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 845,
                                                                                                                ),
                                                                                                                113 => 
                                                                                                                array (
                                                                                                                    'id' => 114,
                                                                                                                    'nom' => 'Oficina Policial de la Generalitat - Mossos d',
                                                                                                                    'carrer' => 'Plaça de Vicenç Ferrer, s/n',
                                                                                                                    'codi_postal' => '8370',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 161,
                                                                                                                ),
                                                                                                                114 => 
                                                                                                                array (
                                                                                                                    'id' => 115,
                                                                                                                    'nom' => 'Oficina Policial de la Generalitat - Mossos d',
                                                                                                                    'carrer' => 'Carrer de Balmes, 20',
                                                                                                                    'codi_postal' => '25730',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 71,
                                                                                                                ),
                                                                                                                115 => 
                                                                                                                array (
                                                                                                                    'id' => 116,
                                                                                                                    'nom' => 'Oficina Policial de la Generalitat - Mossos d',
                                                                                                                    'carrer' => 'Avinguda del Vint-i-set de Gener, 67',
                                                                                                                    'codi_postal' => '25182',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 10,
                                                                                                                ),
                                                                                                                116 => 
                                                                                                                array (
                                                                                                                    'id' => 117,
                                                                                                                    'nom' => 'Oficina Policial de Mossos d\'Esquadra i Guàrd',
                                                                                                                    'carrer' => 'Passeig de Joan de Borbó Comte de Barcelona, ',
                                                                                                                    'codi_postal' => '8003',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 91,
                                                                                                                ),
                                                                                                                117 => 
                                                                                                                array (
                                                                                                                    'id' => 118,
                                                                                                                    'nom' => 'Parc de Bombers d\'Amer',
                                                                                                                    'carrer' => 'Pujada de l\'Estació, s/n',
                                                                                                                    'codi_postal' => '17170',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 48,
                                                                                                                ),
                                                                                                                118 => 
                                                                                                                array (
                                                                                                                    'id' => 119,
                                                                                                                    'nom' => 'Parc de Bombers d\'Amposta',
                                                                                                                    'carrer' => 'Carrer del Po Polígon L\'Oriola',
                                                                                                                    'codi_postal' => '43870',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 52,
                                                                                                                ),
                                                                                                                119 => 
                                                                                                                array (
                                                                                                                    'id' => 120,
                                                                                                                    'nom' => 'Parc de Bombers d\'Ascó',
                                                                                                                    'carrer' => 'Avinguda de la Central Nuclear, s/n / Ctra. d',
                                                                                                                    'codi_postal' => '43791',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 72,
                                                                                                                ),
                                                                                                                120 => 
                                                                                                                array (
                                                                                                                    'id' => 121,
                                                                                                                    'nom' => 'Parc de Bombers d\'Igualada',
                                                                                                                    'carrer' => 'Carrer de Masquefa, 42',
                                                                                                                    'codi_postal' => '8700',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 360,
                                                                                                                ),
                                                                                                                121 => 
                                                                                                                array (
                                                                                                                    'id' => 122,
                                                                                                                    'nom' => 'Parc de Bombers d\'Olot',
                                                                                                                    'carrer' => 'Carrer de l\'Estadi, s/n.',
                                                                                                                    'codi_postal' => '17800',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 498,
                                                                                                                ),
                                                                                                                122 => 
                                                                                                                array (
                                                                                                                    'id' => 123,
                                                                                                                    'nom' => 'Parc de Bombers d\'Ulldecona',
                                                                                                                    'carrer' => 'Carretera de la Sènia, s/n',
                                                                                                                    'codi_postal' => '43550',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 855,
                                                                                                                ),
                                                                                                                123 => 
                                                                                                                array (
                                                                                                                    'id' => 124,
                                                                                                                    'nom' => 'Parc de Bombers de Badalona',
                                                                                                                    'carrer' => 'Carretera de Canyet, 1-3',
                                                                                                                    'codi_postal' => '8915',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 79,
                                                                                                                ),
                                                                                                                124 => 
                                                                                                                array (
                                                                                                                    'id' => 125,
                                                                                                                    'nom' => 'Parc de Bombers de Balaguer',
                                                                                                                    'carrer' => 'Pla del Reial del Sant Crist, s/n',
                                                                                                                    'codi_postal' => '25600',
                                                                                                                    'correu' => NULL,
                                                                                                                    'municipis_id' => 83,
                                                                                                                ),
                                                                                                                125 => 
                                                                                                                array (
                                                                                                                    'id' => 126,
                                                                                                                    'nom' => 'Parc de Bombers de Banyoles',
                                                                                                                    'carrer' => 'Camí de Borgonyà, s/n (C. de Puigpalter. Polí',
                                                                                                                        'codi_postal' => '17820',
                                                                                                                        'correu' => NULL,
                                                                                                                        'municipis_id' => 87,
                                                                                                                    ),
                                                                                                                    126 => 
                                                                                                                    array (
                                                                                                                        'id' => 127,
                                                                                                                        'nom' => 'Parc de Bombers de Berga',
                                                                                                                        'carrer' => 'Passeig de la Vila de Casserres, s/n',
                                                                                                                        'codi_postal' => '8600',
                                                                                                                        'correu' => NULL,
                                                                                                                        'municipis_id' => 114,
                                                                                                                    ),
                                                                                                                    127 => 
                                                                                                                    array (
                                                                                                                        'id' => 128,
                                                                                                                        'nom' => 'Parc de Bombers de Calaf',
                                                                                                                        'carrer' => 'Carrer del Doctor Fleming, 3 (Polígon Industr',
                                                                                                                            'codi_postal' => '8280',
                                                                                                                            'correu' => NULL,
                                                                                                                            'municipis_id' => 155,
                                                                                                                        ),
                                                                                                                        128 => 
                                                                                                                        array (
                                                                                                                            'id' => 129,
                                                                                                                            'nom' => 'Parc de Bombers de Cambrils',
                                                                                                                            'carrer' => 'Carretera de Montbrió, s/n (Polígon  Industri',
                                                                                                                                'codi_postal' => '43850',
                                                                                                                                'correu' => NULL,
                                                                                                                                'municipis_id' => 168,
                                                                                                                            ),
                                                                                                                            129 => 
                                                                                                                            array (
                                                                                                                                'id' => 130,
                                                                                                                                'nom' => 'Parc de Bombers de Cardona',
                                                                                                                                'carrer' => 'Carrer dels Forns, s/n (polígon industrial La',
                                                                                                                                    'codi_postal' => '8261',
                                                                                                                                    'correu' => NULL,
                                                                                                                                    'municipis_id' => 189,
                                                                                                                                ),
                                                                                                                                130 => 
                                                                                                                                array (
                                                                                                                                    'id' => 131,
                                                                                                                                    'nom' => 'Parc de Bombers de Cassà de la Selva',
                                                                                                                                    'carrer' => 'Ronda de la Sardana, s/n (Urbanització Mas Cu',
                                                                                                                                        'codi_postal' => '17244',
                                                                                                                                        'correu' => NULL,
                                                                                                                                        'municipis_id' => 192,
                                                                                                                                    ),
                                                                                                                                    131 => 
                                                                                                                                    array (
                                                                                                                                        'id' => 132,
                                                                                                                                        'nom' => 'Parc de Bombers de Cerdanyola del Vallès',
                                                                                                                                        'carrer' => 'Avinguda de Serra Galliners, s/n (Universitat',
                                                                                                                                            'codi_postal' => '8193',
                                                                                                                                            'correu' => NULL,
                                                                                                                                            'municipis_id' => 227,
                                                                                                                                        ),
                                                                                                                                        132 => 
                                                                                                                                        array (
                                                                                                                                            'id' => 133,
                                                                                                                                            'nom' => 'Parc de Bombers de Cervera',
                                                                                                                                            'carrer' => 'Plaça de la Creu de les Orenetes, s/n (cant. ',
                                                                                                                                                'codi_postal' => '25200',
                                                                                                                                                'correu' => NULL,
                                                                                                                                                'municipis_id' => 229,
                                                                                                                                            ),
                                                                                                                                            133 => 
                                                                                                                                            array (
                                                                                                                                                'id' => 134,
                                                                                                                                                'nom' => 'Parc de Bombers de Cornellà de Llobregat',
                                                                                                                                                'carrer' => 'Passatge d\'Isabel Aunión, 6',
                                                                                                                                                'codi_postal' => '8940',
                                                                                                                                                'correu' => NULL,
                                                                                                                                                'municipis_id' => 251,
                                                                                                                                            ),
                                                                                                                                            134 => 
                                                                                                                                            array (
                                                                                                                                                'id' => 135,
                                                                                                                                                'nom' => 'Parc de Bombers de Falset',
                                                                                                                                                'carrer' => 'Carrer de les Torres, 3',
                                                                                                                                                'codi_postal' => '43730',
                                                                                                                                                'correu' => NULL,
                                                                                                                                                'municipis_id' => 281,
                                                                                                                                            ),
                                                                                                                                            135 => 
                                                                                                                                            array (
                                                                                                                                                'id' => 136,
                                                                                                                                                'nom' => 'Parc de Bombers de Figueres',
                                                                                                                                                'carrer' => 'Carrer del Compositor J. Serra, s/n',
                                                                                                                                                'codi_postal' => '17600',
                                                                                                                                                'correu' => NULL,
                                                                                                                                                'municipis_id' => 290,
                                                                                                                                            ),
                                                                                                                                            136 => 
                                                                                                                                            array (
                                                                                                                                                'id' => 137,
                                                                                                                                                'nom' => 'Parc de Bombers de Gandesa',
                                                                                                                                                'carrer' => 'Plaça de Francesc Serres, s/n',
                                                                                                                                                'codi_postal' => '43780',
                                                                                                                                                'correu' => NULL,
                                                                                                                                                'municipis_id' => 317,
                                                                                                                                            ),
                                                                                                                                            137 => 
                                                                                                                                            array (
                                                                                                                                                'id' => 138,
                                                                                                                                                'nom' => 'Parc de Bombers de Gavà',
                                                                                                                                                'carrer' => 'Camí de la Sentiu, s/n',
                                                                                                                                                'codi_postal' => '8850',
                                                                                                                                                'correu' => NULL,
                                                                                                                                                'municipis_id' => 324,
                                                                                                                                            ),
                                                                                                                                            138 => 
                                                                                                                                            array (
                                                                                                                                                'id' => 139,
                                                                                                                                                'nom' => 'Parc de Bombers de Girona',
                                                                                                                                                'carrer' => 'Carrer de Joan Torró i Cabratosa, 15',
                                                                                                                                                'codi_postal' => '17005',
                                                                                                                                                'correu' => NULL,
                                                                                                                                                'municipis_id' => 330,
                                                                                                                                            ),
                                                                                                                                            139 => 
                                                                                                                                            array (
                                                                                                                                                'id' => 140,
                                                                                                                                                'nom' => 'Parc de Bombers de Granollers',
                                                                                                                                                'carrer' => 'Avinguda de Sant Julià, 113 (Polígon industri',
                                                                                                                                                    'codi_postal' => '8403',
                                                                                                                                                    'correu' => NULL,
                                                                                                                                                    'municipis_id' => 341,
                                                                                                                                                ),
                                                                                                                                                140 => 
                                                                                                                                                array (
                                                                                                                                                    'id' => 141,
                                                                                                                                                    'nom' => 'Parc de Bombers de Guardiola de Berguedà',
                                                                                                                                                    'carrer' => 'Cases Noves del Collet, 4',
                                                                                                                                                    'codi_postal' => '8694',
                                                                                                                                                    'correu' => NULL,
                                                                                                                                                    'municipis_id' => 348,
                                                                                                                                                ),
                                                                                                                                                141 => 
                                                                                                                                                array (
                                                                                                                                                    'id' => 142,
                                                                                                                                                    'nom' => 'Parc de Bombers de l\'Ametlla de Mar',
                                                                                                                                                    'carrer' => 'Carretera TV-3025, km 1,43860',
                                                                                                                                                    'codi_postal' => '43860',
                                                                                                                                                    'correu' => NULL,
                                                                                                                                                    'municipis_id' => 49,
                                                                                                                                                ),
                                                                                                                                                142 => 
                                                                                                                                                array (
                                                                                                                                                    'id' => 143,
                                                                                                                                                    'nom' => 'Parc de Bombers de l\'Hospitalet de l\'Infant -',
                                                                                                                                                    'carrer' => 'Carrer de Ramon Berenguer IV, s/n',
                                                                                                                                                    'codi_postal' => '43890',
                                                                                                                                                    'correu' => NULL,
                                                                                                                                                    'municipis_id' => 880,
                                                                                                                                                ),
                                                                                                                                                143 => 
                                                                                                                                                array (
                                                                                                                                                    'id' => 144,
                                                                                                                                                    'nom' => 'Parc de Bombers de l\'Hospitalet de Llobregat',
                                                                                                                                                    'carrer' => 'Avinguda del Masnou, 8',
                                                                                                                                                    'codi_postal' => '8905',
                                                                                                                                                    'correu' => NULL,
                                                                                                                                                    'municipis_id' => 357,
                                                                                                                                                ),
                                                                                                                                                144 => 
                                                                                                                                                array (
                                                                                                                                                    'id' => 145,
                                                                                                                                                    'nom' => 'Parc de Bombers de la Pera',
                                                                                                                                                    'carrer' => 'Carretera C-66 de Girona a Palamós, s/n (C. G',
                                                                                                                                                        'codi_postal' => '17120',
                                                                                                                                                        'correu' => NULL,
                                                                                                                                                        'municipis_id' => 536,
                                                                                                                                                    ),
                                                                                                                                                    145 => 
                                                                                                                                                    array (
                                                                                                                                                        'id' => 146,
                                                                                                                                                        'nom' => 'Parc de Bombers de la Seu d\'Urgell',
                                                                                                                                                        'carrer' => 'Avinguda del Camí Ral de Cerdanya, s/n',
                                                                                                                                                        'codi_postal' => '25700',
                                                                                                                                                        'correu' => NULL,
                                                                                                                                                        'municipis_id' => 782,
                                                                                                                                                    ),
                                                                                                                                                    146 => 
                                                                                                                                                    array (
                                                                                                                                                        'id' => 147,
                                                                                                                                                        'nom' => 'Parc de Bombers de la Vall d\'Aro',
                                                                                                                                                        'carrer' => 'Camí dels Bombers, s/n (al costat de la Depur',
                                                                                                                                                            'codi_postal' => '17853',
                                                                                                                                                            'correu' => NULL,
                                                                                                                                                            'municipis_id' => 215,
                                                                                                                                                        ),
                                                                                                                                                        147 => 
                                                                                                                                                        array (
                                                                                                                                                            'id' => 148,
                                                                                                                                                            'nom' => 'Parc de Bombers de Llançà',
                                                                                                                                                            'carrer' => 'Carrer Vuit de Març, s/n',
                                                                                                                                                            'codi_postal' => '17490',
                                                                                                                                                            'correu' => NULL,
                                                                                                                                                            'municipis_id' => 383,
                                                                                                                                                        ),
                                                                                                                                                        148 => 
                                                                                                                                                        array (
                                                                                                                                                            'id' => 149,
                                                                                                                                                            'nom' => 'Parc de Bombers de Lleida',
                                                                                                                                                            'carrer' => 'Carrer de Victoria Kent, s/n',
                                                                                                                                                            'codi_postal' => '25199',
                                                                                                                                                            'correu' => NULL,
                                                                                                                                                            'municipis_id' => 386,
                                                                                                                                                        ),
                                                                                                                                                        149 => 
                                                                                                                                                        array (
                                                                                                                                                            'id' => 150,
                                                                                                                                                            'nom' => 'Parc de Bombers de Lloret de Mar',
                                                                                                                                                            'carrer' => 'Carrer de Costa Carbonell, s/n',
                                                                                                                                                            'codi_postal' => '17310',
                                                                                                                                                            'correu' => NULL,
                                                                                                                                                            'municipis_id' => 398,
                                                                                                                                                        ),
                                                                                                                                                        150 => 
                                                                                                                                                        array (
                                                                                                                                                            'id' => 151,
                                                                                                                                                            'nom' => 'Parc de Bombers de Maçanet de la Selva',
                                                                                                                                                            'carrer' => 'Paratge de la Creu, s/n',
                                                                                                                                                            'codi_postal' => '17412',
                                                                                                                                                            'correu' => NULL,
                                                                                                                                                            'municipis_id' => 402,
                                                                                                                                                        ),
                                                                                                                                                        151 => 
                                                                                                                                                        array (
                                                                                                                                                            'id' => 152,
                                                                                                                                                            'nom' => 'Parc de Bombers de Manresa',
                                                                                                                                                            'carrer' => 'Carretera de Vic, C-16-c, km. 0,500 \'\'El Guix',
                                                                                                                                                            'codi_postal' => '8243',
                                                                                                                                                            'correu' => NULL,
                                                                                                                                                            'municipis_id' => 410,
                                                                                                                                                        ),
                                                                                                                                                        152 => 
                                                                                                                                                        array (
                                                                                                                                                            'id' => 153,
                                                                                                                                                            'nom' => 'Parc de Bombers de Martorell',
                                                                                                                                                            'carrer' => 'Carretera N-II, km. 585.500 (Polígon Industri',
                                                                                                                                                                'codi_postal' => '8760',
                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                'municipis_id' => 414,
                                                                                                                                                            ),
                                                                                                                                                            153 => 
                                                                                                                                                            array (
                                                                                                                                                                'id' => 154,
                                                                                                                                                                'nom' => 'Parc de Bombers de Mataró',
                                                                                                                                                                'carrer' => 'Via Sergia, 95',
                                                                                                                                                                'codi_postal' => '8302',
                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                'municipis_id' => 431,
                                                                                                                                                            ),
                                                                                                                                                            154 => 
                                                                                                                                                            array (
                                                                                                                                                                'id' => 155,
                                                                                                                                                                'nom' => 'Parc de Bombers de Moià',
                                                                                                                                                            'carrer' => 'Carretera de Manresa, km. 26 (N-141)',
                                                                                                                                                                'codi_postal' => '8180',
                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                'municipis_id' => 439,
                                                                                                                                                            ),
                                                                                                                                                            155 => 
                                                                                                                                                            array (
                                                                                                                                                                'id' => 156,
                                                                                                                                                                'nom' => 'Parc de Bombers de Mollerussa',
                                                                                                                                                                'carrer' => 'Carretera de Linyola, s/n (al costat del ceme',
                                                                                                                                                                    'codi_postal' => '25230',
                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                    'municipis_id' => 442,
                                                                                                                                                                ),
                                                                                                                                                                156 => 
                                                                                                                                                                array (
                                                                                                                                                                    'id' => 157,
                                                                                                                                                                    'nom' => 'Parc de Bombers de Mollet del Vallès',
                                                                                                                                                                    'carrer' => 'Ronda de la Farinera, 6',
                                                                                                                                                                    'codi_postal' => '8100',
                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                    'municipis_id' => 444,
                                                                                                                                                                ),
                                                                                                                                                                157 => 
                                                                                                                                                                array (
                                                                                                                                                                    'id' => 158,
                                                                                                                                                                    'nom' => 'Parc de Bombers de Montblanc',
                                                                                                                                                                    'carrer' => 'Camí del Mas d\'en Foraster, s/n (Pol. Industr',
                                                                                                                                                                        'codi_postal' => '43400',
                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                        'municipis_id' => 450,
                                                                                                                                                                    ),
                                                                                                                                                                    158 => 
                                                                                                                                                                    array (
                                                                                                                                                                        'id' => 159,
                                                                                                                                                                        'nom' => 'Parc de Bombers de Móra d\'Ebre',
                                                                                                                                                                        'carrer' => 'Avinguda de les Comarques Catalanes, 90',
                                                                                                                                                                        'codi_postal' => '43740',
                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                        'municipis_id' => 472,
                                                                                                                                                                    ),
                                                                                                                                                                    159 => 
                                                                                                                                                                    array (
                                                                                                                                                                        'id' => 160,
                                                                                                                                                                        'nom' => 'Parc de Bombers de Palafrugell',
                                                                                                                                                                        'carrer' => 'Carretera de Palafrugell a Torroella de Montg',
                                                                                                                                                                        'codi_postal' => '17200',
                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                        'municipis_id' => 514,
                                                                                                                                                                    ),
                                                                                                                                                                    160 => 
                                                                                                                                                                    array (
                                                                                                                                                                        'id' => 161,
                                                                                                                                                                        'nom' => 'Parc de Bombers de Pineda',
                                                                                                                                                                        'carrer' => 'Carrer de Benavente, s/n',
                                                                                                                                                                        'codi_postal' => '8397',
                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                        'municipis_id' => 544,
                                                                                                                                                                    ),
                                                                                                                                                                    161 => 
                                                                                                                                                                    array (
                                                                                                                                                                        'id' => 162,
                                                                                                                                                                        'nom' => 'Parc de Bombers de Prats de Lluçanès',
                                                                                                                                                                        'carrer' => 'Carretera de Sant Quirze, s/n',
                                                                                                                                                                        'codi_postal' => '8513',
                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                        'municipis_id' => 583,
                                                                                                                                                                    ),
                                                                                                                                                                    162 => 
                                                                                                                                                                    array (
                                                                                                                                                                        'id' => 163,
                                                                                                                                                                        'nom' => 'Parc de Bombers de Reus',
                                                                                                                                                                        'carrer' => 'Carrer de Mas de Tallapedra, 1',
                                                                                                                                                                        'codi_postal' => '43204',
                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                        'municipis_id' => 610,
                                                                                                                                                                    ),
                                                                                                                                                                    163 => 
                                                                                                                                                                    array (
                                                                                                                                                                        'id' => 164,
                                                                                                                                                                        'nom' => 'Parc de Bombers de Ripoll',
                                                                                                                                                                        'carrer' => 'Carretera de Barcelona-Puigcerdà, s/n (polígo',
                                                                                                                                                                            'codi_postal' => '17500',
                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                            'municipis_id' => 620,
                                                                                                                                                                        ),
                                                                                                                                                                        164 => 
                                                                                                                                                                        array (
                                                                                                                                                                            'id' => 165,
                                                                                                                                                                            'nom' => 'Parc de Bombers de Roses',
                                                                                                                                                                        'carrer' => 'Carretera de Roses a Cadaquès (GI-614), s/n (',
                                                                                                                                                                            'codi_postal' => '17480',
                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                            'municipis_id' => 636,
                                                                                                                                                                        ),
                                                                                                                                                                        165 => 
                                                                                                                                                                        array (
                                                                                                                                                                            'id' => 166,
                                                                                                                                                                            'nom' => 'Parc de Bombers de Rubí',
                                                                                                                                                                            'carrer' => 'Carrer de Frederic Mompou, s/n (Polígon Ca n\'',
                                                                                                                                                                                'codi_postal' => '8191',
                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                'municipis_id' => 639,
                                                                                                                                                                            ),
                                                                                                                                                                            166 => 
                                                                                                                                                                            array (
                                                                                                                                                                                'id' => 167,
                                                                                                                                                                                'nom' => 'Parc de Bombers de Sabadell',
                                                                                                                                                                                'carrer' => 'Carretera de Barcelona, 52',
                                                                                                                                                                                'codi_postal' => '8205',
                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                'municipis_id' => 643,
                                                                                                                                                                            ),
                                                                                                                                                                            167 => 
                                                                                                                                                                            array (
                                                                                                                                                                                'id' => 168,
                                                                                                                                                                                'nom' => 'Parc de Bombers de Sant Boi de Llobregat',
                                                                                                                                                                                'carrer' => 'Carrer de la Mare de Déu de Núria, 24',
                                                                                                                                                                                'codi_postal' => '8830',
                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                'municipis_id' => 661,
                                                                                                                                                                            ),
                                                                                                                                                                            168 => 
                                                                                                                                                                            array (
                                                                                                                                                                                'id' => 169,
                                                                                                                                                                                'nom' => 'Parc de Bombers de Sant Celoni',
                                                                                                                                                                                'carrer' => 'Carretera Comarcal C-35, Km 57,700 (anteriorm',
                                                                                                                                                                                    'codi_postal' => '8470',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 665,
                                                                                                                                                                                ),
                                                                                                                                                                                169 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 170,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Sant Feliu de Llobregat',
                                                                                                                                                                                    'carrer' => 'Carrer de Mataró, s/n',
                                                                                                                                                                                    'codi_postal' => '8980',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 676,
                                                                                                                                                                                ),
                                                                                                                                                                                170 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 171,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Santa Coloma de Farners',
                                                                                                                                                                                    'carrer' => 'Carretera d\'Anglès, s/n',
                                                                                                                                                                                    'codi_postal' => '17430',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 742,
                                                                                                                                                                                ),
                                                                                                                                                                                171 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 172,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Santa Coloma de Gramenet',
                                                                                                                                                                                    'carrer' => 'Carrer de Castella, s/n',
                                                                                                                                                                                    'codi_postal' => '8924',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 743,
                                                                                                                                                                                ),
                                                                                                                                                                                172 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 173,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Solsona',
                                                                                                                                                                                    'carrer' => 'Avinguda de Sant Jordi, 2',
                                                                                                                                                                                    'codi_postal' => '25280',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 791,
                                                                                                                                                                                ),
                                                                                                                                                                                173 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 174,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Sort',
                                                                                                                                                                                    'carrer' => 'Carrer d\'Emili Riu i Periquet, 3',
                                                                                                                                                                                    'codi_postal' => '25560',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 794,
                                                                                                                                                                                ),
                                                                                                                                                                                174 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 175,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Tarragona',
                                                                                                                                                                                    'carrer' => 'Polígon  Industrial Francolí, s/n',
                                                                                                                                                                                    'codi_postal' => '43006',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 807,
                                                                                                                                                                                ),
                                                                                                                                                                                175 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 176,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Tàrrega',
                                                                                                                                                                                    'carrer' => 'Carrer dels Bombers, s/n',
                                                                                                                                                                                    'codi_postal' => '25300',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 808,
                                                                                                                                                                                ),
                                                                                                                                                                                176 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 177,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Terrassa',
                                                                                                                                                                                    'carrer' => 'Avinguda de Barcelona, 287',
                                                                                                                                                                                    'codi_postal' => '8222',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 816,
                                                                                                                                                                                ),
                                                                                                                                                                                177 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 178,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Torelló',
                                                                                                                                                                                    'carrer' => 'Carrer de Damians, 20-26',
                                                                                                                                                                                    'codi_postal' => '8570',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 825,
                                                                                                                                                                                ),
                                                                                                                                                                                178 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 179,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Torroella de Montgrí',
                                                                                                                                                                                    'carrer' => 'Avinguda del Ripollès, 7 / Ctra. de l\'Estarti',
                                                                                                                                                                                    'codi_postal' => '17258',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 845,
                                                                                                                                                                                ),
                                                                                                                                                                                179 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 180,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Tortosa',
                                                                                                                                                                                    'carrer' => 'Avinguda de Jesús, 27-33',
                                                                                                                                                                                    'codi_postal' => '43500',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 848,
                                                                                                                                                                                ),
                                                                                                                                                                                180 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 181,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Tremp',
                                                                                                                                                                                    'carrer' => 'Passeig Conca de Tremp, 3',
                                                                                                                                                                                    'codi_postal' => '25620',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 851,
                                                                                                                                                                                ),
                                                                                                                                                                                181 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 182,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Valls',
                                                                                                                                                                                    'carrer' => 'Carrer dels Fusters, 51 Polígon Palau de Reig',
                                                                                                                                                                                    'codi_postal' => '43800',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 877,
                                                                                                                                                                                ),
                                                                                                                                                                                182 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 183,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Vic',
                                                                                                                                                                                    'carrer' => 'Carretera de Roda,  C-153, km. 1,5',
                                                                                                                                                                                    'codi_postal' => '8500',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 888,
                                                                                                                                                                                ),
                                                                                                                                                                                183 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 184,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Vilafranca del Penedès',
                                                                                                                                                                                    'carrer' => 'Carrer de l\'Espirall, 51',
                                                                                                                                                                                    'codi_postal' => '8720',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 903,
                                                                                                                                                                                ),
                                                                                                                                                                                184 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 185,
                                                                                                                                                                                    'nom' => 'Parc de Bombers de Vilanova i la Geltrú',
                                                                                                                                                                                    'carrer' => 'Avinguda Francesc Macià, 134-136',
                                                                                                                                                                                    'codi_postal' => '8800',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 926,
                                                                                                                                                                                ),
                                                                                                                                                                                185 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 186,
                                                                                                                                                                                    'nom' => 'Parc de Bombers del Pont de Suert',
                                                                                                                                                                                    'carrer' => 'Carrer del Roser, s/n',
                                                                                                                                                                                    'codi_postal' => '25520',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 567,
                                                                                                                                                                                ),
                                                                                                                                                                                186 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 187,
                                                                                                                                                                                    'nom' => 'Parc de Bombers del Prat de Llobregat',
                                                                                                                                                                                    'carrer' => 'Carrer del Riu Anoia, 1',
                                                                                                                                                                                    'codi_postal' => '8820',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 581,
                                                                                                                                                                                ),
                                                                                                                                                                                187 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 188,
                                                                                                                                                                                    'nom' => 'Parc de Bombers del Vendrell',
                                                                                                                                                                                    'carrer' => 'Carretera de Calafell, s/n',
                                                                                                                                                                                    'codi_postal' => '43700',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 883,
                                                                                                                                                                                ),
                                                                                                                                                                                188 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 189,
                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris d\'Àger',
                                                                                                                                                                                'carrer' => 'Carretera de Tremp (C-12), s/n (Cantonada c. ',
                                                                                                                                                                                    'codi_postal' => '25691',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 3,
                                                                                                                                                                                ),
                                                                                                                                                                                189 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 190,
                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris d\'Agramunt',
                                                                                                                                                                                    'carrer' => 'Carrer de la Nostra Senyora dels Socors, s/n',
                                                                                                                                                                                    'codi_postal' => '25310',
                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                    'municipis_id' => 4,
                                                                                                                                                                                ),
                                                                                                                                                                                190 => 
                                                                                                                                                                                array (
                                                                                                                                                                                    'id' => 191,
                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris d\'Alcover',
                                                                                                                                                                                    'carrer' => 'Avinguda de Montblanc, s/n (Crta. de Reus a M',
                                                                                                                                                                                        'codi_postal' => '43460',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 25,
                                                                                                                                                                                    ),
                                                                                                                                                                                    191 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 192,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Almacelles',
                                                                                                                                                                                        'carrer' => 'Carretera de Sucs, s/n',
                                                                                                                                                                                        'codi_postal' => '25100',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 38,
                                                                                                                                                                                    ),
                                                                                                                                                                                    192 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 193,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Almenar',
                                                                                                                                                                                        'carrer' => 'Carrer Trullets, 62 baixos',
                                                                                                                                                                                        'codi_postal' => '25126',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 40,
                                                                                                                                                                                    ),
                                                                                                                                                                                    193 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 194,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Alp',
                                                                                                                                                                                        'carrer' => 'Avinguda de la Tossa d\'Alp, 6',
                                                                                                                                                                                        'codi_postal' => '17538',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 43,
                                                                                                                                                                                    ),
                                                                                                                                                                                    194 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 195,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Arbúcies',
                                                                                                                                                                                        'carrer' => 'Paratge Molí de Fogueres, s/n',
                                                                                                                                                                                        'codi_postal' => '17401',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 58,
                                                                                                                                                                                    ),
                                                                                                                                                                                    195 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 196,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Arenys de Mar',
                                                                                                                                                                                        'carrer' => 'Carrer de Jaume Partagàs Rabell, s/n',
                                                                                                                                                                                        'codi_postal' => '8350',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 59,
                                                                                                                                                                                    ),
                                                                                                                                                                                    196 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 197,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Artesa de Segre',
                                                                                                                                                                                        'carrer' => 'Carrer de Jesús Santacreu, s/n / Crta. de Mon',
                                                                                                                                                                                        'codi_postal' => '25730',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 71,
                                                                                                                                                                                    ),
                                                                                                                                                                                    197 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 198,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Espot',
                                                                                                                                                                                    'carrer' => 'Carretera Sant Maurici (LV-5004), s/n',
                                                                                                                                                                                        'codi_postal' => '25597',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 273,
                                                                                                                                                                                    ),
                                                                                                                                                                                    198 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 199,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Esterri d\'Àneu',
                                                                                                                                                                                        'carrer' => 'Carrer de la Carrerada, s/n',
                                                                                                                                                                                        'codi_postal' => '25580',
                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                        'municipis_id' => 279,
                                                                                                                                                                                    ),
                                                                                                                                                                                    199 => 
                                                                                                                                                                                    array (
                                                                                                                                                                                        'id' => 200,
                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris d\'Horta de Sant Jo',
                                                                                                                                                                                        'carrer' => 'Avinguda del Port d\'Horta de Sant Joan, s/n (',
                                                                                                                                                                                            'codi_postal' => '43596',
                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                            'municipis_id' => 356,
                                                                                                                                                                                        ),
                                                                                                                                                                                        200 => 
                                                                                                                                                                                        array (
                                                                                                                                                                                            'id' => 201,
                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris d\'Isona',
                                                                                                                                                                                            'carrer' => 'Carrer de la Cooperativa, s/n',
                                                                                                                                                                                            'codi_postal' => '25650',
                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                            'municipis_id' => 361,
                                                                                                                                                                                        ),
                                                                                                                                                                                        201 => 
                                                                                                                                                                                        array (
                                                                                                                                                                                            'id' => 202,
                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris d\'Oliana',
                                                                                                                                                                                        'carrer' => 'Carretera de Lleida a Andorra (C-14), s/n',
                                                                                                                                                                                            'codi_postal' => '25790',
                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                            'municipis_id' => 493,
                                                                                                                                                                                        ),
                                                                                                                                                                                        202 => 
                                                                                                                                                                                        array (
                                                                                                                                                                                            'id' => 203,
                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris d\'Organyà',
                                                                                                                                                                                            'carrer' => 'Carrer del Bomber Joan Espluga, s/n',
                                                                                                                                                                                            'codi_postal' => '25794',
                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                            'municipis_id' => 504,
                                                                                                                                                                                        ),
                                                                                                                                                                                        203 => 
                                                                                                                                                                                        array (
                                                                                                                                                                                            'id' => 204,
                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de Batea',
                                                                                                                                                                                            'carrer' => 'Carrer de Lleida, 3',
                                                                                                                                                                                            'codi_postal' => '43786',
                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                            'municipis_id' => 95,
                                                                                                                                                                                        ),
                                                                                                                                                                                        204 => 
                                                                                                                                                                                        array (
                                                                                                                                                                                            'id' => 205,
                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de Begues',
                                                                                                                                                                                            'carrer' => 'Carrer de Sant Domènec, 29',
                                                                                                                                                                                            'codi_postal' => '8859',
                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                            'municipis_id' => 97,
                                                                                                                                                                                        ),
                                                                                                                                                                                        205 => 
                                                                                                                                                                                        array (
                                                                                                                                                                                            'id' => 206,
                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de Bellver de Cerd',
                                                                                                                                                                                            'carrer' => 'Carrer dels Pirineus, 1',
                                                                                                                                                                                            'codi_postal' => '25720',
                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                            'municipis_id' => 109,
                                                                                                                                                                                        ),
                                                                                                                                                                                        206 => 
                                                                                                                                                                                        array (
                                                                                                                                                                                            'id' => 207,
                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de Bossòst',
                                                                                                                                                                                            'carrer' => 'Passeig deth Portilhon, 1 (Ctra. N-141 / Crta',
                                                                                                                                                                                                'codi_postal' => '25550',
                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                'municipis_id' => 135,
                                                                                                                                                                                            ),
                                                                                                                                                                                            207 => 
                                                                                                                                                                                            array (
                                                                                                                                                                                                'id' => 208,
                                                                                                                                                                                                'nom' => 'Parc de Bombers Voluntaris de Cadaqués',
                                                                                                                                                                                                'carrer' => 'Carrer de Carles Rahola, 11',
                                                                                                                                                                                                'codi_postal' => '17488',
                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                'municipis_id' => 154,
                                                                                                                                                                                            ),
                                                                                                                                                                                            208 => 
                                                                                                                                                                                            array (
                                                                                                                                                                                                'id' => 209,
                                                                                                                                                                                                'nom' => 'Parc de Bombers Voluntaris de Caldes de Montb',
                                                                                                                                                                                                'carrer' => 'Carrer del Priorat, s/n (Polígon Industrial L',
                                                                                                                                                                                                    'codi_postal' => '8140',
                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                    'municipis_id' => 159,
                                                                                                                                                                                                ),
                                                                                                                                                                                                209 => 
                                                                                                                                                                                                array (
                                                                                                                                                                                                    'id' => 210,
                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Camprodon',
                                                                                                                                                                                                    'carrer' => 'Carrer de Joan Maragall, 6',
                                                                                                                                                                                                    'codi_postal' => '17867',
                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                    'municipis_id' => 174,
                                                                                                                                                                                                ),
                                                                                                                                                                                                210 => 
                                                                                                                                                                                                array (
                                                                                                                                                                                                    'id' => 211,
                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Capellades',
                                                                                                                                                                                                    'carrer' => 'Carrer de Pau Casals, s/n',
                                                                                                                                                                                                    'codi_postal' => '8786',
                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                    'municipis_id' => 185,
                                                                                                                                                                                                ),
                                                                                                                                                                                                211 => 
                                                                                                                                                                                                array (
                                                                                                                                                                                                    'id' => 212,
                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Castellar del V',
                                                                                                                                                                                                    'carrer' => 'Carrer del Berguedà, 39 (Pol. ind. Pla de la ',
                                                                                                                                                                                                        'codi_postal' => '8211',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 199,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    212 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 213,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Castellfollit d',
                                                                                                                                                                                                        'carrer' => 'Plaça de la Concòrdia, s/n',
                                                                                                                                                                                                        'codi_postal' => '8255',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 208,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    213 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 214,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Coll de Nargó',
                                                                                                                                                                                                    'carrer' => 'Carretera de Tremp (L-511), s/n',
                                                                                                                                                                                                        'codi_postal' => '25793',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 237,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    214 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 215,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Collbató',
                                                                                                                                                                                                        'carrer' => 'Carrer de la Muntanya, s/n',
                                                                                                                                                                                                        'codi_postal' => '8293',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 238,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    215 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 216,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Cornudella de M',
                                                                                                                                                                                                    'carrer' => 'Carrer del Comte de Rius, s/n (C-242)',
                                                                                                                                                                                                        'codi_postal' => '43360',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 253,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    216 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 217,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Flix',
                                                                                                                                                                                                    'carrer' => 'Carrer d\'Ascó, s/n (La Colònia de la Fàbrica)',
                                                                                                                                                                                                        'codi_postal' => '43750',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 293,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    217 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 218,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Gelida',
                                                                                                                                                                                                        'carrer' => 'Passeig la Circumval·lació, s/n',
                                                                                                                                                                                                        'codi_postal' => '8790',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 326,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    218 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 219,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Gironella',
                                                                                                                                                                                                        'carrer' => 'Passatge dels Estudis, s/n',
                                                                                                                                                                                                        'codi_postal' => '8680',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 331,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    219 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 220,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Guissona',
                                                                                                                                                                                                        'carrer' => 'Carrer de Sant Sebastià, 16',
                                                                                                                                                                                                        'codi_postal' => '25210',
                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                        'municipis_id' => 353,
                                                                                                                                                                                                    ),
                                                                                                                                                                                                    220 => 
                                                                                                                                                                                                    array (
                                                                                                                                                                                                        'id' => 221,
                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Josa i Tuixén',
                                                                                                                                                                                                        'carrer' => 'Carretera de Tuixén a la Coma (C-462, Lv-4012',
                                                                                                                                                                                                            'codi_postal' => '25717',
                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                            'municipis_id' => 369,
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        221 => 
                                                                                                                                                                                                        array (
                                                                                                                                                                                                            'id' => 222,
                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de l\'Escala',
                                                                                                                                                                                                        'carrer' => 'Carretera de Bellcaire a l\'Escala (GI-632), k',
                                                                                                                                                                                                            'codi_postal' => '17130',
                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                            'municipis_id' => 265,
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        222 => 
                                                                                                                                                                                                        array (
                                                                                                                                                                                                            'id' => 223,
                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de La Garriga',
                                                                                                                                                                                                            'carrer' => 'Carrer del Mil·lenari de Catalunya, 60',
                                                                                                                                                                                                            'codi_postal' => '8530',
                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                            'municipis_id' => 320,
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        223 => 
                                                                                                                                                                                                        array (
                                                                                                                                                                                                            'id' => 224,
                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de la Granadella',
                                                                                                                                                                                                            'carrer' => 'Pla de la Vila, 33',
                                                                                                                                                                                                            'codi_postal' => '25177',
                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                            'municipis_id' => 338,
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        224 => 
                                                                                                                                                                                                        array (
                                                                                                                                                                                                            'id' => 225,
                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de la Jonquera',
                                                                                                                                                                                                            'carrer' => 'Carrer de Bosch de la Trinxeria, 1',
                                                                                                                                                                                                            'codi_postal' => '17700',
                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                            'municipis_id' => 367,
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        225 => 
                                                                                                                                                                                                        array (
                                                                                                                                                                                                            'id' => 226,
                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de la Llacuna',
                                                                                                                                                                                                        'carrer' => 'Carretera d\'Igualada, s/n (BP-2121 / C-432)',
                                                                                                                                                                                                            'codi_postal' => '8779',
                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                            'municipis_id' => 375,
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        226 => 
                                                                                                                                                                                                        array (
                                                                                                                                                                                                            'id' => 227,
                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de la Pobla de Seg',
                                                                                                                                                                                                        'carrer' => 'Carrer dels Bombers, s/n (Sector Migdia)',
                                                                                                                                                                                                            'codi_postal' => '25500',
                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                            'municipis_id' => 561,
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        227 => 
                                                                                                                                                                                                        array (
                                                                                                                                                                                                            'id' => 228,
                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de Les',
                                                                                                                                                                                                            'carrer' => 'Carrer Paissas, 1',
                                                                                                                                                                                                            'codi_postal' => '25540',
                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                            'municipis_id' => 373,
                                                                                                                                                                                                        ),
                                                                                                                                                                                                        228 => 
                                                                                                                                                                                                        array (
                                                                                                                                                                                                            'id' => 229,
                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de les Borges Blan',
                                                                                                                                                                                                            'carrer' => 'Camí de les Verdunes, s/n (Polígon Industrial',
                                                                                                                                                                                                                'codi_postal' => '25400',
                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                'municipis_id' => 131,
                                                                                                                                                                                                            ),
                                                                                                                                                                                                            229 => 
                                                                                                                                                                                                            array (
                                                                                                                                                                                                                'id' => 230,
                                                                                                                                                                                                                'nom' => 'Parc de Bombers Voluntaris de Llavorsí',
                                                                                                                                                                                                            'carrer' => 'Carretera de la Vall d\'Aran, 29 (C-13)',
                                                                                                                                                                                                                'codi_postal' => '25595',
                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                'municipis_id' => 385,
                                                                                                                                                                                                            ),
                                                                                                                                                                                                            230 => 
                                                                                                                                                                                                            array (
                                                                                                                                                                                                                'id' => 231,
                                                                                                                                                                                                                'nom' => 'Parc de Bombers Voluntaris de Llívia',
                                                                                                                                                                                                                'carrer' => 'Carrer d\'Estavar, s/n',
                                                                                                                                                                                                                'codi_postal' => '17527',
                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                'municipis_id' => 393,
                                                                                                                                                                                                            ),
                                                                                                                                                                                                            231 => 
                                                                                                                                                                                                            array (
                                                                                                                                                                                                                'id' => 232,
                                                                                                                                                                                                                'nom' => 'Parc de Bombers Voluntaris de Malgrat de Mar',
                                                                                                                                                                                                                'carrer' => 'Carrer de Joan Coromines i Vigneaux, s/n - ca',
                                                                                                                                                                                                                'codi_postal' => '8380',
                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                'municipis_id' => 407,
                                                                                                                                                                                                            ),
                                                                                                                                                                                                            232 => 
                                                                                                                                                                                                            array (
                                                                                                                                                                                                                'id' => 233,
                                                                                                                                                                                                                'nom' => 'Parc de Bombers Voluntaris de Matadepera',
                                                                                                                                                                                                                'carrer' => 'Carrer Joan Paloma, 2',
                                                                                                                                                                                                                'codi_postal' => '8230',
                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                'municipis_id' => 430,
                                                                                                                                                                                                            ),
                                                                                                                                                                                                            233 => 
                                                                                                                                                                                                            array (
                                                                                                                                                                                                                'id' => 234,
                                                                                                                                                                                                                'nom' => 'Parc de Bombers Voluntaris de Montferrer',
                                                                                                                                                                                                                'carrer' => 'Carretera de Lleida a Puigcerdà (N-260 - C-14',
                                                                                                                                                                                                                    'codi_postal' => '25711',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 456,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                234 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 235,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Piera',
                                                                                                                                                                                                                    'carrer' => 'Carrer de Folch i Torres, 35',
                                                                                                                                                                                                                    'codi_postal' => '8784',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 542,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                235 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 236,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Pinós',
                                                                                                                                                                                                                    'carrer' => 'Carrer de Serra Dasú, 15',
                                                                                                                                                                                                                    'codi_postal' => '25287',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 547,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                236 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 237,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Ponts',
                                                                                                                                                                                                                    'carrer' => 'Carrer del Bosquet, s/n',
                                                                                                                                                                                                                    'codi_postal' => '25740',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 572,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                237 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 238,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Portbou',
                                                                                                                                                                                                                    'carrer' => 'Carrer de Méndez Núñez, 22',
                                                                                                                                                                                                                    'codi_postal' => '17497',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 576,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                238 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 239,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Prades',
                                                                                                                                                                                                                'carrer' => 'Carretera de l\'Espluga (T-700), PK 21,490',
                                                                                                                                                                                                                    'codi_postal' => '43364',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 579,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                239 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 240,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Puig-reig',
                                                                                                                                                                                                                    'carrer' => 'Carrer de Pau Casals, 1',
                                                                                                                                                                                                                    'codi_postal' => '8692',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 596,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                240 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 241,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Puigcerdà',
                                                                                                                                                                                                                    'carrer' => 'Carretera N-152. Km. 169',
                                                                                                                                                                                                                    'codi_postal' => '17520',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 592,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                241 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 242,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Ribera de Cardó',
                                                                                                                                                                                                                'carrer' => 'Carretera de Tavascan (L-504), s/n',
                                                                                                                                                                                                                    'codi_postal' => '25570',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 863,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                242 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 243,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Ribes de Freser',
                                                                                                                                                                                                                    'carrer' => 'Carrer de l\'Escorxador, s/n',
                                                                                                                                                                                                                    'codi_postal' => '17534',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 616,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                243 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 244,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Sallent',
                                                                                                                                                                                                                    'carrer' => 'Carrer de l\'Estació, 3',
                                                                                                                                                                                                                    'codi_postal' => '8650',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 648,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                244 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 245,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Sant Antoni de ',
                                                                                                                                                                                                                    'carrer' => 'Carrer Ferran Llach, 32',
                                                                                                                                                                                                                    'codi_postal' => '8459',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 659,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                245 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 246,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Sant Climent de',
                                                                                                                                                                                                                    'carrer' => 'Carretera de Viladecans a Sant Climent de Llo',
                                                                                                                                                                                                                    'codi_postal' => '8849',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 666,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                246 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 247,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Sant Climent Se',
                                                                                                                                                                                                                    'carrer' => 'Carrer del Pont, 34',
                                                                                                                                                                                                                    'codi_postal' => '17751',
                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                    'municipis_id' => 667,
                                                                                                                                                                                                                ),
                                                                                                                                                                                                                247 => 
                                                                                                                                                                                                                array (
                                                                                                                                                                                                                    'id' => 248,
                                                                                                                                                                                                                    'nom' => 'Parc de Bombers Voluntaris de Sant Hilari Sac',
                                                                                                                                                                                                                    'carrer' => 'Carrer de Mas Garriga, 31 nau 2 (Polígon Mas ',
                                                                                                                                                                                                                        'codi_postal' => '17403',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 685,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    248 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 249,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Sant Jaume dels',
                                                                                                                                                                                                                        'carrer' => 'Carrer de la Germanor, s/n',
                                                                                                                                                                                                                        'codi_postal' => '43713',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 690,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    249 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 250,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Sant Llorenç de',
                                                                                                                                                                                                                        'carrer' => 'Carrer de la Creueta, s/n',
                                                                                                                                                                                                                        'codi_postal' => '25282',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 704,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    250 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 251,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Sant Llorenç Sa',
                                                                                                                                                                                                                        'carrer' => 'Avinguda de Catalunya, s/n',
                                                                                                                                                                                                                        'codi_postal' => '8212',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 706,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    251 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 252,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Santa Coloma de',
                                                                                                                                                                                                                    'carrer' => 'Carretera de Vallfogona (T-224), s/n',
                                                                                                                                                                                                                        'codi_postal' => '43420',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 744,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    252 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 253,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Santa Maria de ',
                                                                                                                                                                                                                        'carrer' => 'Carrer Antoni Puigvert, 16',
                                                                                                                                                                                                                        'codi_postal' => '8460',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 757,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    253 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 254,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Sarral',
                                                                                                                                                                                                                        'carrer' => 'Avinguda de la Conca, s/n',
                                                                                                                                                                                                                        'codi_postal' => '43424',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 764,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    254 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 255,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Seròs',
                                                                                                                                                                                                                        'carrer' => 'Carrer del Calvari, 40',
                                                                                                                                                                                                                        'codi_postal' => '25183',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 779,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    255 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 256,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Sitges',
                                                                                                                                                                                                                        'carrer' => 'Carrer de Samuel Barrachina, s/n cantonada Pg',
                                                                                                                                                                                                                        'codi_postal' => '8870',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 786,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    256 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 257,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Tivissa',
                                                                                                                                                                                                                        'carrer' => 'Carrer Marça de Dalt, 2',
                                                                                                                                                                                                                        'codi_postal' => '43746',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 821,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    257 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 258,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Torà',
                                                                                                                                                                                                                    'carrer' => 'Carretera de Calaf (C-1412a), 4',
                                                                                                                                                                                                                        'codi_postal' => '25750',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 823,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    258 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 259,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Tordera',
                                                                                                                                                                                                                        'carrer' => 'Carrer de Can Pujades, 11',
                                                                                                                                                                                                                        'codi_postal' => '8490',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 824,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    259 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 260,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Tossa de Mar',
                                                                                                                                                                                                                    'carrer' => 'Avinguda de Catalunya, s/n (Parc de Bombers)',
                                                                                                                                                                                                                        'codi_postal' => '17320',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 850,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    260 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 261,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Vielha e Mijara',
                                                                                                                                                                                                                        'carrer' => 'Carretera de França, 24',
                                                                                                                                                                                                                        'codi_postal' => '25530',
                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                        'municipis_id' => 891,
                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                    261 => 
                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                        'id' => 262,
                                                                                                                                                                                                                        'nom' => 'Parc de Bombers Voluntaris de Vila-rodona',
                                                                                                                                                                                                                        'carrer' => 'Carrer de Mossèn Galofré, 17 (Crta. de Can Fe',
                                                                                                                                                                                                                            'codi_postal' => '43814',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 928,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        262 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 263,
                                                                                                                                                                                                                            'nom' => 'Parc de Bombers Voluntaris de Viladecavalls',
                                                                                                                                                                                                                            'carrer' => 'Vial de Sant Jordi, s/n',
                                                                                                                                                                                                                            'codi_postal' => '8232',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 899,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        263 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 264,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Abrera',
                                                                                                                                                                                                                            'carrer' => 'Carrer de Tarragona, 2',
                                                                                                                                                                                                                            'codi_postal' => '8630',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 2,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        264 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 265,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Agramunt',
                                                                                                                                                                                                                            'carrer' => 'Plaça de l\'Església, 1',
                                                                                                                                                                                                                            'codi_postal' => '25310',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 4,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        265 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 266,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Alcanar',
                                                                                                                                                                                                                            'carrer' => 'Carrer de la Generalitat, 10',
                                                                                                                                                                                                                            'codi_postal' => '43530',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 21,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        266 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 267,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Alcarràs',
                                                                                                                                                                                                                            'carrer' => 'Carrer de Joan XXIII, 23',
                                                                                                                                                                                                                            'codi_postal' => '25180',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 23,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        267 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 268,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Alella',
                                                                                                                                                                                                                            'carrer' => 'Passeig de Marià Estrada, 8',
                                                                                                                                                                                                                            'codi_postal' => '8328',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 29,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        268 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 269,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Almacelles',
                                                                                                                                                                                                                            'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                            'codi_postal' => '25100',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 38,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        269 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 270,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Altafulla',
                                                                                                                                                                                                                            'carrer' => 'Carrer del Marquès de Tamarit, 16 local A',
                                                                                                                                                                                                                            'codi_postal' => '43893',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 47,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        270 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 271,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Amposta',
                                                                                                                                                                                                                            'carrer' => 'Carrer de Barcelona, 66',
                                                                                                                                                                                                                            'codi_postal' => '43870',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 52,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        271 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 272,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Anglès',
                                                                                                                                                                                                                            'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                            'codi_postal' => '17160',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 53,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        272 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 273,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Arbúcies',
                                                                                                                                                                                                                            'carrer' => 'Carrer del Castell, 92',
                                                                                                                                                                                                                            'codi_postal' => '17401',
                                                                                                                                                                                                                            'correu' => NULL,
                                                                                                                                                                                                                            'municipis_id' => 58,
                                                                                                                                                                                                                        ),
                                                                                                                                                                                                                        273 => 
                                                                                                                                                                                                                        array (
                                                                                                                                                                                                                            'id' => 274,
                                                                                                                                                                                                                            'nom' => 'Policia Local d\'Arenys de Mar',
                                                                                                                                                                                                                            'carrer' => 'Carrer d\'Auterive, s/n (cantonada carrer de l',
                                                                                                                                                                                                                                'codi_postal' => '8350',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 59,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            274 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 275,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Arenys de Munt',
                                                                                                                                                                                                                                'carrer' => 'Rambla Sant Martí, 19',
                                                                                                                                                                                                                                'codi_postal' => '8358',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 60,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            275 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 276,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Argentona',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Ramon Par, 4',
                                                                                                                                                                                                                                'codi_postal' => '8310',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 64,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            276 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 277,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Artés',
                                                                                                                                                                                                                                'carrer' => 'Carrer Barquera, 41',
                                                                                                                                                                                                                                'codi_postal' => '8271',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 69,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            277 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 278,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Esparreguera',
                                                                                                                                                                                                                                'carrer' => 'Passeig dels Jocs Olímpics, 11',
                                                                                                                                                                                                                                'codi_postal' => '8292',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 266,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            278 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 279,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Esplugues de Llobregat',
                                                                                                                                                                                                                                'carrer' => 'Carrer Manuel de Falla, 22',
                                                                                                                                                                                                                                'codi_postal' => '8950',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 270,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            279 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 280,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Hostalric',
                                                                                                                                                                                                                                'carrer' => 'Carrer del Ravalet, s/n',
                                                                                                                                                                                                                                'codi_postal' => '17450',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 359,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            280 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 281,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Igualada',
                                                                                                                                                                                                                            'carrer' => 'Avinguda de Pau Casals, 10 (edifici 092)',
                                                                                                                                                                                                                                'codi_postal' => '8700',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 360,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            281 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 282,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Olesa de Montserrat',
                                                                                                                                                                                                                                'carrer' => 'Carrer d\'Anselm Clavé, 189',
                                                                                                                                                                                                                                'codi_postal' => '8640',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 492,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            282 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 283,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Olot',
                                                                                                                                                                                                                                'carrer' => 'Plaça de Can Joanetes, 11 / C. del Mirador, s',
                                                                                                                                                                                                                                'codi_postal' => '17800',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 498,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            283 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 284,
                                                                                                                                                                                                                                'nom' => 'Policia Local d\'Ulldecona',
                                                                                                                                                                                                                                'carrer' => 'Carrer Major, 49',
                                                                                                                                                                                                                                'codi_postal' => '43550',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 855,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            284 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 285,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Badalona',
                                                                                                                                                                                                                                'carrer' => 'Turó d\'en Caritg, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8917',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 79,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            285 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 286,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Badia del Vallès',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de burgos, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8214',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 80,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            286 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 287,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Balaguer',
                                                                                                                                                                                                                                'carrer' => 'Plaça del Mercadal, 1',
                                                                                                                                                                                                                                'codi_postal' => '25600',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 83,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            287 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 288,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Banyoles',
                                                                                                                                                                                                                                'carrer' => 'Passeig de la Farga, 84',
                                                                                                                                                                                                                                'codi_postal' => '17820',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 87,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            288 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 289,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Barberà del Vallès',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de la Verge de Montserrat, 60',
                                                                                                                                                                                                                                'codi_postal' => '8210',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 90,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            289 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 290,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Begues',
                                                                                                                                                                                                                                'carrer' => 'Camí Ral, 35',
                                                                                                                                                                                                                                'codi_postal' => '8859',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 97,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            290 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 291,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Begur',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Francesc Forgas, 1',
                                                                                                                                                                                                                                'codi_postal' => '17255',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 98,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            291 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 292,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Berga',
                                                                                                                                                                                                                                'carrer' => 'Plaça del Doctor Salo, 8',
                                                                                                                                                                                                                                'codi_postal' => '8600',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 114,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            292 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 293,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Bigues i Riells del Fai',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de Prat de la Riba, 167',
                                                                                                                                                                                                                                'codi_postal' => '8415',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 118,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            293 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 294,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Blanes',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de Joan Carles I, 120',
                                                                                                                                                                                                                                'codi_postal' => '17300',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 125,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            294 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 295,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cabrera de Mar',
                                                                                                                                                                                                                                'carrer' => 'Plaça de l\'Ajuntament, 5',
                                                                                                                                                                                                                                'codi_postal' => '8349',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 152,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            295 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 296,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cabrils',
                                                                                                                                                                                                                                'carrer' => 'Carrer Luis Colmenar, 2',
                                                                                                                                                                                                                                'codi_postal' => '8348',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 153,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            296 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 297,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cadaqués',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Carles Rahola, 9',
                                                                                                                                                                                                                                'codi_postal' => '17488',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 154,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            297 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 298,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Calafell',
                                                                                                                                                                                                                                'carrer' => 'Carretera de l\'Estació, 18',
                                                                                                                                                                                                                                'codi_postal' => '43820',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 156,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            298 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 299,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Caldes d\'Estrac',
                                                                                                                                                                                                                                'carrer' => 'Plaça de la Vila, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8393',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 160,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            299 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 300,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Caldes de Malavella',
                                                                                                                                                                                                                                'carrer' => 'Plaça de l\'Ajuntament, 8',
                                                                                                                                                                                                                                'codi_postal' => '17455',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 158,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            300 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 301,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Caldes de Montbui',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Santa Teresa, 17',
                                                                                                                                                                                                                                'codi_postal' => '8140',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 159,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            301 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 302,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Calella',
                                                                                                                                                                                                                                'carrer' => 'Avinguda del Parc, 23-28',
                                                                                                                                                                                                                                'codi_postal' => '8370',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 161,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            302 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 303,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Calonge i Sant Antoni',
                                                                                                                                                                                                                                'carrer' => 'Plaça de la Concòrdia, s/n',
                                                                                                                                                                                                                                'codi_postal' => '17251',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 165,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            303 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 304,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Camarles',
                                                                                                                                                                                                                                'carrer' => 'Carrer Vint, 22',
                                                                                                                                                                                                                                'codi_postal' => '43894',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 167,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            304 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 305,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cambrils',
                                                                                                                                                                                                                                'carrer' => 'Plaça de l\'Ajuntament, 4',
                                                                                                                                                                                                                                'codi_postal' => '43850',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 168,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            305 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 306,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Canet de Mar',
                                                                                                                                                                                                                                'carrer' => 'Carrer de les Drassanes del Pla, 30',
                                                                                                                                                                                                                                'codi_postal' => '8360',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 177,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            306 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 307,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Canovelles',
                                                                                                                                                                                                                                'carrer' => 'Carrer del Pi, 19',
                                                                                                                                                                                                                                'codi_postal' => '8420',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 179,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            307 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 308,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Capellades',
                                                                                                                                                                                                                                'carrer' => 'Passeig Inmaculada Concepció, 23',
                                                                                                                                                                                                                                'codi_postal' => '8786',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 185,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            308 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 309,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cardedeu',
                                                                                                                                                                                                                                'carrer' => 'Avinguda d\'Àngel Guimerà, 126',
                                                                                                                                                                                                                                'codi_postal' => '8440',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 188,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            309 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 310,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cardona',
                                                                                                                                                                                                                                'carrer' => 'Plaça de la Fira, 1',
                                                                                                                                                                                                                                'codi_postal' => '8261',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 189,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            310 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 311,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cassà de la Selva',
                                                                                                                                                                                                                                'carrer' => 'Rambla de l\'Onze de Setembre, 107',
                                                                                                                                                                                                                                'codi_postal' => '17244',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 192,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            311 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 312,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Castell-Platja d\'Aro',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de s\' Agaró, 161',
                                                                                                                                                                                                                                'codi_postal' => '17250',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 215,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            312 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 313,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Castellar del Vallès',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Sant Llorenç, 7',
                                                                                                                                                                                                                                'codi_postal' => '8211',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 199,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            313 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 314,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Castellbisbal',
                                                                                                                                                                                                                                'carrer' => 'Avinguda Antoni Gaudi, 9',
                                                                                                                                                                                                                                'codi_postal' => '8755',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 201,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            314 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 315,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Castelldefels',
                                                                                                                                                                                                                                'carrer' => 'Plaça de l\'Esperanto, 4',
                                                                                                                                                                                                                                'codi_postal' => '8860',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 204,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            315 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 316,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Castelló d\'Empúries',
                                                                                                                                                                                                                                'carrer' => 'Puigmal, 1',
                                                                                                                                                                                                                                'codi_postal' => '17487',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 213,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            316 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 317,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cerdanyola del Vallès',
                                                                                                                                                                                                                                'carrer' => 'Plaça de Sant Medir, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8290',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 227,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            317 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 318,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cervelló',
                                                                                                                                                                                                                                'carrer' => 'Carrer Vidriers, 5',
                                                                                                                                                                                                                                'codi_postal' => '8758',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 228,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            318 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 319,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cervera',
                                                                                                                                                                                                                            'carrer' => 'Plaça Major, 1 (Edifici de la Paeria)',
                                                                                                                                                                                                                                'codi_postal' => '25200',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 229,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            319 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 320,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Constantí',
                                                                                                                                                                                                                                'carrer' => 'Carrer Major, 27',
                                                                                                                                                                                                                                'codi_postal' => '43120',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 245,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            320 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 321,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Corbera de Llobregat',
                                                                                                                                                                                                                                'carrer' => 'Carrer Pau, 3',
                                                                                                                                                                                                                                'codi_postal' => '8757',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 247,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            321 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 322,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cornellà de Llobregat',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Rubió i Ors, 65',
                                                                                                                                                                                                                                'codi_postal' => '8940',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 251,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            322 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 323,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Creixell',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Girona, 26',
                                                                                                                                                                                                                                'codi_postal' => '43839',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 254,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            323 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 324,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cubelles',
                                                                                                                                                                                                                                'carrer' => 'Carrer d\'Arles de Tec, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8880',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 257,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            324 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 325,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Cunit',
                                                                                                                                                                                                                                'carrer' => 'Carrer Conca de Barbera, 10',
                                                                                                                                                                                                                                'codi_postal' => '43881',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 259,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            325 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 326,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Deltebre',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de Catalunya, 9',
                                                                                                                                                                                                                                'codi_postal' => '43580',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 262,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            326 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 327,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Dosrius',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Sant Antoni, 1',
                                                                                                                                                                                                                                'codi_postal' => '8319',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 263,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            327 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 328,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Figueres',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de Salvador Dalí Domènech, 107',
                                                                                                                                                                                                                                'codi_postal' => '17600',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 290,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            328 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 329,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Gelida',
                                                                                                                                                                                                                                'carrer' => 'Carrer de la Barceloneta, 12-18',
                                                                                                                                                                                                                                'codi_postal' => '8790',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 326,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            329 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 330,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Granollers',
                                                                                                                                                                                                                                'carrer' => 'Carrer de la Princesa, 55',
                                                                                                                                                                                                                                'codi_postal' => '8401',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 341,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            330 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 331,
                                                                                                                                                                                                                                'nom' => 'Policia Local de l\'Ametlla de Mar',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Sant Joan, 55',
                                                                                                                                                                                                                                'codi_postal' => '43860',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 49,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            331 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 332,
                                                                                                                                                                                                                                'nom' => 'Policia Local de l\'Ametlla del Vallès',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Barcelona, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8480',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 50,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            332 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 333,
                                                                                                                                                                                                                                'nom' => 'Policia Local de l\'Arboç',
                                                                                                                                                                                                                                'carrer' => 'Avinguda dels Herois de 1808, 72',
                                                                                                                                                                                                                                'codi_postal' => '43720',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 56,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            333 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 334,
                                                                                                                                                                                                                                'nom' => 'Policia Local de l\'Escala',
                                                                                                                                                                                                                                'carrer' => 'Carrer del Garbí, s/n',
                                                                                                                                                                                                                                'codi_postal' => '17130',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 265,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            334 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 335,
                                                                                                                                                                                                                                'nom' => 'Policia Local de la Bisbal d\'Empordà',
                                                                                                                                                                                                                                'carrer' => 'Carrer Peixateries, 1',
                                                                                                                                                                                                                                'codi_postal' => '17100',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 122,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            335 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 336,
                                                                                                                                                                                                                                'nom' => 'Policia Local de la Garriga',
                                                                                                                                                                                                                                'carrer' => 'Plaça de l\'Església, 2',
                                                                                                                                                                                                                                'codi_postal' => '8530',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 320,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            336 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 337,
                                                                                                                                                                                                                                'nom' => 'Policia Local de la Jonquera',
                                                                                                                                                                                                                                'carrer' => 'Plaça de l\'Ajuntament, 3',
                                                                                                                                                                                                                                'codi_postal' => '17700',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 367,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            337 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 338,
                                                                                                                                                                                                                                'nom' => 'Policia Local de la Llagosta',
                                                                                                                                                                                                                                'carrer' => 'Passeig del Pintor Sert, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8120',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 379,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            338 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 339,
                                                                                                                                                                                                                                'nom' => 'Policia Local de la Palma de Cervelló',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Sant Cristòfol, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8756',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 523,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            339 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 340,
                                                                                                                                                                                                                                'nom' => 'Policia Local de la Roca del Vallès',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Catalunya, 24',
                                                                                                                                                                                                                                'codi_postal' => '8430',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 630,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            340 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 341,
                                                                                                                                                                                                                                'nom' => 'Policia Local de la Sénia',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de la Generalitat, 2',
                                                                                                                                                                                                                                'codi_postal' => '43560',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 774,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            341 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 342,
                                                                                                                                                                                                                                'nom' => 'Policia Local de la Seu d\'Urgell',
                                                                                                                                                                                                                                'carrer' => 'Plaça dels Oms, 1',
                                                                                                                                                                                                                                'codi_postal' => '25700',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 782,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            342 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 343,
                                                                                                                                                                                                                                'nom' => 'Policia Local de les Borges Blanques',
                                                                                                                                                                                                                                'carrer' => 'Carrer del Carme, 21',
                                                                                                                                                                                                                                'codi_postal' => '25400',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 131,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            343 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 344,
                                                                                                                                                                                                                                'nom' => 'Policia Local de les Franqueses del Vallès',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Rafael Alberti, 2',
                                                                                                                                                                                                                                'codi_postal' => '8520',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 310,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            344 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 345,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Llagostera',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Tossa, 3',
                                                                                                                                                                                                                                'codi_postal' => '17240',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 380,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            345 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 346,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Llançà',
                                                                                                                                                                                                                                'carrer' => 'Carrer de la Selva, 17',
                                                                                                                                                                                                                                'codi_postal' => '17490',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 383,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            346 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 347,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Lliçà d\'Amunt',
                                                                                                                                                                                                                                'carrer' => 'Carrer de Rafel Casanova, 8',
                                                                                                                                                                                                                                'codi_postal' => '8186',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 389,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            347 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 348,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Lliçà de Vall',
                                                                                                                                                                                                                                'carrer' => 'Plaça de la Vila, s/n',
                                                                                                                                                                                                                                'codi_postal' => '8185',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 390,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            348 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 349,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Llinars del Vallès',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de Pau Casals, 64',
                                                                                                                                                                                                                                'codi_postal' => '8450',
                                                                                                                                                                                                                                'correu' => NULL,
                                                                                                                                                                                                                                'municipis_id' => 392,
                                                                                                                                                                                                                            ),
                                                                                                                                                                                                                            349 => 
                                                                                                                                                                                                                            array (
                                                                                                                                                                                                                                'id' => 350,
                                                                                                                                                                                                                                'nom' => 'Policia Local de Lloret de Mar',
                                                                                                                                                                                                                                'carrer' => 'Avinguda de les Alegries, 32 (Policia Local -',
                                                                                                                                                                                                                                    'codi_postal' => '17310',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 398,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                350 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 351,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Malgrat de Mar',
                                                                                                                                                                                                                                    'carrer' => 'Carrer d\'Alexander Fleming, 31',
                                                                                                                                                                                                                                    'codi_postal' => '8380',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 407,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                351 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 352,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Manlleu',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de Fra Bernadí, 5',
                                                                                                                                                                                                                                    'codi_postal' => '8560',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 409,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                352 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 353,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Manresa',
                                                                                                                                                                                                                                    'carrer' => 'Carrer del Bruc, 33-35',
                                                                                                                                                                                                                                    'codi_postal' => '8241',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 410,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                353 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 354,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Martorell',
                                                                                                                                                                                                                                    'carrer' => 'Avinguda de Joaquim de Barnola i de Bassols, ',
                                                                                                                                                                                                                                    'codi_postal' => '8760',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 414,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                354 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 355,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Martorelles',
                                                                                                                                                                                                                                    'carrer' => 'Avinguda de Piera, 51',
                                                                                                                                                                                                                                    'codi_postal' => '8107',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 415,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                355 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 356,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Masquefa',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Sant Antoni, 6',
                                                                                                                                                                                                                                    'codi_postal' => '8783',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 425,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                356 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 357,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Matadepera',
                                                                                                                                                                                                                                    'carrer' => 'Carrer Joan Paloma, 1',
                                                                                                                                                                                                                                    'codi_postal' => '8230',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 430,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                357 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 358,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Mataró',
                                                                                                                                                                                                                                    'carrer' => 'Plaça Granollers, 11',
                                                                                                                                                                                                                                    'codi_postal' => '8303',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 431,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                358 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 359,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Moià',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de les Joies, 32 baixos',
                                                                                                                                                                                                                                    'codi_postal' => '8180',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 439,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                359 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 360,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Mollerussa',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de l\'Ajuntament, 2',
                                                                                                                                                                                                                                    'codi_postal' => '25230',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 442,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                360 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 361,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Mont-roig del Camp',
                                                                                                                                                                                                                                    'carrer' => 'Avinguda de Barcelona, 11 Miami Platja',
                                                                                                                                                                                                                                    'codi_postal' => '43892',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 470,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                361 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 362,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Montblanc',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de la Muralla de Sant Jordi, 35',
                                                                                                                                                                                                                                    'codi_postal' => '43400',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 450,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                362 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 363,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Montcada i Reixac',
                                                                                                                                                                                                                                    'carrer' => 'Avinguda de la Unitat, 6',
                                                                                                                                                                                                                                    'codi_postal' => '8110',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 452,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                363 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 364,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Montgat',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Lola Anglada, 4',
                                                                                                                                                                                                                                    'codi_postal' => '8390',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 459,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                364 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 365,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Montmeló',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                                    'codi_postal' => '8160',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 463,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                365 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 366,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Montornès del Vallès',
                                                                                                                                                                                                                                    'carrer' => 'Avinguda de la Llibertat, 2',
                                                                                                                                                                                                                                    'codi_postal' => '8170',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 467,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                366 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 367,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Navàs',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de l\'Ajuntament, 8',
                                                                                                                                                                                                                                    'codi_postal' => '8670',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 481,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                367 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 368,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Palafolls',
                                                                                                                                                                                                                                    'carrer' => 'Carrer Major, 11',
                                                                                                                                                                                                                                    'codi_postal' => '8389',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 513,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                368 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 369,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Palafrugell',
                                                                                                                                                                                                                                    'carrer' => 'Avinguda de García Lorca, 31',
                                                                                                                                                                                                                                    'codi_postal' => '17200',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 514,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                369 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 370,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Palamós',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Josep Joan, 37',
                                                                                                                                                                                                                                    'codi_postal' => '17230',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 515,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                370 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 371,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Palau-solità i Plegamans',
                                                                                                                                                                                                                                    'carrer' => 'Passeig de la Carrerada, 51',
                                                                                                                                                                                                                                    'codi_postal' => '8184',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 520,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                371 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 372,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Pallejà',
                                                                                                                                                                                                                                    'carrer' => 'Carrer del Sol, 1',
                                                                                                                                                                                                                                    'codi_postal' => '8780',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 522,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                372 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 373,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Pals',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de Catalunya, s/n',
                                                                                                                                                                                                                                    'codi_postal' => '17256',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 526,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                373 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 374,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Parets del Vallès',
                                                                                                                                                                                                                                    'carrer' => 'Avinguda de Lluís Companys, 19',
                                                                                                                                                                                                                                    'codi_postal' => '8150',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 529,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                374 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 375,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Piera',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Folch i Torres, 35',
                                                                                                                                                                                                                                    'codi_postal' => '8784',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 542,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                375 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 376,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Pineda de Mar',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Sant Joan, 63',
                                                                                                                                                                                                                                    'codi_postal' => '8397',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 544,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                376 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 377,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Polinyà',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                                    'codi_postal' => '8213',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 563,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                377 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 378,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Premià de Dalt',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                                    'codi_postal' => '8338',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 588,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                378 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 379,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Premià de Mar',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de l\'Ajuntament, 1',
                                                                                                                                                                                                                                    'codi_postal' => '8330',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 589,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                379 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 380,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Puigcerdà',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Querol, 23',
                                                                                                                                                                                                                                    'codi_postal' => '17520',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 592,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                380 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 381,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Ribes de Freser',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de l\'Ajuntament, 3',
                                                                                                                                                                                                                                    'codi_postal' => '17534',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 616,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                381 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 382,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Ripoll',
                                                                                                                                                                                                                                    'carrer' => 'Passeig d\'Honorat Vilamanyà, 6',
                                                                                                                                                                                                                                    'codi_postal' => '17500',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 620,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                382 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 383,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Ripollet',
                                                                                                                                                                                                                                    'carrer' => 'Carretera de Santiga, 1',
                                                                                                                                                                                                                                    'codi_postal' => '8291',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 621,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                383 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 384,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Roda de Berà',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Joan Carles I, 19',
                                                                                                                                                                                                                                    'codi_postal' => '43883',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 632,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                384 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 385,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Roquetes',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Rebull, 7',
                                                                                                                                                                                                                                    'codi_postal' => '43520',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 635,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                385 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 386,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Roses',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Tarragona, 64',
                                                                                                                                                                                                                                    'codi_postal' => '17480',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 636,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                386 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 387,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Rubí',
                                                                                                                                                                                                                                    'carrer' => 'Carretera de Terrassa, 118',
                                                                                                                                                                                                                                    'codi_postal' => '8191',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 639,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                387 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 388,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Sallent',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de Torres Amat, 29',
                                                                                                                                                                                                                                    'codi_postal' => '8650',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 648,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                388 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 389,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Salou',
                                                                                                                                                                                                                                    'carrer' => 'Carrer del Llobregat, 1',
                                                                                                                                                                                                                                    'codi_postal' => '43840',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 650,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                389 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 390,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Salt',
                                                                                                                                                                                                                                    'carrer' => 'Carrer Pla de Salt, 2',
                                                                                                                                                                                                                                    'codi_postal' => '17190',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 651,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                390 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 391,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Sant Adrià de Besòs',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de Francesc Michelli i Jové, s/n',
                                                                                                                                                                                                                                    'codi_postal' => '8930',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 653,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                391 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 392,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Sant Andreu de la Barca',
                                                                                                                                                                                                                                    'carrer' => 'Plaça de l\'Ajuntament, 1',
                                                                                                                                                                                                                                    'codi_postal' => '8740',
                                                                                                                                                                                                                                    'correu' => NULL,
                                                                                                                                                                                                                                    'municipis_id' => 655,
                                                                                                                                                                                                                                ),
                                                                                                                                                                                                                                392 => 
                                                                                                                                                                                                                                array (
                                                                                                                                                                                                                                    'id' => 393,
                                                                                                                                                                                                                                    'nom' => 'Policia Local de Sant Andreu de Llavaneres',
                                                                                                                                                                                                                                    'carrer' => 'Carrer de la Indústria, 4 (polígon industrial',
                                                                                                                                                                                                                                        'codi_postal' => '8392',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 656,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    393 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 394,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Antoni de Vilamajor',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Nou, 6',
                                                                                                                                                                                                                                        'codi_postal' => '8459',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 659,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    394 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 395,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Boi de Llobregat',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de la Riera del Fonollar, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '8830',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 661,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    395 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 396,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Carles de la Ràpita',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de Carles III, 13',
                                                                                                                                                                                                                                        'codi_postal' => '43540',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 663,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    396 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 397,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Cebrià de Vallalta',
                                                                                                                                                                                                                                        'carrer' => 'Avinguda del Maresme, 19',
                                                                                                                                                                                                                                        'codi_postal' => '8396',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 664,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    397 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 398,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Celoni',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Santa Fe, 52',
                                                                                                                                                                                                                                        'codi_postal' => '8470',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 665,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    398 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 399,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Climent de Llobregat',
                                                                                                                                                                                                                                        'carrer' => 'Travessia de Prat de la Riba, 31',
                                                                                                                                                                                                                                        'codi_postal' => '8849',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 666,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    399 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 400,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Cugat del Vallès',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de Vila, 2',
                                                                                                                                                                                                                                        'codi_postal' => '8172',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 668,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    400 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 401,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Esteve Sesrovires',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Major, 12',
                                                                                                                                                                                                                                        'codi_postal' => '8635',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 672,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    401 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 402,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Feliu de Codines',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Vic, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8182',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 674,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    402 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 403,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Feliu de Guíxols',
                                                                                                                                                                                                                                        'carrer' => 'Carrer d\'El Callao, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '17220',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 675,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    403 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 404,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Feliu de Llobregat',
                                                                                                                                                                                                                                        'carrer' => 'Carrer d\'Eugeni d\'Ors, 3',
                                                                                                                                                                                                                                        'codi_postal' => '8980',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 676,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    404 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 405,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Fost de Campsentelles',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8105',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 680,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    405 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 406,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Fruitós de Bages',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de l\'Ajuntament, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '8272',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 681,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    406 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 407,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Jaume d\'Enveja',
                                                                                                                                                                                                                                        'carrer' => 'Avinguda de Catalunya, 22-30',
                                                                                                                                                                                                                                        'codi_postal' => '43877',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 691,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    407 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 408,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Joan de les Abadesses',
                                                                                                                                                                                                                                        'carrer' => 'Plaça Major, 3',
                                                                                                                                                                                                                                        'codi_postal' => '17860',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 692,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    408 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 409,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Joan de Vilatorrada',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Sant Mateu, 24',
                                                                                                                                                                                                                                        'codi_postal' => '8250',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 694,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    409 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 410,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Joan Despí',
                                                                                                                                                                                                                                        'carrer' => 'Camí del Mig, 9-11',
                                                                                                                                                                                                                                        'codi_postal' => '8970',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 695,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    410 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 411,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Just Desvern',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Can Pedroseta, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '8960',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 702,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    411 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 412,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Pere de Ribes',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8810',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 720,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    412 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 413,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Pol de Mar',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8395',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 726,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    413 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 414,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Quirze del Vallès',
                                                                                                                                                                                                                                        'carrer' => 'Ronda de Santa Julita, 71',
                                                                                                                                                                                                                                        'codi_postal' => '8192',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 729,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    414 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 415,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Sadurní d\'Anoia',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de l\'Ajuntament, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8770',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 732,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    415 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 416,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Vicenç de Castellet',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de l\'Ajuntament, 8',
                                                                                                                                                                                                                                        'codi_postal' => '8295',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 735,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    416 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 417,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Vicenç de Montalt',
                                                                                                                                                                                                                                        'carrer' => 'Avinguda dels Països Catalans, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8394',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 736,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    417 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 418,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sant Vicenç dels Horts',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Nou, 132',
                                                                                                                                                                                                                                        'codi_postal' => '8620',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 738,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    418 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 419,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Coloma de Cervelló',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Pau Casals, 26-34',
                                                                                                                                                                                                                                        'codi_postal' => '8690',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 741,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    419 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 420,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Coloma de Farners',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de l\'Ajuntament, 1',
                                                                                                                                                                                                                                        'codi_postal' => '17430',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 742,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    420 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 421,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Coloma de Gramenet',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Sant Jordi, 40',
                                                                                                                                                                                                                                        'codi_postal' => '8923',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 743,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    421 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 422,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Cristina d\'Aro',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Teulera, 3',
                                                                                                                                                                                                                                        'codi_postal' => '17246',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 745,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    422 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 423,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Eulàlia de Ronçana',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de la Verge del Remei, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '8187',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 748,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    423 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 424,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Margarida de Montbui',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Fàbrica, 2',
                                                                                                                                                                                                                                        'codi_postal' => '8710',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 751,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    424 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 425,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Margarida i els Monjos',
                                                                                                                                                                                                                                        'carrer' => 'Avinguda de Catalunya, 74',
                                                                                                                                                                                                                                        'codi_postal' => '8730',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 752,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    425 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 426,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Maria de Palautordera',
                                                                                                                                                                                                                                        'carrer' => 'Passeig Vitamènia, 81 Torre Sant Josep',
                                                                                                                                                                                                                                        'codi_postal' => '8460',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 757,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    426 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 427,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Perpètua de Mogoda',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de la Vila, 5',
                                                                                                                                                                                                                                        'codi_postal' => '8130',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 761,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    427 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 428,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santa Susanna',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de Catalunya, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '8398',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 762,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    428 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 429,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Santpedor',
                                                                                                                                                                                                                                        'carrer' => 'Plaça Gran, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8251',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 763,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    429 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 430,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sarrià de Ter',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Major de Sarrià, 71-73',
                                                                                                                                                                                                                                        'codi_postal' => '17840',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 765,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    430 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 431,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sentmenat',
                                                                                                                                                                                                                                        'carrer' => 'Passeig Anselm Clavé, 24',
                                                                                                                                                                                                                                        'codi_postal' => '8181',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 777,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    431 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 432,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sils',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de l\'Estació, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '17410',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 785,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    432 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 433,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Sitges',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Samuel Barrachina, s/n cantonada Pg',
                                                                                                                                                                                                                                        'codi_postal' => '8870',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 786,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    433 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 434,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Solsona',
                                                                                                                                                                                                                                        'carrer' => 'Carrer del Castell, 20',
                                                                                                                                                                                                                                        'codi_postal' => '25280',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 791,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    434 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 435,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Súria',
                                                                                                                                                                                                                                        'carrer' => 'Carrer d\'Ernest Solvay, 13',
                                                                                                                                                                                                                                        'codi_postal' => '8260',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 799,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    435 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 436,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Tàrrega',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de la Pau, s/n.',
                                                                                                                                                                                                                                        'codi_postal' => '25300',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 808,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    436 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 437,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Teià',
                                                                                                                                                                                                                                        'carrer' => 'Passeig la Riera, 120',
                                                                                                                                                                                                                                        'codi_postal' => '8329',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 813,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    437 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 438,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Tiana',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8391',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 817,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    438 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 439,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Tona',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de la Font, 8-10',
                                                                                                                                                                                                                                        'codi_postal' => '8551',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 822,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    439 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 440,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Tordera',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de l\'Alcalde Vendrell, 12',
                                                                                                                                                                                                                                        'codi_postal' => '8490',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 824,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    440 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 441,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Torelló',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Ter, 33-35',
                                                                                                                                                                                                                                        'codi_postal' => '8570',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 825,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    441 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 442,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Torredembarra',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de la Riera de Gaià, 20-24',
                                                                                                                                                                                                                                        'codi_postal' => '43830',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 833,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    442 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 443,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Torrelles de Llobregat',
                                                                                                                                                                                                                                        'carrer' => 'Avinguda de Dolça de Provença, 20 nau 1',
                                                                                                                                                                                                                                        'codi_postal' => '8629',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 840,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    443 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 444,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Torroella de Montgrí',
                                                                                                                                                                                                                                        'carrer' => 'Carretera de Torroella de Montgrí a l\'Estarti',
                                                                                                                                                                                                                                        'codi_postal' => '17258',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 845,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    444 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 445,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Tortosa',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de la Immaculada, 16',
                                                                                                                                                                                                                                        'codi_postal' => '43500',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 848,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    445 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 446,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Tossa de Mar',
                                                                                                                                                                                                                                        'carrer' => 'Avinguda del Pelegrí, 14',
                                                                                                                                                                                                                                        'codi_postal' => '17320',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 850,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    446 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 447,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Tremp',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de la Creu, 1',
                                                                                                                                                                                                                                        'codi_postal' => '25620',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 851,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    447 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 448,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vacarisses',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Pau Casals, 17',
                                                                                                                                                                                                                                        'codi_postal' => '8233',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 859,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    448 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 449,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vallirana',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Major, 368-370',
                                                                                                                                                                                                                                        'codi_postal' => '8759',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 873,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    449 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 450,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Valls',
                                                                                                                                                                                                                                        'carrer' => 'Plaça del Blat, 1',
                                                                                                                                                                                                                                        'codi_postal' => '43800',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 877,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    450 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 451,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vandellòs i l\'Hospitalet de ',
                                                                                                                                                                                                                                        'carrer' => 'Plaça d\'Aster, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '43890',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 880,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    451 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 452,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vidreres',
                                                                                                                                                                                                                                        'carrer' => 'Carrer Lloret, 63',
                                                                                                                                                                                                                                        'codi_postal' => '17411',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 890,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    452 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 453,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vila-seca',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Sant Antoni, 19',
                                                                                                                                                                                                                                        'codi_postal' => '43480',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 931,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    453 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 454,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Viladecans',
                                                                                                                                                                                                                                        'carrer' => 'Carretera del Prat, 32',
                                                                                                                                                                                                                                        'codi_postal' => '8840',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 898,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    454 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 455,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Viladecavalls',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de les Orenetes, s/n.',
                                                                                                                                                                                                                                        'codi_postal' => '8232',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 899,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    455 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 456,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vilafranca del Penedès',
                                                                                                                                                                                                                                        'carrer' => 'Carrer del Pati del Gall, 16',
                                                                                                                                                                                                                                        'codi_postal' => '8720',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 903,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    456 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 457,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vilanova del Camí',
                                                                                                                                                                                                                                        'carrer' => 'Plaça del Castell, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8788',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 923,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    457 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 458,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vilanova del Vallès',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de l\'Ajuntament, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8410',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 924,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    458 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 459,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vilanova i la Geltrú',
                                                                                                                                                                                                                                        'carrer' => 'Carrer del Pare Garí, 72',
                                                                                                                                                                                                                                        'codi_postal' => '8800',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 926,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    459 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 460,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vilassar de Dalt',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de la Vila, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8339',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 932,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    460 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 461,
                                                                                                                                                                                                                                        'nom' => 'Policia Local de Vilassar de Mar',
                                                                                                                                                                                                                                        'carrer' => 'Avinguda Progrés, 30',
                                                                                                                                                                                                                                        'codi_postal' => '8340',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 933,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    461 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 462,
                                                                                                                                                                                                                                        'nom' => 'Policia Local del Masnou',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Joan Miró, 150',
                                                                                                                                                                                                                                        'codi_postal' => '8320',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 422,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    462 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 463,
                                                                                                                                                                                                                                        'nom' => 'Policia Local del Papiol',
                                                                                                                                                                                                                                        'carrer' => 'Carrer d\'Aribau, 11',
                                                                                                                                                                                                                                        'codi_postal' => '8754',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 527,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    463 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 464,
                                                                                                                                                                                                                                        'nom' => 'Policia Local del Prat de Llobregat',
                                                                                                                                                                                                                                        'carrer' => 'Carrer del Riu Llobregat, 2-4',
                                                                                                                                                                                                                                        'codi_postal' => '8820',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 581,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    464 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 465,
                                                                                                                                                                                                                                        'nom' => 'Policia Local del Vendrell',
                                                                                                                                                                                                                                        'carrer' => 'Carretera de Calafell, s/n',
                                                                                                                                                                                                                                        'codi_postal' => '43700',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 883,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    465 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 466,
                                                                                                                                                                                                                                        'nom' => 'Policia Municipal de Gavà',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de la Llenya, 2',
                                                                                                                                                                                                                                        'codi_postal' => '8850',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 324,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    466 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 467,
                                                                                                                                                                                                                                        'nom' => 'Policia Municipal de Girona',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Bacià, 4',
                                                                                                                                                                                                                                        'codi_postal' => '17001',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 330,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    467 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 468,
                                                                                                                                                                                                                                        'nom' => 'Policia Municipal de Mollet del Vallès',
                                                                                                                                                                                                                                        'carrer' => 'Plaça de Miquel Martí i Pol, 1',
                                                                                                                                                                                                                                        'codi_postal' => '8100',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 444,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    468 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 469,
                                                                                                                                                                                                                                        'nom' => 'Policia Municipal de Sabadell',
                                                                                                                                                                                                                                        'carrer' => 'Carrer de Pau Claris, 100',
                                                                                                                                                                                                                                        'codi_postal' => '8205',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 643,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                    469 => 
                                                                                                                                                                                                                                    array (
                                                                                                                                                                                                                                        'id' => 470,
                                                                                                                                                                                                                                        'nom' => 'Policia Municipal de Terrassa',
                                                                                                                                                                                                                                        'carrer' => 'Avinguda de les Glòries Catalanes, 3',
                                                                                                                                                                                                                                        'codi_postal' => '8223',
                                                                                                                                                                                                                                        'correu' => NULL,
                                                                                                                                                                                                                                        'municipis_id' => 816,
                                                                                                                                                                                                                                    ),
                                                                                                                                                                                                                                ));
        
        
    }
}