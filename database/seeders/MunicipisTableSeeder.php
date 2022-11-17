<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MunicipisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('municipis')->delete();
        
        \DB::table('municipis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'Abella de la Conca',
                'comarques_id' => 30,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'Abrera',
                'comarques_id' => 12,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'Àger',
                'comarques_id' => 27,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'Agramunt',
                'comarques_id' => 42,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'Aguilar de Segarra',
                'comarques_id' => 8,
            ),
            5 => 
            array (
                'id' => 6,
                'nom' => 'Agullana',
                'comarques_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'nom' => 'Aiguafreda',
                'comarques_id' => 44,
            ),
            7 => 
            array (
                'id' => 8,
                'nom' => 'Aiguamúrcia',
                'comarques_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'nom' => 'Aiguaviva',
                'comarques_id' => 23,
            ),
            9 => 
            array (
                'id' => 10,
                'nom' => 'Aitona',
                'comarques_id' => 37,
            ),
            10 => 
            array (
                'id' => 11,
                'nom' => 'Els Alamús',
                'comarques_id' => 37,
            ),
            11 => 
            array (
                'id' => 12,
                'nom' => 'Alàs i Cerc',
                'comarques_id' => 4,
            ),
            12 => 
            array (
                'id' => 13,
                'nom' => 'L\'Albagés',
                'comarques_id' => 21,
            ),
            13 => 
            array (
                'id' => 14,
                'nom' => 'Albanyà',
                'comarques_id' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'nom' => 'Albatàrrec',
                'comarques_id' => 37,
            ),
            15 => 
            array (
                'id' => 16,
                'nom' => 'Albesa',
                'comarques_id' => 27,
            ),
            16 => 
            array (
                'id' => 17,
                'nom' => 'L\'Albi',
                'comarques_id' => 21,
            ),
            17 => 
            array (
                'id' => 18,
                'nom' => 'Albinyana',
                'comarques_id' => 13,
            ),
            18 => 
            array (
                'id' => 19,
                'nom' => 'L\'Albiol',
                'comarques_id' => 9,
            ),
            19 => 
            array (
                'id' => 20,
                'nom' => 'Albons',
                'comarques_id' => 11,
            ),
            20 => 
            array (
                'id' => 21,
                'nom' => 'Alcanar',
                'comarques_id' => 26,
            ),
            21 => 
            array (
                'id' => 22,
                'nom' => 'Alcanó',
                'comarques_id' => 37,
            ),
            22 => 
            array (
                'id' => 23,
                'nom' => 'Alcarràs',
                'comarques_id' => 37,
            ),
            23 => 
            array (
                'id' => 24,
                'nom' => 'Alcoletge',
                'comarques_id' => 37,
            ),
            24 => 
            array (
                'id' => 25,
                'nom' => 'Alcover',
                'comarques_id' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'nom' => 'L\'Aldea',
                'comarques_id' => 10,
            ),
            26 => 
            array (
                'id' => 27,
                'nom' => 'Aldover',
                'comarques_id' => 10,
            ),
            27 => 
            array (
                'id' => 28,
                'nom' => 'L\'Aleixar',
                'comarques_id' => 9,
            ),
            28 => 
            array (
                'id' => 29,
                'nom' => 'Alella',
                'comarques_id' => 24,
            ),
            29 => 
            array (
                'id' => 30,
                'nom' => 'Alfara de Carles',
                'comarques_id' => 10,
            ),
            30 => 
            array (
                'id' => 31,
                'nom' => 'Alfarràs',
                'comarques_id' => 37,
            ),
            31 => 
            array (
                'id' => 32,
                'nom' => 'Alfés',
                'comarques_id' => 37,
            ),
            32 => 
            array (
                'id' => 33,
                'nom' => 'Alforja',
                'comarques_id' => 9,
            ),
            33 => 
            array (
                'id' => 34,
                'nom' => 'Algerri',
                'comarques_id' => 27,
            ),
            34 => 
            array (
                'id' => 35,
                'nom' => 'Alguaire',
                'comarques_id' => 37,
            ),
            35 => 
            array (
                'id' => 36,
                'nom' => 'Alins',
                'comarques_id' => 45,
            ),
            36 => 
            array (
                'id' => 37,
                'nom' => 'Alió',
                'comarques_id' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'nom' => 'Almacelles',
                'comarques_id' => 37,
            ),
            38 => 
            array (
                'id' => 39,
                'nom' => 'Almatret',
                'comarques_id' => 37,
            ),
            39 => 
            array (
                'id' => 40,
                'nom' => 'Almenar',
                'comarques_id' => 37,
            ),
            40 => 
            array (
                'id' => 41,
                'nom' => 'Almoster',
                'comarques_id' => 9,
            ),
            41 => 
            array (
                'id' => 42,
                'nom' => 'Alòs de Balaguer',
                'comarques_id' => 27,
            ),
            42 => 
            array (
                'id' => 43,
                'nom' => 'Alp',
                'comarques_id' => 17,
            ),
            43 => 
            array (
                'id' => 44,
                'nom' => 'Alpens',
                'comarques_id' => 28,
            ),
            44 => 
            array (
                'id' => 45,
                'nom' => 'Alpicat',
                'comarques_id' => 37,
            ),
            45 => 
            array (
                'id' => 46,
                'nom' => 'Alt Àneu',
                'comarques_id' => 45,
            ),
            46 => 
            array (
                'id' => 47,
                'nom' => 'Altafulla',
                'comarques_id' => 40,
            ),
            47 => 
            array (
                'id' => 48,
                'nom' => 'Amer',
                'comarques_id' => 38,
            ),
            48 => 
            array (
                'id' => 49,
                'nom' => 'L\'Ametlla de Mar',
                'comarques_id' => 10,
            ),
            49 => 
            array (
                'id' => 50,
                'nom' => 'L\'Ametlla del Vallès',
                'comarques_id' => 44,
            ),
            50 => 
            array (
                'id' => 51,
                'nom' => 'L\'Ampolla',
                'comarques_id' => 10,
            ),
            51 => 
            array (
                'id' => 52,
                'nom' => 'Amposta',
                'comarques_id' => 26,
            ),
            52 => 
            array (
                'id' => 53,
                'nom' => 'Anglès',
                'comarques_id' => 38,
            ),
            53 => 
            array (
                'id' => 54,
                'nom' => 'Anglesola',
                'comarques_id' => 42,
            ),
            54 => 
            array (
                'id' => 55,
                'nom' => 'Arbeca',
                'comarques_id' => 21,
            ),
            55 => 
            array (
                'id' => 56,
                'nom' => 'L\'Arboç',
                'comarques_id' => 13,
            ),
            56 => 
            array (
                'id' => 57,
                'nom' => 'Arbolí',
                'comarques_id' => 9,
            ),
            57 => 
            array (
                'id' => 58,
                'nom' => 'Arbúcies',
                'comarques_id' => 38,
            ),
            58 => 
            array (
                'id' => 59,
                'nom' => 'Arenys de Mar',
                'comarques_id' => 24,
            ),
            59 => 
            array (
                'id' => 60,
                'nom' => 'Arenys de Munt',
                'comarques_id' => 24,
            ),
            60 => 
            array (
                'id' => 61,
                'nom' => 'Argelaguer',
                'comarques_id' => 22,
            ),
            61 => 
            array (
                'id' => 62,
                'nom' => 'Argençola',
                'comarques_id' => 6,
            ),
            62 => 
            array (
                'id' => 63,
                'nom' => 'L\'Argentera',
                'comarques_id' => 9,
            ),
            63 => 
            array (
                'id' => 64,
                'nom' => 'Argentona',
                'comarques_id' => 24,
            ),
            64 => 
            array (
                'id' => 65,
                'nom' => 'L\'Armentera',
                'comarques_id' => 2,
            ),
            65 => 
            array (
                'id' => 66,
                'nom' => 'Arnes',
                'comarques_id' => 41,
            ),
            66 => 
            array (
                'id' => 67,
                'nom' => 'Arres',
                'comarques_id' => 7,
            ),
            67 => 
            array (
                'id' => 68,
                'nom' => 'Arsèguel',
                'comarques_id' => 4,
            ),
            68 => 
            array (
                'id' => 69,
                'nom' => 'Artés',
                'comarques_id' => 8,
            ),
            69 => 
            array (
                'id' => 70,
                'nom' => 'Artesa de Lleida',
                'comarques_id' => 37,
            ),
            70 => 
            array (
                'id' => 71,
                'nom' => 'Artesa de Segre',
                'comarques_id' => 27,
            ),
            71 => 
            array (
                'id' => 72,
                'nom' => 'Ascó',
                'comarques_id' => 34,
            ),
            72 => 
            array (
                'id' => 73,
                'nom' => 'Aspa',
                'comarques_id' => 37,
            ),
            73 => 
            array (
                'id' => 74,
                'nom' => 'Les Avellanes i Santa Linya',
                'comarques_id' => 27,
            ),
            74 => 
            array (
                'id' => 75,
                'nom' => 'Avià',
                'comarques_id' => 16,
            ),
            75 => 
            array (
                'id' => 76,
                'nom' => 'Avinyó',
                'comarques_id' => 8,
            ),
            76 => 
            array (
                'id' => 77,
                'nom' => 'Avinyonet de Puigventós',
                'comarques_id' => 2,
            ),
            77 => 
            array (
                'id' => 78,
                'nom' => 'Avinyonet del Penedès',
                'comarques_id' => 3,
            ),
            78 => 
            array (
                'id' => 79,
                'nom' => 'Badalona',
                'comarques_id' => 14,
            ),
            79 => 
            array (
                'id' => 80,
                'nom' => 'Badia del Vallès',
                'comarques_id' => 43,
            ),
            80 => 
            array (
                'id' => 81,
                'nom' => 'Bagà',
                'comarques_id' => 16,
            ),
            81 => 
            array (
                'id' => 82,
                'nom' => 'Baix Pallars',
                'comarques_id' => 45,
            ),
            82 => 
            array (
                'id' => 83,
                'nom' => 'Balaguer',
                'comarques_id' => 27,
            ),
            83 => 
            array (
                'id' => 84,
                'nom' => 'Balenyà',
                'comarques_id' => 28,
            ),
            84 => 
            array (
                'id' => 85,
                'nom' => 'Balsareny',
                'comarques_id' => 8,
            ),
            85 => 
            array (
                'id' => 86,
                'nom' => 'Banyeres del Penedès',
                'comarques_id' => 13,
            ),
            86 => 
            array (
                'id' => 87,
                'nom' => 'Banyoles',
                'comarques_id' => 31,
            ),
            87 => 
            array (
                'id' => 88,
                'nom' => 'Barbens',
                'comarques_id' => 32,
            ),
            88 => 
            array (
                'id' => 89,
                'nom' => 'Barberà de la Conca',
                'comarques_id' => 19,
            ),
            89 => 
            array (
                'id' => 90,
                'nom' => 'Barberà del Vallès',
                'comarques_id' => 43,
            ),
            90 => 
            array (
                'id' => 91,
                'nom' => 'Barcelona',
                'comarques_id' => 14,
            ),
            91 => 
            array (
                'id' => 92,
                'nom' => 'La Baronia de Rialb',
                'comarques_id' => 27,
            ),
            92 => 
            array (
                'id' => 93,
                'nom' => 'Bàscara',
                'comarques_id' => 2,
            ),
            93 => 
            array (
                'id' => 94,
                'nom' => 'Bassella',
                'comarques_id' => 4,
            ),
            94 => 
            array (
                'id' => 95,
                'nom' => 'Batea',
                'comarques_id' => 41,
            ),
            95 => 
            array (
                'id' => 96,
                'nom' => 'Bausen',
                'comarques_id' => 7,
            ),
            96 => 
            array (
                'id' => 97,
                'nom' => 'Begues',
                'comarques_id' => 12,
            ),
            97 => 
            array (
                'id' => 98,
                'nom' => 'Begur',
                'comarques_id' => 11,
            ),
            98 => 
            array (
                'id' => 99,
                'nom' => 'Belianes',
                'comarques_id' => 42,
            ),
            99 => 
            array (
                'id' => 100,
                'nom' => 'Bellaguarda',
                'comarques_id' => 21,
            ),
            100 => 
            array (
                'id' => 101,
                'nom' => 'Bellcaire d\'Empordà',
                'comarques_id' => 11,
            ),
            101 => 
            array (
                'id' => 102,
                'nom' => 'Bellcaire d\'Urgell',
                'comarques_id' => 27,
            ),
            102 => 
            array (
                'id' => 103,
                'nom' => 'Bell-lloc d\'Urgell',
                'comarques_id' => 32,
            ),
            103 => 
            array (
                'id' => 104,
                'nom' => 'Bellmunt del Priorat',
                'comarques_id' => 33,
            ),
            104 => 
            array (
                'id' => 105,
                'nom' => 'Bellmunt d\'Urgell',
                'comarques_id' => 27,
            ),
            105 => 
            array (
                'id' => 106,
                'nom' => 'Bellprat',
                'comarques_id' => 6,
            ),
            106 => 
            array (
                'id' => 107,
                'nom' => 'Bellpuig',
                'comarques_id' => 42,
            ),
            107 => 
            array (
                'id' => 108,
                'nom' => 'Bellvei',
                'comarques_id' => 13,
            ),
            108 => 
            array (
                'id' => 109,
                'nom' => 'Bellver de Cerdanya',
                'comarques_id' => 18,
            ),
            109 => 
            array (
                'id' => 110,
                'nom' => 'Bellvís',
                'comarques_id' => 32,
            ),
            110 => 
            array (
                'id' => 111,
                'nom' => 'Benavent de Segrià',
                'comarques_id' => 37,
            ),
            111 => 
            array (
                'id' => 112,
                'nom' => 'Benifallet',
                'comarques_id' => 10,
            ),
            112 => 
            array (
                'id' => 113,
                'nom' => 'Benissanet',
                'comarques_id' => 34,
            ),
            113 => 
            array (
                'id' => 114,
                'nom' => 'Berga',
                'comarques_id' => 16,
            ),
            114 => 
            array (
                'id' => 115,
                'nom' => 'Besalú',
                'comarques_id' => 22,
            ),
            115 => 
            array (
                'id' => 116,
                'nom' => 'Bescanó',
                'comarques_id' => 23,
            ),
            116 => 
            array (
                'id' => 117,
                'nom' => 'Beuda',
                'comarques_id' => 22,
            ),
            117 => 
            array (
                'id' => 118,
                'nom' => 'Bigues i Riells',
                'comarques_id' => 44,
            ),
            118 => 
            array (
                'id' => 119,
                'nom' => 'Biosca',
                'comarques_id' => 36,
            ),
            119 => 
            array (
                'id' => 120,
                'nom' => 'La Bisbal de Falset',
                'comarques_id' => 33,
            ),
            120 => 
            array (
                'id' => 121,
                'nom' => 'La Bisbal del Penedès',
                'comarques_id' => 13,
            ),
            121 => 
            array (
                'id' => 122,
                'nom' => 'La Bisbal d\'Empordà',
                'comarques_id' => 11,
            ),
            122 => 
            array (
                'id' => 123,
                'nom' => 'Biure',
                'comarques_id' => 2,
            ),
            123 => 
            array (
                'id' => 124,
                'nom' => 'Blancafort',
                'comarques_id' => 19,
            ),
            124 => 
            array (
                'id' => 125,
                'nom' => 'Blanes',
                'comarques_id' => 38,
            ),
            125 => 
            array (
                'id' => 126,
                'nom' => 'Boadella i les Escaules',
                'comarques_id' => 2,
            ),
            126 => 
            array (
                'id' => 127,
                'nom' => 'Bolvir',
                'comarques_id' => 17,
            ),
            127 => 
            array (
                'id' => 128,
                'nom' => 'Bonastre',
                'comarques_id' => 13,
            ),
            128 => 
            array (
                'id' => 129,
                'nom' => 'Es Bòrdes',
                'comarques_id' => 7,
            ),
            129 => 
            array (
                'id' => 130,
                'nom' => 'Bordils',
                'comarques_id' => 23,
            ),
            130 => 
            array (
                'id' => 131,
                'nom' => 'Les Borges Blanques',
                'comarques_id' => 21,
            ),
            131 => 
            array (
                'id' => 132,
                'nom' => 'Les Borges del Camp',
                'comarques_id' => 9,
            ),
            132 => 
            array (
                'id' => 133,
                'nom' => 'Borrassà',
                'comarques_id' => 2,
            ),
            133 => 
            array (
                'id' => 134,
                'nom' => 'Borredà',
                'comarques_id' => 16,
            ),
            134 => 
            array (
                'id' => 135,
                'nom' => 'Bossòst',
                'comarques_id' => 7,
            ),
            135 => 
            array (
                'id' => 136,
                'nom' => 'Bot',
                'comarques_id' => 41,
            ),
            136 => 
            array (
                'id' => 137,
                'nom' => 'Botarell',
                'comarques_id' => 9,
            ),
            137 => 
            array (
                'id' => 138,
                'nom' => 'Bovera',
                'comarques_id' => 21,
            ),
            138 => 
            array (
                'id' => 139,
                'nom' => 'Bràfim',
                'comarques_id' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                'nom' => 'Breda',
                'comarques_id' => 38,
            ),
            140 => 
            array (
                'id' => 141,
                'nom' => 'El Bruc',
                'comarques_id' => 6,
            ),
            141 => 
            array (
                'id' => 142,
                'nom' => 'El Brull',
                'comarques_id' => 28,
            ),
            142 => 
            array (
                'id' => 143,
                'nom' => 'Brunyola i Sant Martí Sapresa',
                'comarques_id' => 38,
            ),
            143 => 
            array (
                'id' => 144,
                'nom' => 'Cabacés',
                'comarques_id' => 33,
            ),
            144 => 
            array (
                'id' => 145,
                'nom' => 'Cabanabona',
                'comarques_id' => 27,
            ),
            145 => 
            array (
                'id' => 146,
                'nom' => 'Cabanelles',
                'comarques_id' => 2,
            ),
            146 => 
            array (
                'id' => 147,
                'nom' => 'Cabanes',
                'comarques_id' => 2,
            ),
            147 => 
            array (
                'id' => 148,
                'nom' => 'Les Cabanyes',
                'comarques_id' => 3,
            ),
            148 => 
            array (
                'id' => 149,
                'nom' => 'Cabó',
                'comarques_id' => 4,
            ),
            149 => 
            array (
                'id' => 150,
                'nom' => 'Cabra del Camp',
                'comarques_id' => 1,
            ),
            150 => 
            array (
                'id' => 151,
                'nom' => 'Cabrera d\'Anoia',
                'comarques_id' => 6,
            ),
            151 => 
            array (
                'id' => 152,
                'nom' => 'Cabrera de Mar',
                'comarques_id' => 24,
            ),
            152 => 
            array (
                'id' => 153,
                'nom' => 'Cabrils',
                'comarques_id' => 24,
            ),
            153 => 
            array (
                'id' => 154,
                'nom' => 'Cadaqués',
                'comarques_id' => 2,
            ),
            154 => 
            array (
                'id' => 155,
                'nom' => 'Calaf',
                'comarques_id' => 6,
            ),
            155 => 
            array (
                'id' => 156,
                'nom' => 'Calafell',
                'comarques_id' => 13,
            ),
            156 => 
            array (
                'id' => 157,
                'nom' => 'Calders',
                'comarques_id' => 25,
            ),
            157 => 
            array (
                'id' => 158,
                'nom' => 'Caldes de Malavella',
                'comarques_id' => 38,
            ),
            158 => 
            array (
                'id' => 159,
                'nom' => 'Caldes de Montbui',
                'comarques_id' => 44,
            ),
            159 => 
            array (
                'id' => 160,
                'nom' => 'Caldes d\'Estrac',
                'comarques_id' => 24,
            ),
            160 => 
            array (
                'id' => 161,
                'nom' => 'Calella',
                'comarques_id' => 24,
            ),
            161 => 
            array (
                'id' => 162,
                'nom' => 'Calldetenes',
                'comarques_id' => 28,
            ),
            162 => 
            array (
                'id' => 163,
                'nom' => 'Callús',
                'comarques_id' => 8,
            ),
            163 => 
            array (
                'id' => 164,
                'nom' => 'Calonge de Segarra',
                'comarques_id' => 6,
            ),
            164 => 
            array (
                'id' => 165,
                'nom' => 'Calonge i Sant Antoni',
                'comarques_id' => 11,
            ),
            165 => 
            array (
                'id' => 166,
                'nom' => 'Camarasa',
                'comarques_id' => 27,
            ),
            166 => 
            array (
                'id' => 167,
                'nom' => 'Camarles',
                'comarques_id' => 10,
            ),
            167 => 
            array (
                'id' => 168,
                'nom' => 'Cambrils',
                'comarques_id' => 9,
            ),
            168 => 
            array (
                'id' => 169,
                'nom' => 'Camós',
                'comarques_id' => 31,
            ),
            169 => 
            array (
                'id' => 170,
                'nom' => 'Campdevànol',
                'comarques_id' => 35,
            ),
            170 => 
            array (
                'id' => 171,
                'nom' => 'Campelles',
                'comarques_id' => 35,
            ),
            171 => 
            array (
                'id' => 172,
                'nom' => 'Campins',
                'comarques_id' => 44,
            ),
            172 => 
            array (
                'id' => 173,
                'nom' => 'Campllong',
                'comarques_id' => 23,
            ),
            173 => 
            array (
                'id' => 174,
                'nom' => 'Camprodon',
                'comarques_id' => 35,
            ),
            174 => 
            array (
                'id' => 175,
                'nom' => 'Canejan',
                'comarques_id' => 7,
            ),
            175 => 
            array (
                'id' => 176,
                'nom' => 'Canet d\'Adri',
                'comarques_id' => 23,
            ),
            176 => 
            array (
                'id' => 177,
                'nom' => 'Canet de Mar',
                'comarques_id' => 24,
            ),
            177 => 
            array (
                'id' => 178,
                'nom' => 'La Canonja',
                'comarques_id' => 40,
            ),
            178 => 
            array (
                'id' => 179,
                'nom' => 'Canovelles',
                'comarques_id' => 44,
            ),
            179 => 
            array (
                'id' => 180,
                'nom' => 'Cànoves i Samalús',
                'comarques_id' => 44,
            ),
            180 => 
            array (
                'id' => 181,
                'nom' => 'Cantallops',
                'comarques_id' => 2,
            ),
            181 => 
            array (
                'id' => 182,
                'nom' => 'Canyelles',
                'comarques_id' => 20,
            ),
            182 => 
            array (
                'id' => 183,
                'nom' => 'Capafonts',
                'comarques_id' => 9,
            ),
            183 => 
            array (
                'id' => 184,
                'nom' => 'Capçanes',
                'comarques_id' => 33,
            ),
            184 => 
            array (
                'id' => 185,
                'nom' => 'Capellades',
                'comarques_id' => 6,
            ),
            185 => 
            array (
                'id' => 186,
                'nom' => 'Capmany',
                'comarques_id' => 2,
            ),
            186 => 
            array (
                'id' => 187,
                'nom' => 'Capolat',
                'comarques_id' => 16,
            ),
            187 => 
            array (
                'id' => 188,
                'nom' => 'Cardedeu',
                'comarques_id' => 44,
            ),
            188 => 
            array (
                'id' => 189,
                'nom' => 'Cardona',
                'comarques_id' => 8,
            ),
            189 => 
            array (
                'id' => 190,
                'nom' => 'Carme',
                'comarques_id' => 6,
            ),
            190 => 
            array (
                'id' => 191,
                'nom' => 'Caseres',
                'comarques_id' => 41,
            ),
            191 => 
            array (
                'id' => 192,
                'nom' => 'Cassà de la Selva',
                'comarques_id' => 23,
            ),
            192 => 
            array (
                'id' => 193,
                'nom' => 'Casserres',
                'comarques_id' => 16,
            ),
            193 => 
            array (
                'id' => 194,
                'nom' => 'Castell de l\'Areny',
                'comarques_id' => 16,
            ),
            194 => 
            array (
                'id' => 195,
                'nom' => 'Castell de Mur',
                'comarques_id' => 30,
            ),
            195 => 
            array (
                'id' => 196,
                'nom' => 'Castellar de la Ribera',
                'comarques_id' => 39,
            ),
            196 => 
            array (
                'id' => 197,
                'nom' => 'Castellar de n\'Hug',
                'comarques_id' => 16,
            ),
            197 => 
            array (
                'id' => 198,
                'nom' => 'Castellar del Riu',
                'comarques_id' => 16,
            ),
            198 => 
            array (
                'id' => 199,
                'nom' => 'Castellar del Vallès',
                'comarques_id' => 43,
            ),
            199 => 
            array (
                'id' => 200,
                'nom' => 'Castellbell i el Vilar',
                'comarques_id' => 8,
            ),
            200 => 
            array (
                'id' => 201,
                'nom' => 'Castellbisbal',
                'comarques_id' => 43,
            ),
            201 => 
            array (
                'id' => 202,
                'nom' => 'Castellcir',
                'comarques_id' => 25,
            ),
            202 => 
            array (
                'id' => 203,
                'nom' => 'Castelldans',
                'comarques_id' => 21,
            ),
            203 => 
            array (
                'id' => 204,
                'nom' => 'Castelldefels',
                'comarques_id' => 12,
            ),
            204 => 
            array (
                'id' => 205,
                'nom' => 'Castellet i la Gornal',
                'comarques_id' => 3,
            ),
            205 => 
            array (
                'id' => 206,
                'nom' => 'Castellfollit de la Roca',
                'comarques_id' => 22,
            ),
            206 => 
            array (
                'id' => 207,
                'nom' => 'Castellfollit de Riubregós',
                'comarques_id' => 6,
            ),
            207 => 
            array (
                'id' => 208,
                'nom' => 'Castellfollit del Boix',
                'comarques_id' => 8,
            ),
            208 => 
            array (
                'id' => 209,
                'nom' => 'Castellgalí',
                'comarques_id' => 8,
            ),
            209 => 
            array (
                'id' => 210,
                'nom' => 'Castellnou de Bages',
                'comarques_id' => 8,
            ),
            210 => 
            array (
                'id' => 211,
                'nom' => 'Castellnou de Seana',
                'comarques_id' => 32,
            ),
            211 => 
            array (
                'id' => 212,
                'nom' => 'Castelló de Farfanya',
                'comarques_id' => 27,
            ),
            212 => 
            array (
                'id' => 213,
                'nom' => 'Castelló d\'Empúries',
                'comarques_id' => 2,
            ),
            213 => 
            array (
                'id' => 214,
                'nom' => 'Castellolí',
                'comarques_id' => 6,
            ),
            214 => 
            array (
                'id' => 215,
                'nom' => 'Castell-Platja d\'Aro',
                'comarques_id' => 11,
            ),
            215 => 
            array (
                'id' => 216,
                'nom' => 'Castellserà',
                'comarques_id' => 42,
            ),
            216 => 
            array (
                'id' => 217,
                'nom' => 'Castellterçol',
                'comarques_id' => 25,
            ),
            217 => 
            array (
                'id' => 218,
                'nom' => 'Castellvell del Camp',
                'comarques_id' => 9,
            ),
            218 => 
            array (
                'id' => 219,
                'nom' => 'Castellví de la Marca',
                'comarques_id' => 3,
            ),
            219 => 
            array (
                'id' => 220,
                'nom' => 'Castellví de Rosanes',
                'comarques_id' => 12,
            ),
            220 => 
            array (
                'id' => 221,
                'nom' => 'El Catllar',
                'comarques_id' => 40,
            ),
            221 => 
            array (
                'id' => 222,
                'nom' => 'Cava',
                'comarques_id' => 4,
            ),
            222 => 
            array (
                'id' => 223,
                'nom' => 'La Cellera de Ter',
                'comarques_id' => 38,
            ),
            223 => 
            array (
                'id' => 224,
                'nom' => 'Celrà',
                'comarques_id' => 23,
            ),
            224 => 
            array (
                'id' => 225,
                'nom' => 'Centelles',
                'comarques_id' => 28,
            ),
            225 => 
            array (
                'id' => 226,
                'nom' => 'Cercs',
                'comarques_id' => 16,
            ),
            226 => 
            array (
                'id' => 227,
                'nom' => 'Cerdanyola del Vallès',
                'comarques_id' => 43,
            ),
            227 => 
            array (
                'id' => 228,
                'nom' => 'Cervelló',
                'comarques_id' => 12,
            ),
            228 => 
            array (
                'id' => 229,
                'nom' => 'Cervera',
                'comarques_id' => 36,
            ),
            229 => 
            array (
                'id' => 230,
                'nom' => 'Cervià de les Garrigues',
                'comarques_id' => 21,
            ),
            230 => 
            array (
                'id' => 231,
                'nom' => 'Cervià de Ter',
                'comarques_id' => 23,
            ),
            231 => 
            array (
                'id' => 232,
                'nom' => 'Cistella',
                'comarques_id' => 2,
            ),
            232 => 
            array (
                'id' => 233,
                'nom' => 'Ciutadilla',
                'comarques_id' => 42,
            ),
            233 => 
            array (
                'id' => 234,
                'nom' => 'Clariana de Cardener',
                'comarques_id' => 39,
            ),
            234 => 
            array (
                'id' => 235,
                'nom' => 'El Cogul',
                'comarques_id' => 21,
            ),
            235 => 
            array (
                'id' => 236,
                'nom' => 'Colera',
                'comarques_id' => 2,
            ),
            236 => 
            array (
                'id' => 237,
                'nom' => 'Coll de Nargó',
                'comarques_id' => 4,
            ),
            237 => 
            array (
                'id' => 238,
                'nom' => 'Collbató',
                'comarques_id' => 12,
            ),
            238 => 
            array (
                'id' => 239,
                'nom' => 'Colldejou',
                'comarques_id' => 9,
            ),
            239 => 
            array (
                'id' => 240,
                'nom' => 'Collsuspina',
                'comarques_id' => 25,
            ),
            240 => 
            array (
                'id' => 241,
                'nom' => 'Colomers',
                'comarques_id' => 11,
            ),
            241 => 
            array (
                'id' => 242,
                'nom' => 'La Coma i la Pedra',
                'comarques_id' => 39,
            ),
            242 => 
            array (
                'id' => 243,
                'nom' => 'Conca de Dalt',
                'comarques_id' => 30,
            ),
            243 => 
            array (
                'id' => 244,
                'nom' => 'Conesa',
                'comarques_id' => 19,
            ),
            244 => 
            array (
                'id' => 245,
                'nom' => 'Constantí',
                'comarques_id' => 40,
            ),
            245 => 
            array (
                'id' => 246,
                'nom' => 'Copons',
                'comarques_id' => 6,
            ),
            246 => 
            array (
                'id' => 247,
                'nom' => 'Corbera de Llobregat',
                'comarques_id' => 12,
            ),
            247 => 
            array (
                'id' => 248,
                'nom' => 'Corbera d\'Ebre',
                'comarques_id' => 41,
            ),
            248 => 
            array (
                'id' => 249,
                'nom' => 'Corbins',
                'comarques_id' => 37,
            ),
            249 => 
            array (
                'id' => 250,
                'nom' => 'Corçà',
                'comarques_id' => 11,
            ),
            250 => 
            array (
                'id' => 251,
                'nom' => 'Cornellà de Llobregat',
                'comarques_id' => 12,
            ),
            251 => 
            array (
                'id' => 252,
                'nom' => 'Cornellà del Terri',
                'comarques_id' => 31,
            ),
            252 => 
            array (
                'id' => 253,
                'nom' => 'Cornudella de Montsant',
                'comarques_id' => 33,
            ),
            253 => 
            array (
                'id' => 254,
                'nom' => 'Creixell',
                'comarques_id' => 40,
            ),
            254 => 
            array (
                'id' => 255,
                'nom' => 'Crespià',
                'comarques_id' => 31,
            ),
            255 => 
            array (
                'id' => 256,
                'nom' => 'Cruïlles, Monells i Sant Sadurní de l\'Heura',
                'comarques_id' => 11,
            ),
            256 => 
            array (
                'id' => 257,
                'nom' => 'Cubelles',
                'comarques_id' => 20,
            ),
            257 => 
            array (
                'id' => 258,
                'nom' => 'Cubells',
                'comarques_id' => 27,
            ),
            258 => 
            array (
                'id' => 259,
                'nom' => 'Cunit',
                'comarques_id' => 13,
            ),
            259 => 
            array (
                'id' => 260,
                'nom' => 'Darnius',
                'comarques_id' => 2,
            ),
            260 => 
            array (
                'id' => 261,
                'nom' => 'Das',
                'comarques_id' => 17,
            ),
            261 => 
            array (
                'id' => 262,
                'nom' => 'Deltebre',
                'comarques_id' => 10,
            ),
            262 => 
            array (
                'id' => 263,
                'nom' => 'Dosrius',
                'comarques_id' => 24,
            ),
            263 => 
            array (
                'id' => 264,
                'nom' => 'Duesaigües',
                'comarques_id' => 9,
            ),
            264 => 
            array (
                'id' => 265,
                'nom' => 'L\'Escala',
                'comarques_id' => 2,
            ),
            265 => 
            array (
                'id' => 266,
                'nom' => 'Esparreguera',
                'comarques_id' => 12,
            ),
            266 => 
            array (
                'id' => 267,
                'nom' => 'Espinelves',
                'comarques_id' => 29,
            ),
            267 => 
            array (
                'id' => 268,
                'nom' => 'L\'Espluga Calba',
                'comarques_id' => 21,
            ),
            268 => 
            array (
                'id' => 269,
                'nom' => 'L\'Espluga de Francolí',
                'comarques_id' => 19,
            ),
            269 => 
            array (
                'id' => 270,
                'nom' => 'Esplugues de Llobregat',
                'comarques_id' => 12,
            ),
            270 => 
            array (
                'id' => 271,
                'nom' => 'Espolla',
                'comarques_id' => 2,
            ),
            271 => 
            array (
                'id' => 272,
                'nom' => 'Esponellà',
                'comarques_id' => 31,
            ),
            272 => 
            array (
                'id' => 273,
                'nom' => 'Espot',
                'comarques_id' => 45,
            ),
            273 => 
            array (
                'id' => 274,
                'nom' => 'L\'Espunyola',
                'comarques_id' => 16,
            ),
            274 => 
            array (
                'id' => 275,
                'nom' => 'L\'Esquirol',
                'comarques_id' => 28,
            ),
            275 => 
            array (
                'id' => 276,
                'nom' => 'Estamariu',
                'comarques_id' => 4,
            ),
            276 => 
            array (
                'id' => 277,
                'nom' => 'L\'Estany',
                'comarques_id' => 25,
            ),
            277 => 
            array (
                'id' => 278,
                'nom' => 'Estaràs',
                'comarques_id' => 36,
            ),
            278 => 
            array (
                'id' => 279,
                'nom' => 'Esterri d\'Àneu',
                'comarques_id' => 45,
            ),
            279 => 
            array (
                'id' => 280,
                'nom' => 'Esterri de Cardós',
                'comarques_id' => 45,
            ),
            280 => 
            array (
                'id' => 281,
                'nom' => 'Falset',
                'comarques_id' => 33,
            ),
            281 => 
            array (
                'id' => 282,
                'nom' => 'El Far d\'Empordà',
                'comarques_id' => 2,
            ),
            282 => 
            array (
                'id' => 283,
                'nom' => 'Farrera',
                'comarques_id' => 45,
            ),
            283 => 
            array (
                'id' => 284,
                'nom' => 'La Fatarella',
                'comarques_id' => 41,
            ),
            284 => 
            array (
                'id' => 285,
                'nom' => 'La Febró',
                'comarques_id' => 9,
            ),
            285 => 
            array (
                'id' => 286,
                'nom' => 'Figaró-Montmany',
                'comarques_id' => 44,
            ),
            286 => 
            array (
                'id' => 287,
                'nom' => 'Fígols',
                'comarques_id' => 16,
            ),
            287 => 
            array (
                'id' => 288,
                'nom' => 'Fígols i Alinyà',
                'comarques_id' => 4,
            ),
            288 => 
            array (
                'id' => 289,
                'nom' => 'La Figuera',
                'comarques_id' => 33,
            ),
            289 => 
            array (
                'id' => 290,
                'nom' => 'Figueres',
                'comarques_id' => 2,
            ),
            290 => 
            array (
                'id' => 291,
                'nom' => 'Figuerola del Camp',
                'comarques_id' => 1,
            ),
            291 => 
            array (
                'id' => 292,
                'nom' => 'Flaçà',
                'comarques_id' => 23,
            ),
            292 => 
            array (
                'id' => 293,
                'nom' => 'Flix',
                'comarques_id' => 34,
            ),
            293 => 
            array (
                'id' => 294,
                'nom' => 'La Floresta',
                'comarques_id' => 21,
            ),
            294 => 
            array (
                'id' => 295,
                'nom' => 'Fogars de la Selva',
                'comarques_id' => 38,
            ),
            295 => 
            array (
                'id' => 296,
                'nom' => 'Fogars de Montclús',
                'comarques_id' => 44,
            ),
            296 => 
            array (
                'id' => 297,
                'nom' => 'Foixà',
                'comarques_id' => 11,
            ),
            297 => 
            array (
                'id' => 298,
                'nom' => 'Folgueroles',
                'comarques_id' => 28,
            ),
            298 => 
            array (
                'id' => 299,
                'nom' => 'Fondarella',
                'comarques_id' => 32,
            ),
            299 => 
            array (
                'id' => 300,
                'nom' => 'Fonollosa',
                'comarques_id' => 8,
            ),
            300 => 
            array (
                'id' => 301,
                'nom' => 'Fontanals de Cerdanya',
                'comarques_id' => 17,
            ),
            301 => 
            array (
                'id' => 302,
                'nom' => 'Fontanilles',
                'comarques_id' => 11,
            ),
            302 => 
            array (
                'id' => 303,
                'nom' => 'Fontcoberta',
                'comarques_id' => 31,
            ),
            303 => 
            array (
                'id' => 304,
                'nom' => 'Font-rubí',
                'comarques_id' => 3,
            ),
            304 => 
            array (
                'id' => 305,
                'nom' => 'Foradada',
                'comarques_id' => 27,
            ),
            305 => 
            array (
                'id' => 306,
                'nom' => 'Forallac',
                'comarques_id' => 11,
            ),
            306 => 
            array (
                'id' => 307,
                'nom' => 'Forès',
                'comarques_id' => 19,
            ),
            307 => 
            array (
                'id' => 308,
                'nom' => 'Fornells de la Selva',
                'comarques_id' => 23,
            ),
            308 => 
            array (
                'id' => 309,
                'nom' => 'Fortià',
                'comarques_id' => 2,
            ),
            309 => 
            array (
                'id' => 310,
                'nom' => 'Les Franqueses del Vallès',
                'comarques_id' => 44,
            ),
            310 => 
            array (
                'id' => 311,
                'nom' => 'Freginals',
                'comarques_id' => 26,
            ),
            311 => 
            array (
                'id' => 312,
                'nom' => 'La Fuliola',
                'comarques_id' => 42,
            ),
            312 => 
            array (
                'id' => 313,
                'nom' => 'Fulleda',
                'comarques_id' => 21,
            ),
            313 => 
            array (
                'id' => 314,
                'nom' => 'Gaià',
                'comarques_id' => 8,
            ),
            314 => 
            array (
                'id' => 315,
                'nom' => 'La Galera',
                'comarques_id' => 26,
            ),
            315 => 
            array (
                'id' => 316,
                'nom' => 'Gallifa',
                'comarques_id' => 43,
            ),
            316 => 
            array (
                'id' => 317,
                'nom' => 'Gandesa',
                'comarques_id' => 41,
            ),
            317 => 
            array (
                'id' => 318,
                'nom' => 'Garcia',
                'comarques_id' => 34,
            ),
            318 => 
            array (
                'id' => 319,
                'nom' => 'Els Garidells',
                'comarques_id' => 1,
            ),
            319 => 
            array (
                'id' => 320,
                'nom' => 'La Garriga',
                'comarques_id' => 44,
            ),
            320 => 
            array (
                'id' => 321,
                'nom' => 'Garrigàs',
                'comarques_id' => 2,
            ),
            321 => 
            array (
                'id' => 322,
                'nom' => 'Garrigoles',
                'comarques_id' => 11,
            ),
            322 => 
            array (
                'id' => 323,
                'nom' => 'Garriguella',
                'comarques_id' => 2,
            ),
            323 => 
            array (
                'id' => 324,
                'nom' => 'Gavà',
                'comarques_id' => 12,
            ),
            324 => 
            array (
                'id' => 325,
                'nom' => 'Gavet de la Conca',
                'comarques_id' => 30,
            ),
            325 => 
            array (
                'id' => 326,
                'nom' => 'Gelida',
                'comarques_id' => 3,
            ),
            326 => 
            array (
                'id' => 327,
                'nom' => 'Ger',
                'comarques_id' => 17,
            ),
            327 => 
            array (
                'id' => 328,
                'nom' => 'Gimenells i el Pla de la Font',
                'comarques_id' => 37,
            ),
            328 => 
            array (
                'id' => 329,
                'nom' => 'Ginestar',
                'comarques_id' => 34,
            ),
            329 => 
            array (
                'id' => 330,
                'nom' => 'Girona',
                'comarques_id' => 23,
            ),
            330 => 
            array (
                'id' => 331,
                'nom' => 'Gironella',
                'comarques_id' => 16,
            ),
            331 => 
            array (
                'id' => 332,
                'nom' => 'Gisclareny',
                'comarques_id' => 16,
            ),
            332 => 
            array (
                'id' => 333,
                'nom' => 'Godall',
                'comarques_id' => 26,
            ),
            333 => 
            array (
                'id' => 334,
                'nom' => 'Golmés',
                'comarques_id' => 32,
            ),
            334 => 
            array (
                'id' => 335,
                'nom' => 'Gombrèn',
                'comarques_id' => 35,
            ),
            335 => 
            array (
                'id' => 336,
                'nom' => 'Gósol',
                'comarques_id' => 16,
            ),
            336 => 
            array (
                'id' => 337,
                'nom' => 'La Granada',
                'comarques_id' => 3,
            ),
            337 => 
            array (
                'id' => 338,
                'nom' => 'La Granadella',
                'comarques_id' => 21,
            ),
            338 => 
            array (
                'id' => 339,
                'nom' => 'Granera',
                'comarques_id' => 25,
            ),
            339 => 
            array (
                'id' => 340,
                'nom' => 'La Granja d\'Escarp',
                'comarques_id' => 37,
            ),
            340 => 
            array (
                'id' => 341,
                'nom' => 'Granollers',
                'comarques_id' => 44,
            ),
            341 => 
            array (
                'id' => 342,
                'nom' => 'Granyanella',
                'comarques_id' => 36,
            ),
            342 => 
            array (
                'id' => 343,
                'nom' => 'Granyena de les Garrigues',
                'comarques_id' => 21,
            ),
            343 => 
            array (
                'id' => 344,
                'nom' => 'Granyena de Segarra',
                'comarques_id' => 36,
            ),
            344 => 
            array (
                'id' => 345,
                'nom' => 'Gratallops',
                'comarques_id' => 33,
            ),
            345 => 
            array (
                'id' => 346,
                'nom' => 'Gualba',
                'comarques_id' => 44,
            ),
            346 => 
            array (
                'id' => 347,
                'nom' => 'Gualta',
                'comarques_id' => 11,
            ),
            347 => 
            array (
                'id' => 348,
                'nom' => 'Guardiola de Berguedà',
                'comarques_id' => 16,
            ),
            348 => 
            array (
                'id' => 349,
                'nom' => 'Els Guiamets',
                'comarques_id' => 33,
            ),
            349 => 
            array (
                'id' => 350,
                'nom' => 'Guils de Cerdanya',
                'comarques_id' => 17,
            ),
            350 => 
            array (
                'id' => 351,
                'nom' => 'Guimerà',
                'comarques_id' => 42,
            ),
            351 => 
            array (
                'id' => 352,
                'nom' => 'La Guingueta d\'Àneu',
                'comarques_id' => 45,
            ),
            352 => 
            array (
                'id' => 353,
                'nom' => 'Guissona',
                'comarques_id' => 36,
            ),
            353 => 
            array (
                'id' => 354,
                'nom' => 'Guixers',
                'comarques_id' => 39,
            ),
            354 => 
            array (
                'id' => 355,
                'nom' => 'Gurb',
                'comarques_id' => 28,
            ),
            355 => 
            array (
                'id' => 356,
                'nom' => 'Horta de Sant Joan',
                'comarques_id' => 41,
            ),
            356 => 
            array (
                'id' => 357,
                'nom' => 'L\'Hospitalet de Llobregat',
                'comarques_id' => 14,
            ),
            357 => 
            array (
                'id' => 358,
                'nom' => 'Els Hostalets de Pierola',
                'comarques_id' => 6,
            ),
            358 => 
            array (
                'id' => 359,
                'nom' => 'Hostalric',
                'comarques_id' => 38,
            ),
            359 => 
            array (
                'id' => 360,
                'nom' => 'Igualada',
                'comarques_id' => 6,
            ),
            360 => 
            array (
                'id' => 361,
                'nom' => 'Isona i Conca Dellà',
                'comarques_id' => 30,
            ),
            361 => 
            array (
                'id' => 362,
                'nom' => 'Isòvol',
                'comarques_id' => 17,
            ),
            362 => 
            array (
                'id' => 363,
                'nom' => 'Ivars de Noguera',
                'comarques_id' => 27,
            ),
            363 => 
            array (
                'id' => 364,
                'nom' => 'Ivars d\'Urgell',
                'comarques_id' => 32,
            ),
            364 => 
            array (
                'id' => 365,
                'nom' => 'Ivorra',
                'comarques_id' => 36,
            ),
            365 => 
            array (
                'id' => 366,
                'nom' => 'Jafre',
                'comarques_id' => 11,
            ),
            366 => 
            array (
                'id' => 367,
                'nom' => 'La Jonquera',
                'comarques_id' => 2,
            ),
            367 => 
            array (
                'id' => 368,
                'nom' => 'Jorba',
                'comarques_id' => 6,
            ),
            368 => 
            array (
                'id' => 369,
                'nom' => 'Josa i Tuixén',
                'comarques_id' => 4,
            ),
            369 => 
            array (
                'id' => 370,
                'nom' => 'Juià',
                'comarques_id' => 23,
            ),
            370 => 
            array (
                'id' => 371,
                'nom' => 'Juncosa',
                'comarques_id' => 21,
            ),
            371 => 
            array (
                'id' => 372,
                'nom' => 'Juneda',
                'comarques_id' => 21,
            ),
            372 => 
            array (
                'id' => 373,
                'nom' => 'Les',
                'comarques_id' => 7,
            ),
            373 => 
            array (
                'id' => 374,
                'nom' => 'Linyola',
                'comarques_id' => 32,
            ),
            374 => 
            array (
                'id' => 375,
                'nom' => 'La Llacuna',
                'comarques_id' => 6,
            ),
            375 => 
            array (
                'id' => 376,
                'nom' => 'Lladó',
                'comarques_id' => 2,
            ),
            376 => 
            array (
                'id' => 377,
                'nom' => 'Lladorre',
                'comarques_id' => 45,
            ),
            377 => 
            array (
                'id' => 378,
                'nom' => 'Lladurs',
                'comarques_id' => 39,
            ),
            378 => 
            array (
                'id' => 379,
                'nom' => 'La Llagosta',
                'comarques_id' => 44,
            ),
            379 => 
            array (
                'id' => 380,
                'nom' => 'Llagostera',
                'comarques_id' => 23,
            ),
            380 => 
            array (
                'id' => 381,
                'nom' => 'Llambilles',
                'comarques_id' => 23,
            ),
            381 => 
            array (
                'id' => 382,
                'nom' => 'Llanars',
                'comarques_id' => 35,
            ),
            382 => 
            array (
                'id' => 383,
                'nom' => 'Llançà',
                'comarques_id' => 2,
            ),
            383 => 
            array (
                'id' => 384,
                'nom' => 'Llardecans',
                'comarques_id' => 37,
            ),
            384 => 
            array (
                'id' => 385,
                'nom' => 'Llavorsí',
                'comarques_id' => 45,
            ),
            385 => 
            array (
                'id' => 386,
                'nom' => 'Lleida',
                'comarques_id' => 37,
            ),
            386 => 
            array (
                'id' => 387,
                'nom' => 'Llers',
                'comarques_id' => 2,
            ),
            387 => 
            array (
                'id' => 388,
                'nom' => 'Lles de Cerdanya',
                'comarques_id' => 18,
            ),
            388 => 
            array (
                'id' => 389,
                'nom' => 'Lliçà d\'Amunt',
                'comarques_id' => 44,
            ),
            389 => 
            array (
                'id' => 390,
                'nom' => 'Lliçà de Vall',
                'comarques_id' => 44,
            ),
            390 => 
            array (
                'id' => 391,
                'nom' => 'Llimiana',
                'comarques_id' => 30,
            ),
            391 => 
            array (
                'id' => 392,
                'nom' => 'Llinars del Vallès',
                'comarques_id' => 44,
            ),
            392 => 
            array (
                'id' => 393,
                'nom' => 'Llívia',
                'comarques_id' => 17,
            ),
            393 => 
            array (
                'id' => 394,
                'nom' => 'El Lloar',
                'comarques_id' => 33,
            ),
            394 => 
            array (
                'id' => 395,
                'nom' => 'Llobera',
                'comarques_id' => 39,
            ),
            395 => 
            array (
                'id' => 396,
                'nom' => 'Llorac',
                'comarques_id' => 19,
            ),
            396 => 
            array (
                'id' => 397,
                'nom' => 'Llorenç del Penedès',
                'comarques_id' => 13,
            ),
            397 => 
            array (
                'id' => 398,
                'nom' => 'Lloret de Mar',
                'comarques_id' => 38,
            ),
            398 => 
            array (
                'id' => 399,
                'nom' => 'Les Llosses',
                'comarques_id' => 35,
            ),
            399 => 
            array (
                'id' => 400,
                'nom' => 'Lluçà',
                'comarques_id' => 28,
            ),
            400 => 
            array (
                'id' => 401,
                'nom' => 'Maçanet de Cabrenys',
                'comarques_id' => 2,
            ),
            401 => 
            array (
                'id' => 402,
                'nom' => 'Maçanet de la Selva',
                'comarques_id' => 38,
            ),
            402 => 
            array (
                'id' => 403,
                'nom' => 'Madremanya',
                'comarques_id' => 23,
            ),
            403 => 
            array (
                'id' => 404,
                'nom' => 'Maià de Montcal',
                'comarques_id' => 22,
            ),
            404 => 
            array (
                'id' => 405,
                'nom' => 'Maials',
                'comarques_id' => 37,
            ),
            405 => 
            array (
                'id' => 406,
                'nom' => 'Maldà',
                'comarques_id' => 42,
            ),
            406 => 
            array (
                'id' => 407,
                'nom' => 'Malgrat de Mar',
                'comarques_id' => 24,
            ),
            407 => 
            array (
                'id' => 408,
                'nom' => 'Malla',
                'comarques_id' => 28,
            ),
            408 => 
            array (
                'id' => 409,
                'nom' => 'Manlleu',
                'comarques_id' => 28,
            ),
            409 => 
            array (
                'id' => 410,
                'nom' => 'Manresa',
                'comarques_id' => 8,
            ),
            410 => 
            array (
                'id' => 411,
                'nom' => 'Marçà',
                'comarques_id' => 33,
            ),
            411 => 
            array (
                'id' => 412,
                'nom' => 'Margalef',
                'comarques_id' => 33,
            ),
            412 => 
            array (
                'id' => 413,
                'nom' => 'Marganell',
                'comarques_id' => 8,
            ),
            413 => 
            array (
                'id' => 414,
                'nom' => 'Martorell',
                'comarques_id' => 12,
            ),
            414 => 
            array (
                'id' => 415,
                'nom' => 'Martorelles',
                'comarques_id' => 44,
            ),
            415 => 
            array (
                'id' => 416,
                'nom' => 'Mas de Barberans',
                'comarques_id' => 26,
            ),
            416 => 
            array (
                'id' => 417,
                'nom' => 'Masarac',
                'comarques_id' => 2,
            ),
            417 => 
            array (
                'id' => 418,
                'nom' => 'Masdenverge',
                'comarques_id' => 26,
            ),
            418 => 
            array (
                'id' => 419,
                'nom' => 'Les Masies de Roda',
                'comarques_id' => 28,
            ),
            419 => 
            array (
                'id' => 420,
                'nom' => 'Les Masies de Voltregà',
                'comarques_id' => 28,
            ),
            420 => 
            array (
                'id' => 421,
                'nom' => 'Masllorenç',
                'comarques_id' => 13,
            ),
            421 => 
            array (
                'id' => 422,
                'nom' => 'El Masnou',
                'comarques_id' => 24,
            ),
            422 => 
            array (
                'id' => 423,
                'nom' => 'La Masó',
                'comarques_id' => 1,
            ),
            423 => 
            array (
                'id' => 424,
                'nom' => 'Maspujols',
                'comarques_id' => 9,
            ),
            424 => 
            array (
                'id' => 425,
                'nom' => 'Masquefa',
                'comarques_id' => 6,
            ),
            425 => 
            array (
                'id' => 426,
                'nom' => 'El Masroig',
                'comarques_id' => 33,
            ),
            426 => 
            array (
                'id' => 427,
                'nom' => 'Massalcoreig',
                'comarques_id' => 37,
            ),
            427 => 
            array (
                'id' => 428,
                'nom' => 'Massanes',
                'comarques_id' => 38,
            ),
            428 => 
            array (
                'id' => 429,
                'nom' => 'Massoteres',
                'comarques_id' => 36,
            ),
            429 => 
            array (
                'id' => 430,
                'nom' => 'Matadepera',
                'comarques_id' => 43,
            ),
            430 => 
            array (
                'id' => 431,
                'nom' => 'Mataró',
                'comarques_id' => 24,
            ),
            431 => 
            array (
                'id' => 432,
                'nom' => 'Mediona',
                'comarques_id' => 3,
            ),
            432 => 
            array (
                'id' => 433,
                'nom' => 'Menàrguens',
                'comarques_id' => 27,
            ),
            433 => 
            array (
                'id' => 434,
                'nom' => 'Meranges',
                'comarques_id' => 17,
            ),
            434 => 
            array (
                'id' => 435,
                'nom' => 'Mieres',
                'comarques_id' => 22,
            ),
            435 => 
            array (
                'id' => 436,
                'nom' => 'El Milà',
                'comarques_id' => 1,
            ),
            436 => 
            array (
                'id' => 437,
                'nom' => 'Miralcamp',
                'comarques_id' => 32,
            ),
            437 => 
            array (
                'id' => 438,
                'nom' => 'Miravet',
                'comarques_id' => 34,
            ),
            438 => 
            array (
                'id' => 439,
                'nom' => 'Moià',
                'comarques_id' => 25,
            ),
            439 => 
            array (
                'id' => 440,
                'nom' => 'El Molar',
                'comarques_id' => 33,
            ),
            440 => 
            array (
                'id' => 441,
                'nom' => 'Molins de Rei',
                'comarques_id' => 12,
            ),
            441 => 
            array (
                'id' => 442,
                'nom' => 'Mollerussa',
                'comarques_id' => 32,
            ),
            442 => 
            array (
                'id' => 443,
                'nom' => 'Mollet de Peralada',
                'comarques_id' => 2,
            ),
            443 => 
            array (
                'id' => 444,
                'nom' => 'Mollet del Vallès',
                'comarques_id' => 44,
            ),
            444 => 
            array (
                'id' => 445,
                'nom' => 'Molló',
                'comarques_id' => 35,
            ),
            445 => 
            array (
                'id' => 446,
                'nom' => 'La Molsosa',
                'comarques_id' => 39,
            ),
            446 => 
            array (
                'id' => 447,
                'nom' => 'Monistrol de Calders',
                'comarques_id' => 25,
            ),
            447 => 
            array (
                'id' => 448,
                'nom' => 'Monistrol de Montserrat',
                'comarques_id' => 8,
            ),
            448 => 
            array (
                'id' => 449,
                'nom' => 'Montagut i Oix',
                'comarques_id' => 22,
            ),
            449 => 
            array (
                'id' => 450,
                'nom' => 'Montblanc',
                'comarques_id' => 19,
            ),
            450 => 
            array (
                'id' => 451,
                'nom' => 'Montbrió del Camp',
                'comarques_id' => 9,
            ),
            451 => 
            array (
                'id' => 452,
                'nom' => 'Montcada i Reixac',
                'comarques_id' => 43,
            ),
            452 => 
            array (
                'id' => 453,
                'nom' => 'Montclar',
                'comarques_id' => 16,
            ),
            453 => 
            array (
                'id' => 454,
                'nom' => 'Montellà i Martinet',
                'comarques_id' => 18,
            ),
            454 => 
            array (
                'id' => 455,
                'nom' => 'Montesquiu',
                'comarques_id' => 28,
            ),
            455 => 
            array (
                'id' => 456,
                'nom' => 'Montferrer i Castellbò',
                'comarques_id' => 4,
            ),
            456 => 
            array (
                'id' => 457,
                'nom' => 'Montferri',
                'comarques_id' => 1,
            ),
            457 => 
            array (
                'id' => 458,
                'nom' => 'Montgai',
                'comarques_id' => 27,
            ),
            458 => 
            array (
                'id' => 459,
                'nom' => 'Montgat',
                'comarques_id' => 24,
            ),
            459 => 
            array (
                'id' => 460,
                'nom' => 'Montmajor',
                'comarques_id' => 16,
            ),
            460 => 
            array (
                'id' => 461,
                'nom' => 'Montmaneu',
                'comarques_id' => 6,
            ),
            461 => 
            array (
                'id' => 462,
                'nom' => 'El Montmell',
                'comarques_id' => 13,
            ),
            462 => 
            array (
                'id' => 463,
                'nom' => 'Montmeló',
                'comarques_id' => 44,
            ),
            463 => 
            array (
                'id' => 464,
                'nom' => 'Montoliu de Lleida',
                'comarques_id' => 37,
            ),
            464 => 
            array (
                'id' => 465,
                'nom' => 'Montoliu de Segarra',
                'comarques_id' => 36,
            ),
            465 => 
            array (
                'id' => 466,
                'nom' => 'Montornès de Segarra',
                'comarques_id' => 36,
            ),
            466 => 
            array (
                'id' => 467,
                'nom' => 'Montornès del Vallès',
                'comarques_id' => 44,
            ),
            467 => 
            array (
                'id' => 468,
                'nom' => 'Mont-ral',
                'comarques_id' => 1,
            ),
            468 => 
            array (
                'id' => 469,
                'nom' => 'Mont-ras',
                'comarques_id' => 11,
            ),
            469 => 
            array (
                'id' => 470,
                'nom' => 'Mont-roig del Camp',
                'comarques_id' => 9,
            ),
            470 => 
            array (
                'id' => 471,
                'nom' => 'Montseny',
                'comarques_id' => 44,
            ),
            471 => 
            array (
                'id' => 472,
                'nom' => 'Móra d\'Ebre',
                'comarques_id' => 34,
            ),
            472 => 
            array (
                'id' => 473,
                'nom' => 'Móra la Nova',
                'comarques_id' => 34,
            ),
            473 => 
            array (
                'id' => 474,
                'nom' => 'El Morell',
                'comarques_id' => 40,
            ),
            474 => 
            array (
                'id' => 475,
                'nom' => 'La Morera de Montsant',
                'comarques_id' => 33,
            ),
            475 => 
            array (
                'id' => 476,
                'nom' => 'Muntanyola',
                'comarques_id' => 28,
            ),
            476 => 
            array (
                'id' => 477,
                'nom' => 'Mura',
                'comarques_id' => 8,
            ),
            477 => 
            array (
                'id' => 478,
                'nom' => 'Nalec',
                'comarques_id' => 42,
            ),
            478 => 
            array (
                'id' => 479,
                'nom' => 'Naut Aran',
                'comarques_id' => 7,
            ),
            479 => 
            array (
                'id' => 480,
                'nom' => 'Navarcles',
                'comarques_id' => 8,
            ),
            480 => 
            array (
                'id' => 481,
                'nom' => 'Navàs',
                'comarques_id' => 8,
            ),
            481 => 
            array (
                'id' => 482,
                'nom' => 'Navata',
                'comarques_id' => 2,
            ),
            482 => 
            array (
                'id' => 483,
                'nom' => 'Navès',
                'comarques_id' => 39,
            ),
            483 => 
            array (
                'id' => 484,
                'nom' => 'La Nou de Berguedà',
                'comarques_id' => 16,
            ),
            484 => 
            array (
                'id' => 485,
                'nom' => 'La Nou de Gaià',
                'comarques_id' => 40,
            ),
            485 => 
            array (
                'id' => 486,
                'nom' => 'Nulles',
                'comarques_id' => 1,
            ),
            486 => 
            array (
                'id' => 487,
                'nom' => 'Odèn',
                'comarques_id' => 39,
            ),
            487 => 
            array (
                'id' => 488,
                'nom' => 'Òdena',
                'comarques_id' => 6,
            ),
            488 => 
            array (
                'id' => 489,
                'nom' => 'Ogassa',
                'comarques_id' => 35,
            ),
            489 => 
            array (
                'id' => 490,
                'nom' => 'Olèrdola',
                'comarques_id' => 3,
            ),
            490 => 
            array (
                'id' => 491,
                'nom' => 'Olesa de Bonesvalls',
                'comarques_id' => 3,
            ),
            491 => 
            array (
                'id' => 492,
                'nom' => 'Olesa de Montserrat',
                'comarques_id' => 12,
            ),
            492 => 
            array (
                'id' => 493,
                'nom' => 'Oliana',
                'comarques_id' => 4,
            ),
            493 => 
            array (
                'id' => 494,
                'nom' => 'Oliola',
                'comarques_id' => 27,
            ),
            494 => 
            array (
                'id' => 495,
                'nom' => 'Olius',
                'comarques_id' => 39,
            ),
            495 => 
            array (
                'id' => 496,
                'nom' => 'Olivella',
                'comarques_id' => 20,
            ),
            496 => 
            array (
                'id' => 497,
                'nom' => 'Olost',
                'comarques_id' => 28,
            ),
            497 => 
            array (
                'id' => 498,
                'nom' => 'Olot',
                'comarques_id' => 22,
            ),
            498 => 
            array (
                'id' => 499,
                'nom' => 'Les Oluges',
                'comarques_id' => 36,
            ),
            499 => 
            array (
                'id' => 500,
                'nom' => 'Olvan',
                'comarques_id' => 16,
            ),
        ));
        \DB::table('municipis')->insert(array (
            0 => 
            array (
                'id' => 501,
                'nom' => 'Els Omellons',
                'comarques_id' => 21,
            ),
            1 => 
            array (
                'id' => 502,
                'nom' => 'Els Omells de na Gaia',
                'comarques_id' => 42,
            ),
            2 => 
            array (
                'id' => 503,
                'nom' => 'Ordis',
                'comarques_id' => 2,
            ),
            3 => 
            array (
                'id' => 504,
                'nom' => 'Organyà',
                'comarques_id' => 4,
            ),
            4 => 
            array (
                'id' => 505,
                'nom' => 'Orís',
                'comarques_id' => 28,
            ),
            5 => 
            array (
                'id' => 506,
                'nom' => 'Oristà',
                'comarques_id' => 28,
            ),
            6 => 
            array (
                'id' => 507,
                'nom' => 'Orpí',
                'comarques_id' => 6,
            ),
            7 => 
            array (
                'id' => 508,
                'nom' => 'Òrrius',
                'comarques_id' => 24,
            ),
            8 => 
            array (
                'id' => 509,
                'nom' => 'Os de Balaguer',
                'comarques_id' => 27,
            ),
            9 => 
            array (
                'id' => 510,
                'nom' => 'Osor',
                'comarques_id' => 38,
            ),
            10 => 
            array (
                'id' => 511,
                'nom' => 'Ossó de Sió',
                'comarques_id' => 42,
            ),
            11 => 
            array (
                'id' => 512,
                'nom' => 'Pacs del Penedès',
                'comarques_id' => 3,
            ),
            12 => 
            array (
                'id' => 513,
                'nom' => 'Palafolls',
                'comarques_id' => 24,
            ),
            13 => 
            array (
                'id' => 514,
                'nom' => 'Palafrugell',
                'comarques_id' => 11,
            ),
            14 => 
            array (
                'id' => 515,
                'nom' => 'Palamós',
                'comarques_id' => 11,
            ),
            15 => 
            array (
                'id' => 516,
                'nom' => 'El Palau d\'Anglesola',
                'comarques_id' => 32,
            ),
            16 => 
            array (
                'id' => 517,
                'nom' => 'Palau de Santa Eulàlia',
                'comarques_id' => 2,
            ),
            17 => 
            array (
                'id' => 518,
                'nom' => 'Palau-sator',
                'comarques_id' => 11,
            ),
            18 => 
            array (
                'id' => 519,
                'nom' => 'Palau-saverdera',
                'comarques_id' => 2,
            ),
            19 => 
            array (
                'id' => 520,
                'nom' => 'Palau-solità i Plegamans',
                'comarques_id' => 43,
            ),
            20 => 
            array (
                'id' => 521,
                'nom' => 'Els Pallaresos',
                'comarques_id' => 40,
            ),
            21 => 
            array (
                'id' => 522,
                'nom' => 'Pallejà',
                'comarques_id' => 12,
            ),
            22 => 
            array (
                'id' => 523,
                'nom' => 'La Palma de Cervelló',
                'comarques_id' => 12,
            ),
            23 => 
            array (
                'id' => 524,
                'nom' => 'La Palma d\'Ebre',
                'comarques_id' => 34,
            ),
            24 => 
            array (
                'id' => 525,
                'nom' => 'Palol de Revardit',
                'comarques_id' => 31,
            ),
            25 => 
            array (
                'id' => 526,
                'nom' => 'Pals',
                'comarques_id' => 11,
            ),
            26 => 
            array (
                'id' => 527,
                'nom' => 'El Papiol',
                'comarques_id' => 12,
            ),
            27 => 
            array (
                'id' => 528,
                'nom' => 'Pardines',
                'comarques_id' => 35,
            ),
            28 => 
            array (
                'id' => 529,
                'nom' => 'Parets del Vallès',
                'comarques_id' => 44,
            ),
            29 => 
            array (
                'id' => 530,
                'nom' => 'Parlavà',
                'comarques_id' => 11,
            ),
            30 => 
            array (
                'id' => 531,
                'nom' => 'Passanant i Belltall',
                'comarques_id' => 19,
            ),
            31 => 
            array (
                'id' => 532,
                'nom' => 'Pau',
                'comarques_id' => 2,
            ),
            32 => 
            array (
                'id' => 533,
                'nom' => 'Paüls',
                'comarques_id' => 10,
            ),
            33 => 
            array (
                'id' => 534,
                'nom' => 'Pedret i Marzà',
                'comarques_id' => 2,
            ),
            34 => 
            array (
                'id' => 535,
                'nom' => 'Penelles',
                'comarques_id' => 27,
            ),
            35 => 
            array (
                'id' => 536,
                'nom' => 'La Pera',
                'comarques_id' => 11,
            ),
            36 => 
            array (
                'id' => 537,
                'nom' => 'Perafita',
                'comarques_id' => 28,
            ),
            37 => 
            array (
                'id' => 538,
                'nom' => 'Perafort',
                'comarques_id' => 40,
            ),
            38 => 
            array (
                'id' => 539,
                'nom' => 'Peralada',
                'comarques_id' => 2,
            ),
            39 => 
            array (
                'id' => 540,
                'nom' => 'Peramola',
                'comarques_id' => 4,
            ),
            40 => 
            array (
                'id' => 541,
                'nom' => 'El Perelló',
                'comarques_id' => 10,
            ),
            41 => 
            array (
                'id' => 542,
                'nom' => 'Piera',
                'comarques_id' => 6,
            ),
            42 => 
            array (
                'id' => 543,
                'nom' => 'Les Piles',
                'comarques_id' => 19,
            ),
            43 => 
            array (
                'id' => 544,
                'nom' => 'Pineda de Mar',
                'comarques_id' => 24,
            ),
            44 => 
            array (
                'id' => 545,
                'nom' => 'El Pinell de Brai',
                'comarques_id' => 41,
            ),
            45 => 
            array (
                'id' => 546,
                'nom' => 'Pinell de Solsonès',
                'comarques_id' => 39,
            ),
            46 => 
            array (
                'id' => 547,
                'nom' => 'Pinós',
                'comarques_id' => 39,
            ),
            47 => 
            array (
                'id' => 548,
                'nom' => 'Pira',
                'comarques_id' => 19,
            ),
            48 => 
            array (
                'id' => 549,
                'nom' => 'El Pla de Santa Maria',
                'comarques_id' => 1,
            ),
            49 => 
            array (
                'id' => 550,
                'nom' => 'El Pla del Penedès',
                'comarques_id' => 3,
            ),
            50 => 
            array (
                'id' => 551,
                'nom' => 'Les Planes d\'Hostoles',
                'comarques_id' => 22,
            ),
            51 => 
            array (
                'id' => 552,
                'nom' => 'Planoles',
                'comarques_id' => 35,
            ),
            52 => 
            array (
                'id' => 553,
                'nom' => 'Els Plans de Sió',
                'comarques_id' => 36,
            ),
            53 => 
            array (
                'id' => 554,
                'nom' => 'El Poal',
                'comarques_id' => 32,
            ),
            54 => 
            array (
                'id' => 555,
                'nom' => 'La Pobla de Cérvoles',
                'comarques_id' => 21,
            ),
            55 => 
            array (
                'id' => 556,
                'nom' => 'La Pobla de Claramunt',
                'comarques_id' => 6,
            ),
            56 => 
            array (
                'id' => 557,
                'nom' => 'La Pobla de Lillet',
                'comarques_id' => 16,
            ),
            57 => 
            array (
                'id' => 558,
                'nom' => 'La Pobla de Mafumet',
                'comarques_id' => 40,
            ),
            58 => 
            array (
                'id' => 559,
                'nom' => 'La Pobla de Massaluca',
                'comarques_id' => 41,
            ),
            59 => 
            array (
                'id' => 560,
                'nom' => 'La Pobla de Montornès',
                'comarques_id' => 40,
            ),
            60 => 
            array (
                'id' => 561,
                'nom' => 'La Pobla de Segur',
                'comarques_id' => 30,
            ),
            61 => 
            array (
                'id' => 562,
                'nom' => 'Poboleda',
                'comarques_id' => 33,
            ),
            62 => 
            array (
                'id' => 563,
                'nom' => 'Polinyà',
                'comarques_id' => 43,
            ),
            63 => 
            array (
                'id' => 564,
                'nom' => 'El Pont d\'Armentera',
                'comarques_id' => 1,
            ),
            64 => 
            array (
                'id' => 565,
                'nom' => 'El Pont de Bar',
                'comarques_id' => 4,
            ),
            65 => 
            array (
                'id' => 566,
                'nom' => 'Pont de Molins',
                'comarques_id' => 2,
            ),
            66 => 
            array (
                'id' => 567,
                'nom' => 'El Pont de Suert',
                'comarques_id' => 5,
            ),
            67 => 
            array (
                'id' => 568,
                'nom' => 'El Pont de Vilomara i Rocafort',
                'comarques_id' => 8,
            ),
            68 => 
            array (
                'id' => 569,
                'nom' => 'Pontils',
                'comarques_id' => 19,
            ),
            69 => 
            array (
                'id' => 570,
                'nom' => 'Pontons',
                'comarques_id' => 3,
            ),
            70 => 
            array (
                'id' => 571,
                'nom' => 'Pontós',
                'comarques_id' => 2,
            ),
            71 => 
            array (
                'id' => 572,
                'nom' => 'Ponts',
                'comarques_id' => 27,
            ),
            72 => 
            array (
                'id' => 573,
                'nom' => 'Porqueres',
                'comarques_id' => 31,
            ),
            73 => 
            array (
                'id' => 574,
                'nom' => 'Porrera',
                'comarques_id' => 33,
            ),
            74 => 
            array (
                'id' => 575,
                'nom' => 'El Port de la Selva',
                'comarques_id' => 2,
            ),
            75 => 
            array (
                'id' => 576,
                'nom' => 'Portbou',
                'comarques_id' => 2,
            ),
            76 => 
            array (
                'id' => 577,
                'nom' => 'La Portella',
                'comarques_id' => 37,
            ),
            77 => 
            array (
                'id' => 578,
                'nom' => 'Pradell de la Teixeta',
                'comarques_id' => 33,
            ),
            78 => 
            array (
                'id' => 579,
                'nom' => 'Prades',
                'comarques_id' => 9,
            ),
            79 => 
            array (
                'id' => 580,
                'nom' => 'Prat de Comte',
                'comarques_id' => 41,
            ),
            80 => 
            array (
                'id' => 581,
                'nom' => 'El Prat de Llobregat',
                'comarques_id' => 12,
            ),
            81 => 
            array (
                'id' => 582,
                'nom' => 'Pratdip',
                'comarques_id' => 9,
            ),
            82 => 
            array (
                'id' => 583,
                'nom' => 'Prats de Lluçanès',
                'comarques_id' => 28,
            ),
            83 => 
            array (
                'id' => 584,
                'nom' => 'Els Prats de Rei',
                'comarques_id' => 6,
            ),
            84 => 
            array (
                'id' => 585,
                'nom' => 'Prats i Sansor',
                'comarques_id' => 18,
            ),
            85 => 
            array (
                'id' => 586,
                'nom' => 'Preixana',
                'comarques_id' => 42,
            ),
            86 => 
            array (
                'id' => 587,
                'nom' => 'Preixens',
                'comarques_id' => 27,
            ),
            87 => 
            array (
                'id' => 588,
                'nom' => 'Premià de Dalt',
                'comarques_id' => 24,
            ),
            88 => 
            array (
                'id' => 589,
                'nom' => 'Premià de Mar',
                'comarques_id' => 24,
            ),
            89 => 
            array (
                'id' => 590,
                'nom' => 'Les Preses',
                'comarques_id' => 22,
            ),
            90 => 
            array (
                'id' => 591,
                'nom' => 'Prullans',
                'comarques_id' => 18,
            ),
            91 => 
            array (
                'id' => 592,
                'nom' => 'Puigcerdà',
                'comarques_id' => 17,
            ),
            92 => 
            array (
                'id' => 593,
                'nom' => 'Puigdàlber',
                'comarques_id' => 3,
            ),
            93 => 
            array (
                'id' => 594,
                'nom' => 'Puiggròs',
                'comarques_id' => 21,
            ),
            94 => 
            array (
                'id' => 595,
                'nom' => 'Puigpelat',
                'comarques_id' => 1,
            ),
            95 => 
            array (
                'id' => 596,
                'nom' => 'Puig-reig',
                'comarques_id' => 16,
            ),
            96 => 
            array (
                'id' => 597,
                'nom' => 'Puigverd d\'Agramunt',
                'comarques_id' => 42,
            ),
            97 => 
            array (
                'id' => 598,
                'nom' => 'Puigverd de Lleida',
                'comarques_id' => 37,
            ),
            98 => 
            array (
                'id' => 599,
                'nom' => 'Pujalt',
                'comarques_id' => 6,
            ),
            99 => 
            array (
                'id' => 600,
                'nom' => 'La Quar',
                'comarques_id' => 16,
            ),
            100 => 
            array (
                'id' => 601,
                'nom' => 'Quart',
                'comarques_id' => 23,
            ),
            101 => 
            array (
                'id' => 602,
                'nom' => 'Queralbs',
                'comarques_id' => 35,
            ),
            102 => 
            array (
                'id' => 603,
                'nom' => 'Querol',
                'comarques_id' => 1,
            ),
            103 => 
            array (
                'id' => 604,
                'nom' => 'Rabós',
                'comarques_id' => 2,
            ),
            104 => 
            array (
                'id' => 605,
                'nom' => 'Rajadell',
                'comarques_id' => 8,
            ),
            105 => 
            array (
                'id' => 606,
                'nom' => 'Rasquera',
                'comarques_id' => 34,
            ),
            106 => 
            array (
                'id' => 607,
                'nom' => 'Regencós',
                'comarques_id' => 11,
            ),
            107 => 
            array (
                'id' => 608,
                'nom' => 'Rellinars',
                'comarques_id' => 43,
            ),
            108 => 
            array (
                'id' => 609,
                'nom' => 'Renau',
                'comarques_id' => 40,
            ),
            109 => 
            array (
                'id' => 610,
                'nom' => 'Reus',
                'comarques_id' => 9,
            ),
            110 => 
            array (
                'id' => 611,
                'nom' => 'Rialp',
                'comarques_id' => 45,
            ),
            111 => 
            array (
                'id' => 612,
                'nom' => 'La Riba',
                'comarques_id' => 1,
            ),
            112 => 
            array (
                'id' => 613,
                'nom' => 'Riba-roja d\'Ebre',
                'comarques_id' => 34,
            ),
            113 => 
            array (
                'id' => 614,
                'nom' => 'Ribera d\'Ondara',
                'comarques_id' => 36,
            ),
            114 => 
            array (
                'id' => 615,
                'nom' => 'Ribera d\'Urgellet',
                'comarques_id' => 4,
            ),
            115 => 
            array (
                'id' => 616,
                'nom' => 'Ribes de Freser',
                'comarques_id' => 35,
            ),
            116 => 
            array (
                'id' => 617,
                'nom' => 'Riells i Viabrea',
                'comarques_id' => 38,
            ),
            117 => 
            array (
                'id' => 618,
                'nom' => 'La Riera de Gaià',
                'comarques_id' => 40,
            ),
            118 => 
            array (
                'id' => 619,
                'nom' => 'Riner',
                'comarques_id' => 39,
            ),
            119 => 
            array (
                'id' => 620,
                'nom' => 'Ripoll',
                'comarques_id' => 35,
            ),
            120 => 
            array (
                'id' => 621,
                'nom' => 'Ripollet',
                'comarques_id' => 43,
            ),
            121 => 
            array (
                'id' => 622,
                'nom' => 'Riu de Cerdanya',
                'comarques_id' => 18,
            ),
            122 => 
            array (
                'id' => 623,
                'nom' => 'Riudarenes',
                'comarques_id' => 38,
            ),
            123 => 
            array (
                'id' => 624,
                'nom' => 'Riudaura',
                'comarques_id' => 22,
            ),
            124 => 
            array (
                'id' => 625,
                'nom' => 'Riudecanyes',
                'comarques_id' => 9,
            ),
            125 => 
            array (
                'id' => 626,
                'nom' => 'Riudecols',
                'comarques_id' => 9,
            ),
            126 => 
            array (
                'id' => 627,
                'nom' => 'Riudellots de la Selva',
                'comarques_id' => 38,
            ),
            127 => 
            array (
                'id' => 628,
                'nom' => 'Riudoms',
                'comarques_id' => 9,
            ),
            128 => 
            array (
                'id' => 629,
                'nom' => 'Riumors',
                'comarques_id' => 2,
            ),
            129 => 
            array (
                'id' => 630,
                'nom' => 'La Roca del Vallès',
                'comarques_id' => 44,
            ),
            130 => 
            array (
                'id' => 631,
                'nom' => 'Rocafort de Queralt',
                'comarques_id' => 19,
            ),
            131 => 
            array (
                'id' => 632,
                'nom' => 'Roda de Berà',
                'comarques_id' => 40,
            ),
            132 => 
            array (
                'id' => 633,
                'nom' => 'Roda de Ter',
                'comarques_id' => 28,
            ),
            133 => 
            array (
                'id' => 634,
                'nom' => 'Rodonyà',
                'comarques_id' => 1,
            ),
            134 => 
            array (
                'id' => 635,
                'nom' => 'Roquetes',
                'comarques_id' => 10,
            ),
            135 => 
            array (
                'id' => 636,
                'nom' => 'Roses',
                'comarques_id' => 2,
            ),
            136 => 
            array (
                'id' => 637,
                'nom' => 'Rosselló',
                'comarques_id' => 37,
            ),
            137 => 
            array (
                'id' => 638,
                'nom' => 'El Rourell',
                'comarques_id' => 1,
            ),
            138 => 
            array (
                'id' => 639,
                'nom' => 'Rubí',
                'comarques_id' => 43,
            ),
            139 => 
            array (
                'id' => 640,
                'nom' => 'Rubió',
                'comarques_id' => 6,
            ),
            140 => 
            array (
                'id' => 641,
                'nom' => 'Rupià',
                'comarques_id' => 11,
            ),
            141 => 
            array (
                'id' => 642,
                'nom' => 'Rupit i Pruit',
                'comarques_id' => 28,
            ),
            142 => 
            array (
                'id' => 643,
                'nom' => 'Sabadell',
                'comarques_id' => 43,
            ),
            143 => 
            array (
                'id' => 644,
                'nom' => 'Sagàs',
                'comarques_id' => 16,
            ),
            144 => 
            array (
                'id' => 645,
                'nom' => 'Salàs de Pallars',
                'comarques_id' => 30,
            ),
            145 => 
            array (
                'id' => 646,
                'nom' => 'Saldes',
                'comarques_id' => 16,
            ),
            146 => 
            array (
                'id' => 647,
                'nom' => 'Sales de Llierca',
                'comarques_id' => 22,
            ),
            147 => 
            array (
                'id' => 648,
                'nom' => 'Sallent',
                'comarques_id' => 8,
            ),
            148 => 
            array (
                'id' => 649,
                'nom' => 'Salomó',
                'comarques_id' => 40,
            ),
            149 => 
            array (
                'id' => 650,
                'nom' => 'Salou',
                'comarques_id' => 40,
            ),
            150 => 
            array (
                'id' => 651,
                'nom' => 'Salt',
                'comarques_id' => 23,
            ),
            151 => 
            array (
                'id' => 652,
                'nom' => 'Sanaüja',
                'comarques_id' => 36,
            ),
            152 => 
            array (
                'id' => 653,
                'nom' => 'Sant Adrià de Besòs',
                'comarques_id' => 14,
            ),
            153 => 
            array (
                'id' => 654,
                'nom' => 'Sant Agustí de Lluçanès',
                'comarques_id' => 28,
            ),
            154 => 
            array (
                'id' => 655,
                'nom' => 'Sant Andreu de la Barca',
                'comarques_id' => 12,
            ),
            155 => 
            array (
                'id' => 656,
                'nom' => 'Sant Andreu de Llavaneres',
                'comarques_id' => 24,
            ),
            156 => 
            array (
                'id' => 657,
                'nom' => 'Sant Andreu Salou',
                'comarques_id' => 23,
            ),
            157 => 
            array (
                'id' => 658,
                'nom' => 'Sant Aniol de Finestres',
                'comarques_id' => 22,
            ),
            158 => 
            array (
                'id' => 659,
                'nom' => 'Sant Antoni de Vilamajor',
                'comarques_id' => 44,
            ),
            159 => 
            array (
                'id' => 660,
                'nom' => 'Sant Bartomeu del Grau',
                'comarques_id' => 28,
            ),
            160 => 
            array (
                'id' => 661,
                'nom' => 'Sant Boi de Llobregat',
                'comarques_id' => 12,
            ),
            161 => 
            array (
                'id' => 662,
                'nom' => 'Sant Boi de Lluçanès',
                'comarques_id' => 28,
            ),
            162 => 
            array (
                'id' => 663,
                'nom' => 'Sant Carles de la Ràpita',
                'comarques_id' => 26,
            ),
            163 => 
            array (
                'id' => 664,
                'nom' => 'Sant Cebrià de Vallalta',
                'comarques_id' => 24,
            ),
            164 => 
            array (
                'id' => 665,
                'nom' => 'Sant Celoni',
                'comarques_id' => 44,
            ),
            165 => 
            array (
                'id' => 666,
                'nom' => 'Sant Climent de Llobregat',
                'comarques_id' => 12,
            ),
            166 => 
            array (
                'id' => 667,
                'nom' => 'Sant Climent Sescebes',
                'comarques_id' => 2,
            ),
            167 => 
            array (
                'id' => 668,
                'nom' => 'Sant Cugat del Vallès',
                'comarques_id' => 43,
            ),
            168 => 
            array (
                'id' => 669,
                'nom' => 'Sant Cugat Sesgarrigues',
                'comarques_id' => 3,
            ),
            169 => 
            array (
                'id' => 670,
                'nom' => 'Sant Esteve de la Sarga',
                'comarques_id' => 30,
            ),
            170 => 
            array (
                'id' => 671,
                'nom' => 'Sant Esteve de Palautordera',
                'comarques_id' => 44,
            ),
            171 => 
            array (
                'id' => 672,
                'nom' => 'Sant Esteve Sesrovires',
                'comarques_id' => 12,
            ),
            172 => 
            array (
                'id' => 673,
                'nom' => 'Sant Feliu de Buixalleu',
                'comarques_id' => 38,
            ),
            173 => 
            array (
                'id' => 674,
                'nom' => 'Sant Feliu de Codines',
                'comarques_id' => 44,
            ),
            174 => 
            array (
                'id' => 675,
                'nom' => 'Sant Feliu de Guíxols',
                'comarques_id' => 11,
            ),
            175 => 
            array (
                'id' => 676,
                'nom' => 'Sant Feliu de Llobregat',
                'comarques_id' => 12,
            ),
            176 => 
            array (
                'id' => 677,
                'nom' => 'Sant Feliu de Pallerols',
                'comarques_id' => 22,
            ),
            177 => 
            array (
                'id' => 678,
                'nom' => 'Sant Feliu Sasserra',
                'comarques_id' => 8,
            ),
            178 => 
            array (
                'id' => 679,
                'nom' => 'Sant Ferriol',
                'comarques_id' => 22,
            ),
            179 => 
            array (
                'id' => 680,
                'nom' => 'Sant Fost de Campsentelles',
                'comarques_id' => 44,
            ),
            180 => 
            array (
                'id' => 681,
                'nom' => 'Sant Fruitós de Bages',
                'comarques_id' => 8,
            ),
            181 => 
            array (
                'id' => 682,
                'nom' => 'Sant Gregori',
                'comarques_id' => 23,
            ),
            182 => 
            array (
                'id' => 683,
                'nom' => 'Sant Guim de Freixenet',
                'comarques_id' => 36,
            ),
            183 => 
            array (
                'id' => 684,
                'nom' => 'Sant Guim de la Plana',
                'comarques_id' => 36,
            ),
            184 => 
            array (
                'id' => 685,
                'nom' => 'Sant Hilari Sacalm',
                'comarques_id' => 38,
            ),
            185 => 
            array (
                'id' => 686,
                'nom' => 'Sant Hipòlit de Voltregà',
                'comarques_id' => 28,
            ),
            186 => 
            array (
                'id' => 687,
                'nom' => 'Sant Iscle de Vallalta',
                'comarques_id' => 24,
            ),
            187 => 
            array (
                'id' => 688,
                'nom' => 'Sant Jaume de Frontanyà',
                'comarques_id' => 16,
            ),
            188 => 
            array (
                'id' => 689,
                'nom' => 'Sant Jaume de Llierca',
                'comarques_id' => 22,
            ),
            189 => 
            array (
                'id' => 690,
                'nom' => 'Sant Jaume dels Domenys',
                'comarques_id' => 13,
            ),
            190 => 
            array (
                'id' => 691,
                'nom' => 'Sant Jaume d\'Enveja',
                'comarques_id' => 26,
            ),
            191 => 
            array (
                'id' => 692,
                'nom' => 'Sant Joan de les Abadesses',
                'comarques_id' => 35,
            ),
            192 => 
            array (
                'id' => 693,
                'nom' => 'Sant Joan de Mollet',
                'comarques_id' => 23,
            ),
            193 => 
            array (
                'id' => 694,
                'nom' => 'Sant Joan de Vilatorrada',
                'comarques_id' => 8,
            ),
            194 => 
            array (
                'id' => 695,
                'nom' => 'Sant Joan Despí',
                'comarques_id' => 12,
            ),
            195 => 
            array (
                'id' => 696,
                'nom' => 'Sant Joan les Fonts',
                'comarques_id' => 22,
            ),
            196 => 
            array (
                'id' => 697,
                'nom' => 'Sant Jordi Desvalls',
                'comarques_id' => 23,
            ),
            197 => 
            array (
                'id' => 698,
                'nom' => 'Sant Julià de Cerdanyola',
                'comarques_id' => 16,
            ),
            198 => 
            array (
                'id' => 699,
                'nom' => 'Sant Julià de Ramis',
                'comarques_id' => 23,
            ),
            199 => 
            array (
                'id' => 700,
                'nom' => 'Sant Julià de Vilatorta',
                'comarques_id' => 28,
            ),
            200 => 
            array (
                'id' => 701,
                'nom' => 'Sant Julià del Llor i Bonmatí',
                'comarques_id' => 38,
            ),
            201 => 
            array (
                'id' => 702,
                'nom' => 'Sant Just Desvern',
                'comarques_id' => 12,
            ),
            202 => 
            array (
                'id' => 703,
                'nom' => 'Sant Llorenç de la Muga',
                'comarques_id' => 2,
            ),
            203 => 
            array (
                'id' => 704,
                'nom' => 'Sant Llorenç de Morunys',
                'comarques_id' => 39,
            ),
            204 => 
            array (
                'id' => 705,
                'nom' => 'Sant Llorenç d\'Hortons',
                'comarques_id' => 3,
            ),
            205 => 
            array (
                'id' => 706,
                'nom' => 'Sant Llorenç Savall',
                'comarques_id' => 43,
            ),
            206 => 
            array (
                'id' => 707,
                'nom' => 'Sant Martí d\'Albars',
                'comarques_id' => 28,
            ),
            207 => 
            array (
                'id' => 708,
                'nom' => 'Sant Martí de Centelles',
                'comarques_id' => 28,
            ),
            208 => 
            array (
                'id' => 709,
                'nom' => 'Sant Martí de Llémena',
                'comarques_id' => 23,
            ),
            209 => 
            array (
                'id' => 710,
                'nom' => 'Sant Martí de Riucorb',
                'comarques_id' => 42,
            ),
            210 => 
            array (
                'id' => 711,
                'nom' => 'Sant Martí de Tous',
                'comarques_id' => 6,
            ),
            211 => 
            array (
                'id' => 712,
                'nom' => 'Sant Martí Sarroca',
                'comarques_id' => 3,
            ),
            212 => 
            array (
                'id' => 713,
                'nom' => 'Sant Martí Sesgueioles',
                'comarques_id' => 6,
            ),
            213 => 
            array (
                'id' => 714,
                'nom' => 'Sant Martí Vell',
                'comarques_id' => 23,
            ),
            214 => 
            array (
                'id' => 715,
                'nom' => 'Sant Mateu de Bages',
                'comarques_id' => 8,
            ),
            215 => 
            array (
                'id' => 716,
                'nom' => 'Sant Miquel de Campmajor',
                'comarques_id' => 31,
            ),
            216 => 
            array (
                'id' => 717,
                'nom' => 'Sant Miquel de Fluvià',
                'comarques_id' => 2,
            ),
            217 => 
            array (
                'id' => 718,
                'nom' => 'Sant Mori',
                'comarques_id' => 2,
            ),
            218 => 
            array (
                'id' => 719,
                'nom' => 'Sant Pau de Segúries',
                'comarques_id' => 35,
            ),
            219 => 
            array (
                'id' => 720,
                'nom' => 'Sant Pere de Ribes',
                'comarques_id' => 20,
            ),
            220 => 
            array (
                'id' => 721,
                'nom' => 'Sant Pere de Riudebitlles',
                'comarques_id' => 3,
            ),
            221 => 
            array (
                'id' => 722,
                'nom' => 'Sant Pere de Torelló',
                'comarques_id' => 28,
            ),
            222 => 
            array (
                'id' => 723,
                'nom' => 'Sant Pere de Vilamajor',
                'comarques_id' => 44,
            ),
            223 => 
            array (
                'id' => 724,
                'nom' => 'Sant Pere Pescador',
                'comarques_id' => 2,
            ),
            224 => 
            array (
                'id' => 725,
                'nom' => 'Sant Pere Sallavinera',
                'comarques_id' => 6,
            ),
            225 => 
            array (
                'id' => 726,
                'nom' => 'Sant Pol de Mar',
                'comarques_id' => 24,
            ),
            226 => 
            array (
                'id' => 727,
                'nom' => 'Sant Quintí de Mediona',
                'comarques_id' => 3,
            ),
            227 => 
            array (
                'id' => 728,
                'nom' => 'Sant Quirze de Besora',
                'comarques_id' => 28,
            ),
            228 => 
            array (
                'id' => 729,
                'nom' => 'Sant Quirze del Vallès',
                'comarques_id' => 43,
            ),
            229 => 
            array (
                'id' => 730,
                'nom' => 'Sant Quirze Safaja',
                'comarques_id' => 25,
            ),
            230 => 
            array (
                'id' => 731,
                'nom' => 'Sant Ramon',
                'comarques_id' => 36,
            ),
            231 => 
            array (
                'id' => 732,
                'nom' => 'Sant Sadurní d\'Anoia',
                'comarques_id' => 3,
            ),
            232 => 
            array (
                'id' => 733,
                'nom' => 'Sant Sadurní d\'Osormort',
                'comarques_id' => 28,
            ),
            233 => 
            array (
                'id' => 734,
                'nom' => 'Sant Salvador de Guardiola',
                'comarques_id' => 8,
            ),
            234 => 
            array (
                'id' => 735,
                'nom' => 'Sant Vicenç de Castellet',
                'comarques_id' => 8,
            ),
            235 => 
            array (
                'id' => 736,
                'nom' => 'Sant Vicenç de Montalt',
                'comarques_id' => 24,
            ),
            236 => 
            array (
                'id' => 737,
                'nom' => 'Sant Vicenç de Torelló',
                'comarques_id' => 28,
            ),
            237 => 
            array (
                'id' => 738,
                'nom' => 'Sant Vicenç dels Horts',
                'comarques_id' => 12,
            ),
            238 => 
            array (
                'id' => 739,
                'nom' => 'Santa Bàrbara',
                'comarques_id' => 26,
            ),
            239 => 
            array (
                'id' => 740,
                'nom' => 'Santa Cecília de Voltregà',
                'comarques_id' => 28,
            ),
            240 => 
            array (
                'id' => 741,
                'nom' => 'Santa Coloma de Cervelló',
                'comarques_id' => 12,
            ),
            241 => 
            array (
                'id' => 742,
                'nom' => 'Santa Coloma de Farners',
                'comarques_id' => 38,
            ),
            242 => 
            array (
                'id' => 743,
                'nom' => 'Santa Coloma de Gramenet',
                'comarques_id' => 14,
            ),
            243 => 
            array (
                'id' => 744,
                'nom' => 'Santa Coloma de Queralt',
                'comarques_id' => 19,
            ),
            244 => 
            array (
                'id' => 745,
                'nom' => 'Santa Cristina d\'Aro',
                'comarques_id' => 11,
            ),
            245 => 
            array (
                'id' => 746,
                'nom' => 'Santa Eugènia de Berga',
                'comarques_id' => 28,
            ),
            246 => 
            array (
                'id' => 747,
                'nom' => 'Santa Eulàlia de Riuprimer',
                'comarques_id' => 28,
            ),
            247 => 
            array (
                'id' => 748,
                'nom' => 'Santa Eulàlia de Ronçana',
                'comarques_id' => 44,
            ),
            248 => 
            array (
                'id' => 749,
                'nom' => 'Santa Fe del Penedès',
                'comarques_id' => 3,
            ),
            249 => 
            array (
                'id' => 750,
                'nom' => 'Santa Llogaia d\'Àlguema',
                'comarques_id' => 2,
            ),
            250 => 
            array (
                'id' => 751,
                'nom' => 'Santa Margarida de Montbui',
                'comarques_id' => 6,
            ),
            251 => 
            array (
                'id' => 752,
                'nom' => 'Santa Margarida i els Monjos',
                'comarques_id' => 3,
            ),
            252 => 
            array (
                'id' => 753,
                'nom' => 'Santa Maria de Besora',
                'comarques_id' => 28,
            ),
            253 => 
            array (
                'id' => 754,
                'nom' => 'Santa Maria de Martorelles',
                'comarques_id' => 44,
            ),
            254 => 
            array (
                'id' => 755,
                'nom' => 'Santa Maria de Merlès',
                'comarques_id' => 16,
            ),
            255 => 
            array (
                'id' => 756,
                'nom' => 'Santa Maria de Miralles',
                'comarques_id' => 6,
            ),
            256 => 
            array (
                'id' => 757,
                'nom' => 'Santa Maria de Palautordera',
                'comarques_id' => 44,
            ),
            257 => 
            array (
                'id' => 758,
                'nom' => 'Santa Maria d\'Oló',
                'comarques_id' => 25,
            ),
            258 => 
            array (
                'id' => 759,
                'nom' => 'Santa Oliva',
                'comarques_id' => 13,
            ),
            259 => 
            array (
                'id' => 760,
                'nom' => 'Santa Pau',
                'comarques_id' => 22,
            ),
            260 => 
            array (
                'id' => 761,
                'nom' => 'Santa Perpètua de Mogoda',
                'comarques_id' => 43,
            ),
            261 => 
            array (
                'id' => 762,
                'nom' => 'Santa Susanna',
                'comarques_id' => 24,
            ),
            262 => 
            array (
                'id' => 763,
                'nom' => 'Santpedor',
                'comarques_id' => 8,
            ),
            263 => 
            array (
                'id' => 764,
                'nom' => 'Sarral',
                'comarques_id' => 19,
            ),
            264 => 
            array (
                'id' => 765,
                'nom' => 'Sarrià de Ter',
                'comarques_id' => 23,
            ),
            265 => 
            array (
                'id' => 766,
                'nom' => 'Sarroca de Bellera',
                'comarques_id' => 30,
            ),
            266 => 
            array (
                'id' => 767,
                'nom' => 'Sarroca de Lleida',
                'comarques_id' => 37,
            ),
            267 => 
            array (
                'id' => 768,
                'nom' => 'Saus, Camallera i Llampaies',
                'comarques_id' => 2,
            ),
            268 => 
            array (
                'id' => 769,
                'nom' => 'Savallà del Comtat',
                'comarques_id' => 19,
            ),
            269 => 
            array (
                'id' => 770,
                'nom' => 'La Secuita',
                'comarques_id' => 40,
            ),
            270 => 
            array (
                'id' => 771,
                'nom' => 'La Selva de Mar',
                'comarques_id' => 2,
            ),
            271 => 
            array (
                'id' => 772,
                'nom' => 'La Selva del Camp',
                'comarques_id' => 9,
            ),
            272 => 
            array (
                'id' => 773,
                'nom' => 'Senan',
                'comarques_id' => 19,
            ),
            273 => 
            array (
                'id' => 774,
                'nom' => 'La Sénia',
                'comarques_id' => 26,
            ),
            274 => 
            array (
                'id' => 775,
                'nom' => 'Senterada',
                'comarques_id' => 30,
            ),
            275 => 
            array (
                'id' => 776,
                'nom' => 'La Sentiu de Sió',
                'comarques_id' => 27,
            ),
            276 => 
            array (
                'id' => 777,
                'nom' => 'Sentmenat',
                'comarques_id' => 43,
            ),
            277 => 
            array (
                'id' => 778,
                'nom' => 'Serinyà',
                'comarques_id' => 31,
            ),
            278 => 
            array (
                'id' => 779,
                'nom' => 'Seròs',
                'comarques_id' => 37,
            ),
            279 => 
            array (
                'id' => 780,
                'nom' => 'Serra de Daró',
                'comarques_id' => 11,
            ),
            280 => 
            array (
                'id' => 781,
                'nom' => 'Setcases',
                'comarques_id' => 35,
            ),
            281 => 
            array (
                'id' => 782,
                'nom' => 'La Seu d\'Urgell',
                'comarques_id' => 4,
            ),
            282 => 
            array (
                'id' => 783,
                'nom' => 'Seva',
                'comarques_id' => 28,
            ),
            283 => 
            array (
                'id' => 784,
                'nom' => 'Sidamon',
                'comarques_id' => 32,
            ),
            284 => 
            array (
                'id' => 785,
                'nom' => 'Sils',
                'comarques_id' => 38,
            ),
            285 => 
            array (
                'id' => 786,
                'nom' => 'Sitges',
                'comarques_id' => 20,
            ),
            286 => 
            array (
                'id' => 787,
                'nom' => 'Siurana',
                'comarques_id' => 2,
            ),
            287 => 
            array (
                'id' => 788,
                'nom' => 'Sobremunt',
                'comarques_id' => 28,
            ),
            288 => 
            array (
                'id' => 789,
                'nom' => 'El Soleràs',
                'comarques_id' => 21,
            ),
            289 => 
            array (
                'id' => 790,
                'nom' => 'Solivella',
                'comarques_id' => 19,
            ),
            290 => 
            array (
                'id' => 791,
                'nom' => 'Solsona',
                'comarques_id' => 39,
            ),
            291 => 
            array (
                'id' => 792,
                'nom' => 'Sora',
                'comarques_id' => 28,
            ),
            292 => 
            array (
                'id' => 793,
                'nom' => 'Soriguera',
                'comarques_id' => 45,
            ),
            293 => 
            array (
                'id' => 794,
                'nom' => 'Sort',
                'comarques_id' => 45,
            ),
            294 => 
            array (
                'id' => 795,
                'nom' => 'Soses',
                'comarques_id' => 37,
            ),
            295 => 
            array (
                'id' => 796,
                'nom' => 'Subirats',
                'comarques_id' => 3,
            ),
            296 => 
            array (
                'id' => 797,
                'nom' => 'Sudanell',
                'comarques_id' => 37,
            ),
            297 => 
            array (
                'id' => 798,
                'nom' => 'Sunyer',
                'comarques_id' => 37,
            ),
            298 => 
            array (
                'id' => 799,
                'nom' => 'Súria',
                'comarques_id' => 8,
            ),
            299 => 
            array (
                'id' => 800,
                'nom' => 'Susqueda',
                'comarques_id' => 38,
            ),
            300 => 
            array (
                'id' => 801,
                'nom' => 'Tagamanent',
                'comarques_id' => 44,
            ),
            301 => 
            array (
                'id' => 802,
                'nom' => 'Talamanca',
                'comarques_id' => 8,
            ),
            302 => 
            array (
                'id' => 803,
                'nom' => 'Talarn',
                'comarques_id' => 30,
            ),
            303 => 
            array (
                'id' => 804,
                'nom' => 'Talavera',
                'comarques_id' => 36,
            ),
            304 => 
            array (
                'id' => 805,
                'nom' => 'La Tallada d\'Empordà',
                'comarques_id' => 11,
            ),
            305 => 
            array (
                'id' => 806,
                'nom' => 'Taradell',
                'comarques_id' => 28,
            ),
            306 => 
            array (
                'id' => 807,
                'nom' => 'Tarragona',
                'comarques_id' => 40,
            ),
            307 => 
            array (
                'id' => 808,
                'nom' => 'Tàrrega',
                'comarques_id' => 42,
            ),
            308 => 
            array (
                'id' => 809,
                'nom' => 'Tarrés',
                'comarques_id' => 21,
            ),
            309 => 
            array (
                'id' => 810,
                'nom' => 'Tarroja de Segarra',
                'comarques_id' => 36,
            ),
            310 => 
            array (
                'id' => 811,
                'nom' => 'Tavèrnoles',
                'comarques_id' => 28,
            ),
            311 => 
            array (
                'id' => 812,
                'nom' => 'Tavertet',
                'comarques_id' => 28,
            ),
            312 => 
            array (
                'id' => 813,
                'nom' => 'Teià',
                'comarques_id' => 24,
            ),
            313 => 
            array (
                'id' => 814,
                'nom' => 'Térmens',
                'comarques_id' => 27,
            ),
            314 => 
            array (
                'id' => 815,
                'nom' => 'Terrades',
                'comarques_id' => 2,
            ),
            315 => 
            array (
                'id' => 816,
                'nom' => 'Terrassa',
                'comarques_id' => 43,
            ),
            316 => 
            array (
                'id' => 817,
                'nom' => 'Tiana',
                'comarques_id' => 24,
            ),
            317 => 
            array (
                'id' => 818,
                'nom' => 'Tírvia',
                'comarques_id' => 45,
            ),
            318 => 
            array (
                'id' => 819,
                'nom' => 'Tiurana',
                'comarques_id' => 27,
            ),
            319 => 
            array (
                'id' => 820,
                'nom' => 'Tivenys',
                'comarques_id' => 10,
            ),
            320 => 
            array (
                'id' => 821,
                'nom' => 'Tivissa',
                'comarques_id' => 34,
            ),
            321 => 
            array (
                'id' => 822,
                'nom' => 'Tona',
                'comarques_id' => 28,
            ),
            322 => 
            array (
                'id' => 823,
                'nom' => 'Torà',
                'comarques_id' => 36,
            ),
            323 => 
            array (
                'id' => 824,
                'nom' => 'Tordera',
                'comarques_id' => 24,
            ),
            324 => 
            array (
                'id' => 825,
                'nom' => 'Torelló',
                'comarques_id' => 28,
            ),
            325 => 
            array (
                'id' => 826,
                'nom' => 'Els Torms',
                'comarques_id' => 21,
            ),
            326 => 
            array (
                'id' => 827,
                'nom' => 'Tornabous',
                'comarques_id' => 42,
            ),
            327 => 
            array (
                'id' => 828,
                'nom' => 'La Torre de Cabdella',
                'comarques_id' => 30,
            ),
            328 => 
            array (
                'id' => 829,
                'nom' => 'La Torre de Claramunt',
                'comarques_id' => 6,
            ),
            329 => 
            array (
                'id' => 830,
                'nom' => 'La Torre de Fontaubella',
                'comarques_id' => 33,
            ),
            330 => 
            array (
                'id' => 831,
                'nom' => 'La Torre de l\'Espanyol',
                'comarques_id' => 34,
            ),
            331 => 
            array (
                'id' => 832,
                'nom' => 'Torrebesses',
                'comarques_id' => 37,
            ),
            332 => 
            array (
                'id' => 833,
                'nom' => 'Torredembarra',
                'comarques_id' => 40,
            ),
            333 => 
            array (
                'id' => 834,
                'nom' => 'Torrefarrera',
                'comarques_id' => 37,
            ),
            334 => 
            array (
                'id' => 835,
                'nom' => 'Torrefeta i Florejacs',
                'comarques_id' => 36,
            ),
            335 => 
            array (
                'id' => 836,
                'nom' => 'Torregrossa',
                'comarques_id' => 32,
            ),
            336 => 
            array (
                'id' => 837,
                'nom' => 'Torrelameu',
                'comarques_id' => 27,
            ),
            337 => 
            array (
                'id' => 838,
                'nom' => 'Torrelavit',
                'comarques_id' => 3,
            ),
            338 => 
            array (
                'id' => 839,
                'nom' => 'Torrelles de Foix',
                'comarques_id' => 3,
            ),
            339 => 
            array (
                'id' => 840,
                'nom' => 'Torrelles de Llobregat',
                'comarques_id' => 12,
            ),
            340 => 
            array (
                'id' => 841,
                'nom' => 'Torrent',
                'comarques_id' => 11,
            ),
            341 => 
            array (
                'id' => 842,
                'nom' => 'Torres de Segre',
                'comarques_id' => 37,
            ),
            342 => 
            array (
                'id' => 843,
                'nom' => 'Torre-serona',
                'comarques_id' => 37,
            ),
            343 => 
            array (
                'id' => 844,
                'nom' => 'Torroella de Fluvià',
                'comarques_id' => 2,
            ),
            344 => 
            array (
                'id' => 845,
                'nom' => 'Torroella de Montgrí',
                'comarques_id' => 11,
            ),
            345 => 
            array (
                'id' => 846,
                'nom' => 'Torroja del Priorat',
                'comarques_id' => 33,
            ),
            346 => 
            array (
                'id' => 847,
                'nom' => 'Tortellà',
                'comarques_id' => 22,
            ),
            347 => 
            array (
                'id' => 848,
                'nom' => 'Tortosa',
                'comarques_id' => 10,
            ),
            348 => 
            array (
                'id' => 849,
                'nom' => 'Toses',
                'comarques_id' => 35,
            ),
            349 => 
            array (
                'id' => 850,
                'nom' => 'Tossa de Mar',
                'comarques_id' => 38,
            ),
            350 => 
            array (
                'id' => 851,
                'nom' => 'Tremp',
                'comarques_id' => 30,
            ),
            351 => 
            array (
                'id' => 852,
                'nom' => 'Ullà',
                'comarques_id' => 11,
            ),
            352 => 
            array (
                'id' => 853,
                'nom' => 'Ullastrell',
                'comarques_id' => 43,
            ),
            353 => 
            array (
                'id' => 854,
                'nom' => 'Ullastret',
                'comarques_id' => 11,
            ),
            354 => 
            array (
                'id' => 855,
                'nom' => 'Ulldecona',
                'comarques_id' => 26,
            ),
            355 => 
            array (
                'id' => 856,
                'nom' => 'Ulldemolins',
                'comarques_id' => 33,
            ),
            356 => 
            array (
                'id' => 857,
                'nom' => 'Ultramort',
                'comarques_id' => 11,
            ),
            357 => 
            array (
                'id' => 858,
                'nom' => 'Urús',
                'comarques_id' => 17,
            ),
            358 => 
            array (
                'id' => 859,
                'nom' => 'Vacarisses',
                'comarques_id' => 43,
            ),
            359 => 
            array (
                'id' => 860,
                'nom' => 'La Vajol',
                'comarques_id' => 2,
            ),
            360 => 
            array (
                'id' => 861,
                'nom' => 'La Vall de Bianya',
                'comarques_id' => 22,
            ),
            361 => 
            array (
                'id' => 862,
                'nom' => 'La Vall de Boí',
                'comarques_id' => 5,
            ),
            362 => 
            array (
                'id' => 863,
                'nom' => 'Vall de Cardós',
                'comarques_id' => 45,
            ),
            363 => 
            array (
                'id' => 864,
                'nom' => 'La Vall d\'en Bas',
                'comarques_id' => 22,
            ),
            364 => 
            array (
                'id' => 865,
                'nom' => 'Vallbona d\'Anoia',
                'comarques_id' => 6,
            ),
            365 => 
            array (
                'id' => 866,
                'nom' => 'Vallbona de les Monges',
                'comarques_id' => 42,
            ),
            366 => 
            array (
                'id' => 867,
                'nom' => 'Vallcebre',
                'comarques_id' => 16,
            ),
            367 => 
            array (
                'id' => 868,
                'nom' => 'Vallclara',
                'comarques_id' => 19,
            ),
            368 => 
            array (
                'id' => 869,
                'nom' => 'Vallfogona de Balaguer',
                'comarques_id' => 27,
            ),
            369 => 
            array (
                'id' => 870,
                'nom' => 'Vallfogona de Ripollès',
                'comarques_id' => 35,
            ),
            370 => 
            array (
                'id' => 871,
                'nom' => 'Vallfogona de Riucorb',
                'comarques_id' => 19,
            ),
            371 => 
            array (
                'id' => 872,
                'nom' => 'Vallgorguina',
                'comarques_id' => 44,
            ),
            372 => 
            array (
                'id' => 873,
                'nom' => 'Vallirana',
                'comarques_id' => 12,
            ),
            373 => 
            array (
                'id' => 874,
                'nom' => 'Vall-llobrega',
                'comarques_id' => 11,
            ),
            374 => 
            array (
                'id' => 875,
                'nom' => 'Vallmoll',
                'comarques_id' => 1,
            ),
            375 => 
            array (
                'id' => 876,
                'nom' => 'Vallromanes',
                'comarques_id' => 44,
            ),
            376 => 
            array (
                'id' => 877,
                'nom' => 'Valls',
                'comarques_id' => 1,
            ),
            377 => 
            array (
                'id' => 878,
                'nom' => 'Les Valls d\'Aguilar',
                'comarques_id' => 4,
            ),
            378 => 
            array (
                'id' => 879,
                'nom' => 'Les Valls de Valira',
                'comarques_id' => 4,
            ),
            379 => 
            array (
                'id' => 880,
                'nom' => 'Vandellòs i l\'Hospitalet de l\'Infant',
                'comarques_id' => 9,
            ),
            380 => 
            array (
                'id' => 881,
                'nom' => 'La Vansa i Fórnols',
                'comarques_id' => 4,
            ),
            381 => 
            array (
                'id' => 882,
                'nom' => 'Veciana',
                'comarques_id' => 6,
            ),
            382 => 
            array (
                'id' => 883,
                'nom' => 'El Vendrell',
                'comarques_id' => 13,
            ),
            383 => 
            array (
                'id' => 884,
                'nom' => 'Ventalló',
                'comarques_id' => 2,
            ),
            384 => 
            array (
                'id' => 885,
                'nom' => 'Verdú',
                'comarques_id' => 42,
            ),
            385 => 
            array (
                'id' => 886,
                'nom' => 'Verges',
                'comarques_id' => 11,
            ),
            386 => 
            array (
                'id' => 887,
                'nom' => 'Vespella de Gaià',
                'comarques_id' => 40,
            ),
            387 => 
            array (
                'id' => 888,
                'nom' => 'Vic',
                'comarques_id' => 28,
            ),
            388 => 
            array (
                'id' => 889,
                'nom' => 'Vidrà',
                'comarques_id' => 29,
            ),
            389 => 
            array (
                'id' => 890,
                'nom' => 'Vidreres',
                'comarques_id' => 38,
            ),
            390 => 
            array (
                'id' => 891,
                'nom' => 'Vielha e Mijaran',
                'comarques_id' => 7,
            ),
            391 => 
            array (
                'id' => 892,
                'nom' => 'Vilabella',
                'comarques_id' => 1,
            ),
            392 => 
            array (
                'id' => 893,
                'nom' => 'Vilabertran',
                'comarques_id' => 2,
            ),
            393 => 
            array (
                'id' => 894,
                'nom' => 'Vilablareix',
                'comarques_id' => 23,
            ),
            394 => 
            array (
                'id' => 895,
                'nom' => 'Vilada',
                'comarques_id' => 16,
            ),
            395 => 
            array (
                'id' => 896,
                'nom' => 'Viladamat',
                'comarques_id' => 2,
            ),
            396 => 
            array (
                'id' => 897,
                'nom' => 'Viladasens',
                'comarques_id' => 23,
            ),
            397 => 
            array (
                'id' => 898,
                'nom' => 'Viladecans',
                'comarques_id' => 12,
            ),
            398 => 
            array (
                'id' => 899,
                'nom' => 'Viladecavalls',
                'comarques_id' => 43,
            ),
            399 => 
            array (
                'id' => 900,
                'nom' => 'Vilademuls',
                'comarques_id' => 31,
            ),
            400 => 
            array (
                'id' => 901,
                'nom' => 'Viladrau',
                'comarques_id' => 29,
            ),
            401 => 
            array (
                'id' => 902,
                'nom' => 'Vilafant',
                'comarques_id' => 2,
            ),
            402 => 
            array (
                'id' => 903,
                'nom' => 'Vilafranca del Penedès',
                'comarques_id' => 3,
            ),
            403 => 
            array (
                'id' => 904,
                'nom' => 'Vilagrassa',
                'comarques_id' => 42,
            ),
            404 => 
            array (
                'id' => 905,
                'nom' => 'Vilajuïga',
                'comarques_id' => 2,
            ),
            405 => 
            array (
                'id' => 906,
                'nom' => 'Vilalba dels Arcs',
                'comarques_id' => 41,
            ),
            406 => 
            array (
                'id' => 907,
                'nom' => 'Vilalba Sasserra',
                'comarques_id' => 44,
            ),
            407 => 
            array (
                'id' => 908,
                'nom' => 'Vilaller',
                'comarques_id' => 5,
            ),
            408 => 
            array (
                'id' => 909,
                'nom' => 'Vilallonga de Ter',
                'comarques_id' => 35,
            ),
            409 => 
            array (
                'id' => 910,
                'nom' => 'Vilallonga del Camp',
                'comarques_id' => 40,
            ),
            410 => 
            array (
                'id' => 911,
                'nom' => 'Vilamacolum',
                'comarques_id' => 2,
            ),
            411 => 
            array (
                'id' => 912,
                'nom' => 'Vilamalla',
                'comarques_id' => 2,
            ),
            412 => 
            array (
                'id' => 913,
                'nom' => 'Vilamaniscle',
                'comarques_id' => 2,
            ),
            413 => 
            array (
                'id' => 914,
                'nom' => 'Vilamòs',
                'comarques_id' => 7,
            ),
            414 => 
            array (
                'id' => 915,
                'nom' => 'Vilanant',
                'comarques_id' => 2,
            ),
            415 => 
            array (
                'id' => 916,
                'nom' => 'Vilanova de Bellpuig',
                'comarques_id' => 32,
            ),
            416 => 
            array (
                'id' => 917,
                'nom' => 'Vilanova de la Barca',
                'comarques_id' => 37,
            ),
            417 => 
            array (
                'id' => 918,
                'nom' => 'Vilanova de l\'Aguda',
                'comarques_id' => 27,
            ),
            418 => 
            array (
                'id' => 919,
                'nom' => 'Vilanova de Meià',
                'comarques_id' => 27,
            ),
            419 => 
            array (
                'id' => 920,
                'nom' => 'Vilanova de Prades',
                'comarques_id' => 19,
            ),
            420 => 
            array (
                'id' => 921,
                'nom' => 'Vilanova de Sau',
                'comarques_id' => 28,
            ),
            421 => 
            array (
                'id' => 922,
                'nom' => 'Vilanova de Segrià',
                'comarques_id' => 37,
            ),
            422 => 
            array (
                'id' => 923,
                'nom' => 'Vilanova del Camí',
                'comarques_id' => 6,
            ),
            423 => 
            array (
                'id' => 924,
                'nom' => 'Vilanova del Vallès',
                'comarques_id' => 44,
            ),
            424 => 
            array (
                'id' => 925,
                'nom' => 'Vilanova d\'Escornalbou',
                'comarques_id' => 9,
            ),
            425 => 
            array (
                'id' => 926,
                'nom' => 'Vilanova i la Geltrú',
                'comarques_id' => 20,
            ),
            426 => 
            array (
                'id' => 927,
                'nom' => 'Vilaplana',
                'comarques_id' => 9,
            ),
            427 => 
            array (
                'id' => 928,
                'nom' => 'Vila-rodona',
                'comarques_id' => 1,
            ),
            428 => 
            array (
                'id' => 929,
                'nom' => 'Vila-sacra',
                'comarques_id' => 2,
            ),
            429 => 
            array (
                'id' => 930,
                'nom' => 'Vila-sana',
                'comarques_id' => 32,
            ),
            430 => 
            array (
                'id' => 931,
                'nom' => 'Vila-seca',
                'comarques_id' => 40,
            ),
            431 => 
            array (
                'id' => 932,
                'nom' => 'Vilassar de Dalt',
                'comarques_id' => 24,
            ),
            432 => 
            array (
                'id' => 933,
                'nom' => 'Vilassar de Mar',
                'comarques_id' => 24,
            ),
            433 => 
            array (
                'id' => 934,
                'nom' => 'Vilaür',
                'comarques_id' => 2,
            ),
            434 => 
            array (
                'id' => 935,
                'nom' => 'Vilaverd',
                'comarques_id' => 19,
            ),
            435 => 
            array (
                'id' => 936,
                'nom' => 'La Vilella Alta',
                'comarques_id' => 33,
            ),
            436 => 
            array (
                'id' => 937,
                'nom' => 'La Vilella Baixa',
                'comarques_id' => 33,
            ),
            437 => 
            array (
                'id' => 938,
                'nom' => 'Vilobí del Penedès',
                'comarques_id' => 3,
            ),
            438 => 
            array (
                'id' => 939,
                'nom' => 'Vilobí d\'Onyar',
                'comarques_id' => 38,
            ),
            439 => 
            array (
                'id' => 940,
                'nom' => 'Vilopriu',
                'comarques_id' => 11,
            ),
            440 => 
            array (
                'id' => 941,
                'nom' => 'El Vilosell',
                'comarques_id' => 21,
            ),
            441 => 
            array (
                'id' => 942,
                'nom' => 'Vimbodí i Poblet',
                'comarques_id' => 19,
            ),
            442 => 
            array (
                'id' => 943,
                'nom' => 'Vinaixa',
                'comarques_id' => 21,
            ),
            443 => 
            array (
                'id' => 944,
                'nom' => 'Vinebre',
                'comarques_id' => 34,
            ),
            444 => 
            array (
                'id' => 945,
                'nom' => 'Vinyols i els Arcs',
                'comarques_id' => 9,
            ),
            445 => 
            array (
                'id' => 946,
                'nom' => 'Viver i Serrateix',
                'comarques_id' => 16,
            ),
            446 => 
            array (
                'id' => 947,
                'nom' => 'Xerta',
                'comarques_id' => 10,
            ),
        ));
        
        
    }
}