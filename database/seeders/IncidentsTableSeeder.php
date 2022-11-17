<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IncidentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('incidents')->delete();
        
        \DB::table('incidents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codi' => 'AEE',
                'descripcio' => 'ENSORRAMENT EN EDIFICI',
            'definicio' => 'ENSORRAMENT TOTAL O PARCIAL DE QUALSEVOL TIPUS DE CONSTRUCCIÓ O EDIFICACIÓ (HABITATGES, OFICINES, HOSPITAL, INDÚSTRIA, GRUA, ALTRES). EXCEPTE TÚNEL.',
                'instrucions' => 'VEU: BB /AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'codi' => 'AET',
                'descripcio' => 'ENSORRAMENT DE TÚNEL',
            'definicio' => 'DESPRENIMENTS O CAIGUDES DE SOSTRE EN TÚNELS TANT VIARIS COM DE FERROCARRIL, METRO TRAMVIA, CREMALLERA. (SI HI HA FOC: INCENDI TÚNEL IUIT)',
                'instrucions' => 'VEU: BB /AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS
ÀMBIT VALLVIDRERA VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 4,
            ),
            2 => 
            array (
                'id' => 3,
                'codi' => 'AXES',
                'descripcio' => 'EXPLOSIÓ EN EDIFICI SENSE FERITS',
            'definicio' => 'EXPLOSIÓ EN EDIFICACIÓ, CONSTRUCCIÓ O INSTAL·LACIÓ (HABITATGES, OFICINES, HOSPITAL, INDÚSTRIA, GRUA, ALTRES) SENSE FERITS. POT TRACTAR-SE TAMBÉ D\'UN FOC AMB UNA EXPLOSIÓ POSTERIOR.',
                'instrucions' => 'VEU: BB / CT: BB PS
ÀMBIT BCN VEU: BB / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'codi' => 'AXEF',
                'descripcio' => 'EXPLOSIÓ EN EDIFICI AMB FERITS',
            'definicio' => 'EXPLOSIÓ EN EDIFICACIÓ, CONSTRUCCIÓ O INSTAL·LACIÓ (HABITATGES, OFICINES, HOSPITAL, INDÚSTRIA, GRUA, ALTRES) AMB FERITS. POT TRACTAR-SE TAMBÉ D\'UN FOC AMB UNA EXPLOSIÓ POSTERIOR.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 6,
            ),
            4 => 
            array (
                'id' => 5,
                'codi' => 'AXEPS',
                'descripcio' => 'EXPLOSIÓ EN ESPAI PÚBLIC SENSE FERITS',
                'definicio' => 'EXPLOSIÓ EN ESPAIS OBERTS, VIES URBANES I INTERURBANES SENSE FERITS. POT TRACTAR-SE TAMBÉ D\'UN FOC AMB UNA EXPLOSIÓ POSTERIOR.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS
ÀMBIT BCN VEU: BB / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PS / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 7,
            ),
            5 => 
            array (
                'id' => 6,
                'codi' => 'AXEPF',
                'descripcio' => 'EXPLOSIÓ EN ESPAI PÚBLIC AMB FERITS',
                'definicio' => 'EXPLOSIÓ EN ESPAIS OBERTS, VIES URBANES I INTERURBANES AMB FERITS. POT TRACTAR-SE TAMBÉ D\'UN FOC AMB UNA EXPLOSIÓ POSTERIOR.',
                'instrucions' => 'VEU: BB / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'codi' => 'AWML',
                'descripcio' => 'ACCIDENT EN EL MAR A 200M DE LA COSTA',
            'definicio' => 'SUPORT I ASSISTÈNCIA A PERSONES DINS DEL MAR A MÉS DE 200 M. ACTIVITATS COM NATACIÓ, WINDSURF, KITESURF, PATINET, MATALÀS INFLABLE, ETC. INCLOU RESCAT DE CADÀVERS. (NO CONFONDRE AMB ACCIDENT D\'EMBARCACIÓ).',
                'instrucions' => 'VEU: SM / AVÍS PL / CT: BB PS SS',
                'classes_incidents_id' => 9,
            ),
            7 => 
            array (
                'id' => 8,
                'codi' => 'AWMC',
                'descripcio' => 'ACCIDENT EN EL MAR A MENYS 200M DE LA COSTA',
            'definicio' => 'SUPORT I ASSISTÈNCIA A PERSONES DINS DEL MAR A MENYS DE 200 M. ACTIVITATS COM NATACIÓ, WINDSURF, KITESURF, PATINET, MATALÀS INFLABLE, ETC. INCLOU RESCAT DE CADÀVERS. (NO CONFONDRE AMB ACCIDENT D\'EMBARCACIÓ).',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS NOTA: AVÍS SM FORA DE TEMPORADA D\'ESTIU
ÀMBIT BCN VEU: BB / CT: PS SS NOTA: AVÍS SM FORA DE TEMPORADA D\'ESTIU',
                'classes_incidents_id' => 9,
            ),
            8 => 
            array (
                'id' => 9,
                'codi' => 'AWAI',
                'descripcio' => 'ACCIDENT EN UN RIU, CANAL, BARRANC, LLAC O EMBASSAMENT',
                'definicio' => 'RECERCA O RESCAT DE PERSONES EN MEDI FLUVIAL, SIGUI EMBASSAMENT, RIU, BARRANC, CANAL, ETC.',
                'instrucions' => 'VEU: BB / CT: BB PS SS AR',
                'classes_incidents_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'codi' => 'AWPO',
                'descripcio' => 'ACCIDENT EN UN POU D\'AIGUA O EN COVES AQUÀTIQUES',
                'definicio' => 'RECERCA DE PERSONA ACCIDENTADA EN POU, COVA, AVENC, O ALTRES CAVITATS SUBTERRÀNIES. ESPELEOLOGIA.',
                'instrucions' => 'VEU: BB / CT: BB PS SS AR',
                'classes_incidents_id' => 8,
            ),
            10 => 
            array (
                'id' => 11,
                'codi' => 'AMR',
                'descripcio' => 'RESCAT DE MUNTANYA',
            'definicio' => 'SALVAMENT DE PERSONES QUE HAN PATIT UN ACCIDENT O S\'HAN PERDUT A LA MUNTANYA (EXCURSIONISTES, ESCALADORS, ETC.)',
                'instrucions' => 'VEU: BB / AVÍS : AR / CT: BB PS AR CT SS SI HI HA FERITS',
                'classes_incidents_id' => 10,
            ),
            11 => 
            array (
                'id' => 12,
                'codi' => 'AMAL',
                'descripcio' => 'ALLAU / ESLLAVISSADA',
                'definicio' => 'AFECTACIONS DE PERSONES PER GRANS DESPRENIMENTS DE NEU O TERRES',
                'instrucions' => 'VEU: BB / AVÍS : AR / CT: BB PS AR CT SS SI HI HA FERITS',
                'classes_incidents_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'codi' => 'AMPO',
                'descripcio' => 'SALVAMENT DE MUNTANYA. ESPELEOLOGIA',
                'definicio' => 'RECERCA DE PERSONA ACCIDENTADA EN POU, COVA, AVENC, O ALTRES CAVITATS SUBTERRÀNIES. ESPELEOLOGIA.',
                'instrucions' => 'NO VEU: BB / CT: BB PS AR CT SS SI HI HA FERITS',
                'classes_incidents_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'codi' => 'ATVML',
                'descripcio' => 'INCIDENT MARÍTIM D\'EMBARCACIONS EN EL MAR A MÉS 200M',
            'definicio' => 'INCIDENT O INCENDI ON ESTIGUI IMPLICADA EMBARCACIÓ, MOTOS NÀUTIQUES, ETC. EN EL MAR LLUNY DE LA COSTA (MÉS DE 200M). TAMBÉ ASSISTÈNCIA MÈDICA A PERSONES QUE ESTIGUIN A L\'EMBARCACIÓ',
                'instrucions' => 'VEU: SM / CT: PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 7,
            ),
            14 => 
            array (
                'id' => 15,
                'codi' => 'ATVMC',
                'descripcio' => 'INCIDENT MARÍTIM D\'EMBARCACIONS EN EL MAR A MENYS 200M',
            'definicio' => 'INCIDENT O INCENDI ON ESTIGUI IMPLICADA EMBARCACIÓ, MOTOS NÀUTIQUES, ETC. EN EL MAR A PROP DE LA COSTA (MENYS 200 METRES). IMPORTANT: EN CAS D\'INCENDI D\'EMBARCACIÓ AMARRADA AL PORT S\'USARÀ LA CLAU IUIV. TAMBÉ ASSISTÈNCIA MÈDICA A PERSONES QUE ESTIGUIN A L\'',
                'instrucions' => 'VEU: SM / AVÍS: PL / CT: BB PS AR CT SS SI HI HA FERITS',
                'classes_incidents_id' => 4,
            ),
            15 => 
            array (
                'id' => 16,
                'codi' => 'ATVAI',
                'descripcio' => 'INCIDENT MARÍTIM D\'EMBARCACIONS EN AIGÜES INTERIORS',
            'definicio' => 'INCIDENT (NO INCENDI) ON ESTIGUI IMPLICADA EMBARCACIÓ, MOTOS NÀUTIQUES, ETC. EN AIGÜES INTERIORS (LLACS, PANTANS, RIUS, ETC.)',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR',
                'classes_incidents_id' => 10,
            ),
            16 => 
            array (
                'id' => 17,
                'codi' => 'ATA',
                'descripcio' => 'ACCIDENT I/O INCENDI AERONAU',
                'definicio' => 'ACCIDENT, INCENDI O AVARIA MECÀNICA DE QUALSEVOL TIPUS D\'AERONAU. TAMBÉ PARAPENT, ALA DELTA, PARACAIGUDISME, ETC.',
                'instrucions' => 'VEU: BB / CT: PS BB SS AR
ÀMBIT BCN VEU: BB / CT: PS SS
ÀMBIT AEROPORT EN CAS D\'ACCIDENT A PISTES DELS AEROPORTS DE GIRONA, REUS O LLEIDA, ASSIGNAR GC DE PISTES. EN CAS ACCIDENT PISTES AEROPORT DE LA SEU ASSIGNAR A LA GUARDIA CIVIL DE LLEIDA (973 35 00 81)',
                'classes_incidents_id' => 9,
            ),
            17 => 
            array (
                'id' => 18,
                'codi' => 'ATFD',
                'descripcio' => 'DESCARRILAMENT DE COMBOI',
                'definicio' => 'ACCIDENT FERROVIARI AMB SORTIDA DE VIA DE FERROCARRILS, CREMALLERA, METRO, ETC.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR
ÀMBIT BCN VEU: BB / CT: PS SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            18 => 
            array (
                'id' => 19,
                'codi' => 'ATFC',
                'descripcio' => 'COL·LISIÓ FERROVIÀRIA AMB PERSONES/OBJECTES/COMBOIS',
                'definicio' => 'COL·LISIÓ AMB PERSONES, OBJECTES O COMBOIS DE FERROCARRIL, METRO O CREMALLERA * TAMBÉ PERSONES QUE ES TIREN A LES VIES.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR
ÀMBIT BCN VEU: BB / CT: PS SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'codi' => 'AREI',
                'descripcio' => 'RISC ESTRUCTURAL INTERIOR',
            'definicio' => 'SITUACIÓ DE RISC A L\'INTERIOR DE CONSTRUCCIÓ O EDIFICACIÓ (HABITATGES, OFICINES, HOSPITAL, INDÚSTRIA, GRUA, ALTRES).',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS
ÀMBIT BCN VEU: BB / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA NO VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'codi' => 'AREE',
                'descripcio' => 'RISC ESTRUCTURAL EXTERIOR',
            'definicio' => 'SITUACIÓ DE RISC PER DESPRENIMENT DE PART D\'UNA CONSTRUCCIÓ O EDIFICACIÓ EXTERIOR (CORNISA, BALCÓ, TENDAL, BASTIDA, FAÇANA, ALTRES).',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS
ÀMBIT BCN VEU: BB / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA NO VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 3,
            ),
            21 => 
            array (
                'id' => 22,
                'codi' => 'ARPM',
                'descripcio' => 'RISC O DESPERFECTES EN PATRIMONI MUNICIPAL',
                'definicio' => 'AFECTACIÓ AMB POSSIBLE SITUACIÓ DE RISC PER A LES PERSONES DERIVADA DE DESPERFECTES EN EL MOBILIARI URBÀ, VORERES, PARCS I JARDINS I D\'ALTRES ELEMENTS DELS QUE SIGUI RESPONSABILITAT MUNICIPAL LA SEVA REPARACIÓ.',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 9,
            ),
            22 => 
            array (
                'id' => 23,
                'codi' => 'AL',
                'descripcio' => 'ACCIDENT LABORAL AMB FERITS I/O MORTS',
            'definicio' => 'LESIONS PROVOCADES PER ACTIVITAT PROFESSIONAL (PRECIPITAT, INTOXICAT, ATRAPAT, ALTRES).',
                'instrucions' => 'VEU: SS / CT: PS BB SS
ÀMBIT BCN VEU: SS / AVÍS: BB NOMÉS SI HI HA ATRAPATS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            23 => 
            array (
                'id' => 24,
                'codi' => 'AS',
                'descripcio' => 'SISME',
                'definicio' => 'SITUACIÓ I AFECTACIONS PROVOCADES PER TERRATRÈMOLS',
                'instrucions' => 'VEU: PC / AVÍS: PL / CT: PS BB AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            24 => 
            array (
                'id' => 25,
                'codi' => 'MMD',
                'descripcio' => 'PERSONA MALALTA A DOMICILI',
                'definicio' => 'PERSONA QUE ES TROBA INDISPOSADA EN UN DOMICILI',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'codi' => 'MMDK',
            'descripcio' => 'PERSONA MALALTA A DOMICILI (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE ES TROBA INDISPOSADA EN UN DOMICILI (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 5,
            ),
            26 => 
            array (
                'id' => 27,
                'codi' => 'MMDT',
                'descripcio' => 'DOLOR TORÀCIC EN DOMICILI',
                'definicio' => 'PERSONA QUE SOL·LICITA ASSISTÈNCIA SANITÀRIA PER DOLOR TORÀCIC EN DOMICILI',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 5,
            ),
            27 => 
            array (
                'id' => 28,
                'codi' => 'MMDTK',
            'descripcio' => 'DOLOR TORÀCIC EN DOMICILI (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE SOL·LICITA ASSISTÈNCIA SANITÀRIA PER DOLOR TORÀCIC EN DOMICILI (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 7,
            ),
            28 => 
            array (
                'id' => 29,
                'codi' => 'MMDTVP',
                'descripcio' => 'DOLOR TORÀCIC EN ESPAI PÚBLIC',
                'definicio' => 'PERSONA QUE SOL·LICITA ASSISTÈNCIA SANITÀRIA PER DOLOR TORÀCIC EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 6,
            ),
            29 => 
            array (
                'id' => 30,
                'codi' => 'MMDTVPK',
            'descripcio' => 'DOLOR TORÀCIC EN ESPAI PÚBLIC (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE SOL·LICITA ASSISTÈNCIA SANITÀRIA PER DOLOR TORÀCIC EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 8,
            ),
            30 => 
            array (
                'id' => 31,
                'codi' => 'MMDI',
                'descripcio' => 'INTOXICACIÓ EN DOMICILI',
                'definicio' => 'SITUACIÓ DE MALALTIA PER INGESTIÓ D\'ALIMENTS, PRODUCTES TÒXICS O DE NETEJA EN DOMICILI.',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESSIBLE',
                'classes_incidents_id' => 6,
            ),
            31 => 
            array (
                'id' => 32,
                'codi' => 'MMDIK',
            'descripcio' => 'INTOXICACIÓ EN DOMICILI (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'SITUACIÓ DE MALALTIA PER INGESTIÓ D\'ALIMENTS, PRODUCTES TÒXICS O DE NETEJA EN DOMICILI. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESSIBLE',
                'classes_incidents_id' => 10,
            ),
            32 => 
            array (
                'id' => 33,
                'codi' => 'MMDPA',
                'descripcio' => 'MALALT MENTAL AGITAT EN DOMICILI',
                'definicio' => 'DEMANDA D\'ASSISTÈNCIA PER UNA PERSONA AMB MALALTIA MENTAL A DOMICILI QUE ESTÀ AGITADA.',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESSIBLE',
                'classes_incidents_id' => 5,
            ),
            33 => 
            array (
                'id' => 34,
                'codi' => 'MMDPN',
                'descripcio' => 'MALALT MENTAL NO AGITAT EN DOMICILI',
                'definicio' => 'DEMANDA D\'ASSISTÈNCIA PER UNA PERSONA AMB MALALTIA MENTAL A DOMICILI QUE NO ESTÀ AGITADA.',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESSIBLE',
                'classes_incidents_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'codi' => 'MMDE',
                'descripcio' => 'PERSONA AMB INTOXICACIÓ ETÍLICA EN DOMICILI',
                'definicio' => 'PERSONA EN ESTAT CRÍTIC I AMB SÍMPTOMES D\'HAVER CONSUMIT EN EXCÉS ALCOHOL EN DOMICILI',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESSIBLE',
                'classes_incidents_id' => 5,
            ),
            35 => 
            array (
                'id' => 36,
                'codi' => 'MMDEK',
            'descripcio' => 'PERSONA AMB INTOXICACIÓ ETÍLICA EN DOMICILI (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA EN ESTAT CRÍTIC I AMB SÍMPTOMES D\'HAVER CONSUMIT EN EXCÉS ALCOHOL EN DOMICILI (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESSIBLE',
                'classes_incidents_id' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'codi' => 'MMDS',
                'descripcio' => 'PERSONA AMB SOBREDOSI EN DOMICILI',
                'definicio' => 'PERSONA EN ESTAT CRÍTIC I AMB SÍMPTOMES D\'HAVER CONSUMIT EN EXCÉS DROGUES EN DOMICILI.',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESSIBLE',
                'classes_incidents_id' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'codi' => 'MMDSK',
            'descripcio' => 'PERSONA AMB SOBREDOSI EN DOMICILI. (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA EN ESTAT CRÍTIC I AMB SÍMPTOMES D\'HAVER CONSUMIT EN EXCÉS DROGUES EN DOMICILI. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESSIBLE',
                'classes_incidents_id' => 9,
            ),
            38 => 
            array (
                'id' => 39,
                'codi' => 'MMEP',
                'descripcio' => 'PERSONA MALALTA EN ESPAI PÚBLIC',
                'definicio' => 'PERSONA QUE ES TROBA INDISPOSADA EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            39 => 
            array (
                'id' => 40,
                'codi' => 'MMEPK',
            'descripcio' => 'PERSONA MALALTA EN ESPAI PÚBLIC (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE ES TROBA INDISPOSADA EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            40 => 
            array (
                'id' => 41,
                'codi' => 'MMEPPL',
                'descripcio' => 'PERSONA MALALTA A LA PLATJA',
                'definicio' => 'PERSONA QUE ES TROBA INDISPOSADA A LA PLATJA',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 9,
            ),
            41 => 
            array (
                'id' => 42,
                'codi' => 'MMEPPLK',
            'descripcio' => 'PERSONA MALALTA A LA PLATJA (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE ES TROBA INDISPOSADA A LA PLATJA. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 9,
            ),
            42 => 
            array (
                'id' => 43,
                'codi' => 'MMEPC',
                'descripcio' => 'ASSISTÈNCIA SANITÀRIA DINS DE VEHICLE',
                'definicio' => 'SUPORT A PERSONA QUE ES DESPLAÇA EN UN VEHICLE I QUE SOBTADAMENT ES TROBA MALALT O INDISPOSAT SENSE PODER CONTINUAR FINS A UN CENTRE D’ASSISTÈNCIA',
                'instrucions' => 'VEU: SS / CT: PS SS
ÀMBIT BCN VEU: SS / AVÍS: PL / CT: PS SS',
                'classes_incidents_id' => 6,
            ),
            43 => 
            array (
                'id' => 44,
                'codi' => 'MMEPCK',
            'descripcio' => 'ASSISTÈNCIA SANITÀRIA DINS DE VEHICLE (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'SUPORT A PERSONA QUE ES DESPLAÇA EN UN VEHICLE I QUE SOBTADAMENT ES TROBA MALALT O INDISPOSAT SENSE PODER CONTINUAR FINS A UN CENTRE D’ASSISTÈNCIA. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: PS SS
ÀMBIT BCN VEU: SS / AVÍS: PL / CT: PS SS',
                'classes_incidents_id' => 7,
            ),
            44 => 
            array (
                'id' => 45,
                'codi' => 'MMEPPA',
                'descripcio' => 'MALALT MENTAL AGITAT EN ESPAI PÚBLIC',
                'definicio' => 'DEMANDA D\'ASSISTÈNCIA PER UNA PERSONA AMB MALALTIA MENTAL QUE ESTÀ AGITADA, EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA.',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            45 => 
            array (
                'id' => 46,
                'codi' => 'MMEPPN',
                'descripcio' => 'MALALT MENTAL NO AGITAT EN ESPAI PÚBLIC',
                'definicio' => 'DEMANDA D\'ASSISTÈNCIA PER UNA PERSONA AMB MALALTIA MENTAL QUE NO ESTÀ AGITADA, EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            46 => 
            array (
                'id' => 47,
                'codi' => 'MMEPS',
                'descripcio' => 'PERSONA AMB SOBREDOSI EN ESPAI PÚBLIC',
                'definicio' => 'PERSONA EN ESTAT CRÍTIC I AMB SÍMPTOMES D\'HAVER CONSUMIT DROGUES EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA.',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            47 => 
            array (
                'id' => 48,
                'codi' => 'MMEPSK',
            'descripcio' => 'PERSONA AMB SOBREDOSI EN ESPAI PÚBLIC (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA EN ESTAT CRÍTIC I AMB SÍMPTOMES D\'HAVER CONSUMIT DROGUES EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            48 => 
            array (
                'id' => 49,
                'codi' => 'MMEPE',
                'descripcio' => 'PERSONA AMB INTOXICACIÓ ETÍLICA EN ESPAI PÚBLIC',
                'definicio' => 'PERSONA EN ESTAT CRÍTIC I AMB SÍMPTOMES D\'HAVER CONSUMIT EN EXCÉS ALCOHOL EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA.',
                'instrucions' => 'VEU: SS / CT: SS',
                'classes_incidents_id' => 7,
            ),
            49 => 
            array (
                'id' => 50,
                'codi' => 'MMEPEK',
            'descripcio' => 'PERSONA AMB INTOXICACIÓ ETÍLICA EN ESPAI PÚBLIC (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA EN ESTAT CRÍTIC I AMB SÍMPTOMES D\'HAVER CONSUMIT EN EXCÉS ALCOHOL EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: SS',
                'classes_incidents_id' => 5,
            ),
            50 => 
            array (
                'id' => 51,
                'codi' => 'MTD',
                'descripcio' => 'PERSONA FERIDA A DOMICILI',
                'definicio' => 'PERSONA QUE HA PATIT LESIONS PER ACCIDENT O TRAUMATISME EN UN DOMICILI.',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 10,
            ),
            51 => 
            array (
                'id' => 52,
                'codi' => 'MTDK',
            'descripcio' => 'PERSONA FERIDA A DOMICILI (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE HA PATIT LESIONS PER ACCIDENT O TRAUMATISME EN UN DOMICILI. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: SS AVÍS BB I PL SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 8,
            ),
            52 => 
            array (
                'id' => 53,
                'codi' => 'MTCAP',
                'descripcio' => 'CENTRE SANITARI QUE DEMANA TRASLLAT DE PACIENT',
                'definicio' => 'CENTRE SANITARI QUE DEMANA TRASLLAT DE PACIENT',
                'instrucions' => 'VEU: SS / CT: SS',
                'classes_incidents_id' => 7,
            ),
            53 => 
            array (
                'id' => 54,
                'codi' => 'MTEPPL',
                'descripcio' => 'PERSONA FERIDA A LA PLATJA',
                'definicio' => 'PERSONA QUE HA PATIT LESIONS PER ACCIDENT O TRAUMATISME A LA PLATJA.',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 3,
            ),
            54 => 
            array (
                'id' => 55,
                'codi' => 'MTEPPLK',
            'descripcio' => 'PERSONA FERIDA A LA PLATJA (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE HA PATIT LESIONS PER ACCIDENT O TRAUMATISME A LA PLATJA. (INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'codi' => 'MTEP',
                'descripcio' => 'PERSONA FERIDA EN ESPAI PÚBLIC',
            'definicio' => 'PERSONA QUE HA PATIT LESIONS PER ACCIDENT O TRAUMATISME EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA. TAMBÉ S\'APLICA PER PERSONES ATRAPADES (P.EX.: GRONXADORS).',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE O HI HA ATRAPATS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            56 => 
            array (
                'id' => 57,
                'codi' => 'MTEPK',
            'descripcio' => 'PERSONA FERIDA EN ESPAI PÚBLIC. (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE HA PATIT LESIONS PER ACCIDENT O TRAUMATISME EN ESPAI PÚBLIC O DE PÚBLICA CONCURRÈNCIA. TAMBÉ S\'APLICA PER PERSONES ATRAPADES (P.EX.: GRONXADORS). INCONSCIENT / NO RESPIRA)',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE O HI HA ATRAPATS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            57 => 
            array (
                'id' => 58,
                'codi' => 'MTEPP',
                'descripcio' => 'PRECIPITAT EN ESPAI PÚBLIC',
                'definicio' => 'PERSONA QUE HA PATIT LESIONS PER CAIGUDA DES D\'UNA ALÇADA CONSIDERABLE EN ESPAI PÚBLIC. * PERSONES QUE ES TIREN A LES VIES DEL TREN ES CODIFICARAN COM A ATFC"."',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            58 => 
            array (
                'id' => 59,
                'codi' => 'MTEPPK',
            'descripcio' => 'PRECIPITAT EN ESPAI PÚBLIC (INCONSCIENT / NO RESPIRA)',
            'definicio' => 'PERSONA QUE HA PATIT LESIONS PER CAIGUDA DES D\'UNA ALÇADA CONSIDERABLE EN ESPAI PÚBLIC.(INCONSCIENT / NO RESPIRA) * PERSONES QUE ES TIREN A LES VIES DEL TREN ES CODIFICARAN COM A ATFC"."',
                'instrucions' => 'VEU: SS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            59 => 
            array (
                'id' => 60,
                'codi' => 'MDC',
                'descripcio' => 'DEMANDA DE CONSELL MÈDIC',
                'definicio' => 'DEMANDA CONSELL MÈDIC',
                'instrucions' => 'VEU: SS / CT: SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            60 => 
            array (
                'id' => 61,
                'codi' => 'MNOCAP',
                'descripcio' => 'CAP TANCAT',
                'definicio' => 'PERSONA QUE HA ANAT AL CAP I L\'HA TROBAT TANCAT',
                'instrucions' => 'VEU: SS / CT: SS PREGUNTAR NOMÉS NOM I TELÈFON',
                'classes_incidents_id' => 4,
            ),
            61 => 
            array (
                'id' => 62,
                'codi' => 'MCRC',
                'descripcio' => 'DESFIBRIL·LADORS',
                'definicio' => 'DESFIBRIL·LADORS',
                'instrucions' => 'NO VEU: SS / CT: SS',
                'classes_incidents_id' => 7,
            ),
            62 => 
            array (
                'id' => 63,
                'codi' => 'MTO',
                'descripcio' => 'TRASLLAT ÒRGANS',
                'definicio' => 'ACOMPANYAMENTS D\'ÒRGANS I EQUIP MÈDIC A CENTRE D\'URGÈNCIES I/O AEROPORT/AERÒDROM.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 3,
            ),
            63 => 
            array (
                'id' => 64,
                'codi' => 'IUEC',
                'descripcio' => 'FOC CONTENIDOR',
            'definicio' => 'FUM O FOC EN CONTENIDOR A LA VIA PÚBLICA (PAPER=BLAU, VIDRE=VERD, PLÀSTIC=GROC, ORGÀNIC=MARRÓ, REBUIG=GRIS).',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 3,
            ),
            64 => 
            array (
                'id' => 65,
                'codi' => 'IUEP',
                'descripcio' => 'FOC PAPERERA',
                'definicio' => 'FUM O FOC EN PAPERERA A LA VIA PÚBLICA.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 8,
            ),
            65 => 
            array (
                'id' => 66,
                'codi' => 'IUEV',
                'descripcio' => 'VEHICLE A L\' AIRE LLIURE',
            'definicio' => 'FUM O FOC DE VEHICLE (TURISME, CAMIÓ, MOTO, BUS) A LA VIA PÚBLICA, EN UN SOLAR O EN UN PÀRKING OBERT. NO EN ESPAIS COBERTS O SOTERRATS.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            66 => 
            array (
                'id' => 67,
                'codi' => 'IUEB',
                'descripcio' => 'FOC BÚSTIA',
                'definicio' => 'FUM O FOC EN BÚSTIA A LA VIA PÚBLICA',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PSÀMBIT BCN VEU: BB / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            67 => 
            array (
                'id' => 68,
                'codi' => 'IUEF',
                'descripcio' => 'FOGUERA EN ESPAI PÚBLIC AMB RISC',
                'definicio' => 'FOGUERA EN ESPAIS PÚBLICS QUE PRESENTA ALGUN TIPUS DE PERILL. NO S\'ATENEN TRUCADES PER SABER SI ES DISPOSA D\'AUTORITZACIÓ.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 4,
            ),
            68 => 
            array (
                'id' => 69,
                'codi' => 'IUES',
                'descripcio' => 'FOC SOLAR',
                'definicio' => 'FUM O FOC EN SOLAR.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR CT SS SI HI HA FERITS
ÀMBIT BCN VEU: BB / CT: PS AR CT SS SI HI HA FERITS',
                'classes_incidents_id' => 4,
            ),
            69 => 
            array (
                'id' => 70,
                'codi' => 'IUEA',
                'descripcio' => 'FOC ARBRE',
                'definicio' => 'ARBRE CREMANT A LA VIA PÚBLICA O ZONA AJARDINADA.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 5,
            ),
            70 => 
            array (
                'id' => 71,
                'codi' => 'IUEM',
                'descripcio' => 'FOC MATOLLS VIA PÚBLICA',
                'definicio' => 'FOC VEGETAL A LA VIA PÚBLICA. PODEN ESTAR AL COSTAT DE VIALS O JARDINS.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR
ÀMBIT VALLVIDRERA NO VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'codi' => 'IUEE',
                'descripcio' => 'FOC INSTAL·LACIONS ELÈCTRIQUES EXTERIORS',
            'definicio' => 'FOC, FUM O ESPURNES EN INSTAL·LACIONS ELÈCTRIQUES EN VIA PÚBLICA (QUADRES DE SEMÀFORS, TRANSFORMADORS EXTERIORS, PALS DE LLUM).',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            72 => 
            array (
                'id' => 73,
                'codi' => 'IUEG',
                'descripcio' => 'INCENDI EXTERIOR DE GAS CANALITZAT',
                'definicio' => 'INCENDI DE GAS CANALITZAT A L\'AIRE LLIURE',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR
ÀMBIT BCN VEU: BB / CT: PS SS AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            73 => 
            array (
                'id' => 74,
                'codi' => 'IUER',
                'descripcio' => 'FOC CLAVEGUERAM / REIXA',
                'definicio' => 'FUM O FOC PROVINENT DEL SUBSÒL QUE APAREIX PER ALGUNA REIXA. POT TRACTAR-SE TAMBÉ D\'ALGUNA INSTAL·LACIÓ O RESPIRADOR"."',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS
ÀMBIT BCN VEU: BB / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            74 => 
            array (
                'id' => 75,
                'codi' => 'IUEXX',
                'descripcio' => 'ALTRES FOCS EXTERIORS',
                'definicio' => 'ALTRES INCENDIS EXTERIORS NO DESCRITS ANTERIORMENT.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA NO VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 8,
            ),
            75 => 
            array (
                'id' => 76,
                'codi' => 'IUIH',
                'descripcio' => 'INCENDI D\'HABITATGE',
            'definicio' => 'ES VEUEN FLAMES O MOLT DE FUM PER LES FINESTRES O ALS ELEMENTS COMUNS DE L\'EDIFICI (CELOBERT, ESCALES, ETC.)',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 9,
            ),
            76 => 
            array (
                'id' => 77,
                'codi' => 'IUIHF',
                'descripcio' => 'FUM HABITATGE',
            'definicio' => 'OLOR DE CREMAT O PRESÈNCIA DE POC FUM. IMPORTANT: SI HI HA MOLT DE FUM SERÀ INCENDI D\'HABITATGE (IUIH)',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 4,
            ),
            77 => 
            array (
                'id' => 78,
                'codi' => 'IUIHA',
                'descripcio' => 'ALARMA DE FOC EN HABITAGE',
                'definicio' => 'ACTIVACIONS D\'ALARMES D\'INCENDI D\'HABITAGE',
                'instrucions' => 'VEU: BB / CT: BB PS',
                'classes_incidents_id' => 9,
            ),
            78 => 
            array (
                'id' => 79,
                'codi' => 'IUIHO',
                'descripcio' => 'OLLA AL FOC',
                'definicio' => 'RISC D\'INCENDI PER TENIR UNA OLLA AL FOC I NO PODER ACCEDIR A LA VIVENDA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS
ÀMBIT BCN VEU: BB / CT: PS',
                'classes_incidents_id' => 9,
            ),
            79 => 
            array (
                'id' => 80,
                'codi' => 'IUIHE',
                'descripcio' => 'FOC ELECTRODOMÈSTIC',
                'definicio' => 'FOC, FUM O ESPURNES EN UN ELECTRODOMÈSTIC.',
                'instrucions' => 'VEU: BB / AV ÀMBIT BCN VEU: BB / CT: PS CT SS SI HI HA FERITS ÍS: PL / CT: BB PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 9,
            ),
            80 => 
            array (
                'id' => 81,
                'codi' => 'IUIL',
                'descripcio' => 'FOC LOCAL',
                'definicio' => 'SURTEN FLAMES O MOLT DE FUM D\'UN LOCAL.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 6,
            ),
            81 => 
            array (
                'id' => 82,
                'codi' => 'IUILF',
                'descripcio' => 'FUM LOCAL',
            'definicio' => 'OLOR DE CREMAT O PRESÈNCIA DE POC FUM. IMPORTANT: SI HI HA MOLT FUM SERÀ FOC LOCAL (IUIL)',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 8,
            ),
            82 => 
            array (
                'id' => 83,
                'codi' => 'IUILA',
                'descripcio' => 'ALARMA DE FOC EN LOCAL',
                'definicio' => 'ACTIVACIÓ D\'ALARMES D\'INCENDI DE LOCAL * SI L\'ALARMA D\'INCENDI ÉS EN UNA INDÚSTRIA ES TIPIFICARÀ C OM A IUIM',
                'instrucions' => 'VEU: BB / CT: BB PS',
                'classes_incidents_id' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'codi' => 'IUIE',
                'descripcio' => 'INCENDI EN EDIFICI',
                'definicio' => 'INCENDI D\' HOTELS, CENTRES DOCENTS, EDIFICIS OFICIALS DE LES ADMINISTRACIONS PÚBLIQUES, OFICINES, MASIES O GRANGES, ETC.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 7,
            ),
            84 => 
            array (
                'id' => 85,
                'codi' => 'IUIEH',
                'descripcio' => 'INCENDI EN EDIFICI D\'ÚS ASSISTENCIAL',
            'definicio' => 'INCENDI EN EDIFICI D\'ÚS HOSPITALARI (HOSPITALS, CLÍNIQUES, GERIÀTRICS, PSIQUIÀTRICS). EN GENERAL, EDIFICIS AMB CLARES DIFICULTATS D\'EVACUACIÓ.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 4,
            ),
            85 => 
            array (
                'id' => 86,
                'codi' => 'IUIES',
                'descripcio' => 'INCENDI EN EDIFICI SINGULAR',
                'definicio' => 'INCENDI EN EDIFICIS DE MÉS DE 50 METRES O 16 PLANTES, PAVELLONS ESPORTIUS, MONUMENTS AMB AFLUÈNCIA DE TURISTES, CENTRES PENITENCIARIS, ETC.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 10,
            ),
            86 => 
            array (
                'id' => 87,
                'codi' => 'IUIA',
                'descripcio' => 'INCENDI APARCAMENT',
                'definicio' => 'FOC EN PÀRKINGS INTERIORS I/O SOTA RASANT.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 6,
            ),
            87 => 
            array (
                'id' => 88,
                'codi' => 'IUIM',
                'descripcio' => 'INCENDI D\'INDÚSTRIA O MAGATZEM',
                'definicio' => 'INCENDI O ALARMA D\'INCENDI A LES INSTAL·LACIONS D\'UNA INDÚSTRIA O MAGATZEM.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR
ÀMBIT BCN VEU: BB / CT: PS SS AR',
                'classes_incidents_id' => 3,
            ),
            88 => 
            array (
                'id' => 89,
                'codi' => 'IUIT',
                'descripcio' => 'INCENDI TÚNEL',
                'definicio' => 'FUM O FOC EN QUALSEVOL TRAM VIARI SOTERRAT. ACCIDENTS DE TRÀNSIT AMB INCENDI.',
                'instrucions' => 'VEU: BB / CT: BB PS SS NOTA: AVÍS A POLICIA LOCAL EN ÀMBIT URBÀ
ÀMBIT BCN VEU: BB / CT: PS SS
ÀMBIT VALLVIDRERA VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 6,
            ),
            89 => 
            array (
                'id' => 90,
                'codi' => 'IUIF',
                'descripcio' => 'FOC METRO O FERROVIARI',
                'definicio' => 'FOC ALS VAGONS O A LES INSTAL·LACIONS DEL METRO O FERROCARRIL',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 8,
            ),
            90 => 
            array (
                'id' => 91,
                'codi' => 'IUIV',
                'descripcio' => 'INCENDI VAIXELL',
            'definicio' => 'FOC O MOLT DE FUM EN UN VAIXELL O EMBARCACIÓ AMARRADA O DINS LES INSTAL·LACIONS DEL PORT. TAMBÉ EN AIGÜES INTERIORS (RIUS, ESTANYS, ETC)',
                'instrucions' => 'VEU: BB / AVÍS: SM PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / AVÍS: SM / CT: PS SS',
                'classes_incidents_id' => 2,
            ),
            91 => 
            array (
                'id' => 92,
                'codi' => 'IUIEI',
                'descripcio' => 'FOC ELÈCTRIC INTERIOR',
            'definicio' => 'FOC, FUM O ESPURNES EN INSTAL·LACIONS ELÈCTRIQUES (EXEMPLES: COMPTADORS, TRANFORMADORS) EN ESPAIS TANCATS.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 4,
            ),
            92 => 
            array (
                'id' => 93,
                'codi' => 'IUIXX',
                'descripcio' => 'ALTRES FOCS INTERIORS',
                'definicio' => 'ALTRES TIPUS DE FOCS INTERIORS D\'EDIFICIS.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 2,
            ),
            93 => 
            array (
                'id' => 94,
                'codi' => 'IVAF',
                'descripcio' => 'COLUMNA DE FUM',
                'definicio' => 'COLUMNA DE FUM PROPERA A TERRENYS AGRÍCOLES O DE CULTIU.',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PS
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 7,
            ),
            94 => 
            array (
                'id' => 95,
                'codi' => 'IVAC',
                'descripcio' => 'INCENDIS DE CULTIUS',
                'definicio' => 'INCENDIS EN ZONES DE CULTIUS.',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PS
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 3,
            ),
            95 => 
            array (
                'id' => 96,
                'codi' => 'IVAM',
                'descripcio' => 'CREMA DE MARGES AGRÍCOLES O DE CUNETES',
                'definicio' => 'CREMA DE MARGES AGRÍCOLES O DE CUNETES',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PT
ÀMBIT BCN VEU: BB / CT: PT AR',
                'classes_incidents_id' => 10,
            ),
            96 => 
            array (
                'id' => 97,
                'codi' => 'IVAR',
                'descripcio' => 'CREMA DE ROSTOLLS',
                'definicio' => 'CREMA DE ROSTOLLS.',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PS
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 10,
            ),
            97 => 
            array (
                'id' => 98,
                'codi' => 'IVAXX',
                'descripcio' => 'INCENDIS DE VEGETACIÓ EN TERRENYS AGRÍCOLES',
                'definicio' => 'INCENDIS DE VEGETACIÓ EN TERRENYS AGRÍCOLES',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PS
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 9,
            ),
            98 => 
            array (
                'id' => 99,
                'codi' => 'IVFF',
                'descripcio' => 'COLUMNA DE FUM',
                'definicio' => 'COLUMNA DE FUM PROPERA A MASSA FORESTAL.',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PS
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 3,
            ),
            99 => 
            array (
                'id' => 100,
                'codi' => 'IVFA',
                'descripcio' => 'INCENDIS DE VEGETACIÓ FORESTAL ARBRADA',
                'definicio' => 'FOC A ZONA FORESTAL ARBRADA, ENCARA QUE SIGUI DE POCA SUPERFÍCIE.',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PS
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 3,
            ),
            100 => 
            array (
                'id' => 101,
                'codi' => 'IVFM',
                'descripcio' => 'INCENDIS DE VEGETACIÓ FORESTAL: MATOLLS',
                'definicio' => 'CREMEN MATOLLS A ZONA FORESTAL.',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PS
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 7,
            ),
            101 => 
            array (
                'id' => 102,
                'codi' => 'IVFXX',
                'descripcio' => 'INCENDIS DE VEGETACIÓ EN TERRENYS FORESTALS AMB ALTRES TIPUS DE VEGETACIÓ O TIPUS DE FOC.',
                'definicio' => 'INCENDIS DE VEGETACIÓ TERRENYS FORESTALS AMB ALTRES TIPUS DE VEGETACIÓ.',
                'instrucions' => 'NO VEU: BB / AVÍS: AR PL / CT: BB AR PS
ÀMBIT BCN VEU: BB / CT: PS AR',
                'classes_incidents_id' => 9,
            ),
            102 => 
            array (
                'id' => 103,
                'codi' => 'IRIE',
                'descripcio' => 'LÍNIA ELÈCTRICA AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL',
                'definicio' => 'LÍNIA ELÈCTRICA AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 7,
            ),
            103 => 
            array (
                'id' => 104,
                'codi' => 'IRIA',
                'descripcio' => 'FUM O FOC ABOCADOR QUE SUPOSA UN RISC FORESTAL',
                'definicio' => 'FUM O FOC ABOCADOR QUE SUPOSA UN RISC FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR BB PS',
                'classes_incidents_id' => 7,
            ),
            104 => 
            array (
                'id' => 105,
                'codi' => 'IRIPA',
                'descripcio' => 'PUNT D\'AIGUA AMB DEFICIÈNCIES QUE IMPEDEIXEN EL SEU ÚS EN CAS D\'INCENDI FORESTAL',
                'definicio' => 'PUNT D\'AIGUA AMB DEFICIÈNCIES QUE IMPEDEIXEN EL SEU ÚS EN CAS D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 4,
            ),
            105 => 
            array (
                'id' => 106,
                'codi' => 'IRIAR',
                'descripcio' => 'ÀREA RECREATIVA AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL',
                'definicio' => 'ÀREA RECREATIVA AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 9,
            ),
            106 => 
            array (
                'id' => 107,
                'codi' => 'IRICG',
                'descripcio' => 'CÀMPING AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL',
                'definicio' => 'CÀMPING AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 10,
            ),
            107 => 
            array (
                'id' => 108,
                'codi' => 'IRIU',
                'descripcio' => 'URBANITZACIÓ AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL',
                'definicio' => 'URBANITZACIÓ AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 3,
            ),
            108 => 
            array (
                'id' => 109,
                'codi' => 'IRIC',
                'descripcio' => 'CARRETERA AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC FORESTAL',
                'definicio' => 'CARRETERA AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 9,
            ),
            109 => 
            array (
                'id' => 110,
                'codi' => 'IRIF',
                'descripcio' => 'FERROCARRIL AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC FORESTAL',
                'definicio' => 'FERROCARRIL AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 4,
            ),
            110 => 
            array (
                'id' => 111,
                'codi' => 'IRICF',
                'descripcio' => 'CAMINS AMB DEFICIÈNCIES QUE PUGUIN COMPORTAR RISC FORESTAL',
                'definicio' => 'CAMINS AMB DEFICIÈNCIES QUE DIFICULTEN LA PREVENCIÓ I L\'EXTINCIÓ DELS INCENDIS',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 10,
            ),
            111 => 
            array (
                'id' => 112,
                'codi' => 'IRPF',
                'descripcio' => 'PERSONES QUE FAN UNA FOGUERA AMB RISC FORESTAL.',
                'definicio' => 'PERSONES QUE FAN UNA FOGUERA EN ZONA O PERIODE PROHIBIT A PROP DE MASSA FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 3,
            ),
            112 => 
            array (
                'id' => 113,
                'codi' => 'IRPB',
                'descripcio' => 'RISC D\'INCENDI FORESTAL PER BARBACOA.',
                'definicio' => 'PERSONES QUE FAN UNA BARBACOA EN ZONA O PERIODE PROHIBIT AMB RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 6,
            ),
            113 => 
            array (
                'id' => 114,
                'codi' => 'IRPTF',
                'descripcio' => 'TREBALLS FORESTALS A L\'ESTIU QUE COMPORTIN RISC D\'INCENDI FORESTAL',
                'definicio' => 'TREBALLS FORESTALS A L\'ESTIU QUE COMPORTIN RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 9,
            ),
            114 => 
            array (
                'id' => 115,
                'codi' => 'IRPE',
                'descripcio' => 'PERSONES AMB EINES AMB RISC D\'INCENDI FORESTAL',
                'definicio' => 'PERSONES REALITZANT ACTIVITATS AMB EINES QUE COMPORTIN RISC D\'INCENDI FORESTAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 3,
            ),
            115 => 
            array (
                'id' => 116,
                'codi' => 'IRPFA',
                'descripcio' => 'LLANÇAMENT FOCS D\'ARTIFICI',
                'definicio' => 'LLANÇAMENT DE FOCS D\'ARTIFICI A PROP DE ZONA O MASSA FORESTAL.',
                'instrucions' => 'VEU: AR / AVÍS: PL / CT: AR PS',
                'classes_incidents_id' => 3,
            ),
            116 => 
            array (
                'id' => 117,
                'codi' => 'FAC',
                'descripcio' => 'FUITA D\'AIGUA EN VIA PÚBLICA',
            'definicio' => 'FUITA D\'AIGUA INCONTROLADA A LA VIA PÚBLICA. NO CONFONDRE AMB METEREOLOGIA (PLUJA)',
                'instrucions' => 'VEU: PL CT: BB
ÀMBIT BCN VEU: PL',
                'classes_incidents_id' => 9,
            ),
            117 => 
            array (
                'id' => 118,
                'codi' => 'FAI',
                'descripcio' => 'INUNDACIÓ',
            'definicio' => 'INUNDACIONS EN LOCALS, PISOS, COBERTES I ESPAIS TANCATS. NO CONFONDRE AMB METEREOLOGIA (PLUJA)',
                'instrucions' => 'NO VEU: BB / CT: BB AR
ÀMBIT BCN VEU: BB / CT: AR',
                'classes_incidents_id' => 5,
            ),
            118 => 
            array (
                'id' => 119,
                'codi' => 'FGE',
                'descripcio' => 'FUITA DE GAS EN ESPAI PÚBLIC',
                'definicio' => 'AFECTACIONS PER FUITES EN CONDUCCIONS DE GAS A L\'ESPAI PÚBLIC.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS CT SS SI HI HA FERITS
ÀMBIT BCN VEU: BB / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            119 => 
            array (
                'id' => 120,
                'codi' => 'FGI',
                'descripcio' => 'FUITA DE GAS EN EDIFICI / HABITATGE',
                'definicio' => 'AFECTACIONS PER FUITES EN CONDUCCIONS DE GAS A L\'INTERIOR D\'EDIFICIS O HABITATGES.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS CT SS SI HI HA FERITS
ÀMBIT BCN VEU: BB / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            120 => 
            array (
                'id' => 121,
                'codi' => 'FMEP',
                'descripcio' => 'FUITA DE MATÈRIA PERILLOSA EN ESPAI PÚBLIC',
                'definicio' => 'AFECTACIONS PER FUITES EN CISTERNES, DIPÒSITS DE MATÈRIES PERILLOSES EN ESPAIS PÚBLICS. IMPORTANT: ON ÉS LA FUITA, TIPUS DE PRODUCTE I TIPUS DE RECIPIENT, PERSONA DE CONTACTE EMPRESA IMPLICADA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR
ÀMBIT BCN VEU: BB / CT: PS SS AR
ÀMBIT VALLVIDRERA VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 8,
            ),
            121 => 
            array (
                'id' => 122,
                'codi' => 'FMI',
                'descripcio' => 'FUITA DE PRODUCTE TÒXIC EN INDÚSTRIA',
                'definicio' => 'INCIDENT EN INDÚSTRIA AMB FUITA DE PRODUCTE TÒXIC. IMPORTANT: ON ÉS LA FUITA, TIPUS DE PRODUCTE I TIPUS DE RECIPIENT, PERSONA DE CONTACTE I EMPRESA IMPLICADA. ',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR
ÀMBIT BCN VEU: BB / CT: PS SS AR',
                'classes_incidents_id' => 7,
            ),
            122 => 
            array (
                'id' => 123,
                'codi' => 'FPS',
                'descripcio' => 'PROVA DE SIRENES',
                'definicio' => 'RECEPCIÓ DE LA PRIMERA TRUCADA RELACIONADA AMB EL SIMULACRE D\'ACTIVACIÓ DE SIRENES DE RISC QUÍMIC.',
                'instrucions' => 'VEU: CECAT / CT: BB PS SS AR',
                'classes_incidents_id' => 4,
            ),
            123 => 
            array (
                'id' => 124,
                'codi' => 'FOE',
                'descripcio' => 'RECONEIXEMENT D\'OLORS SOSPITOSES EN ESPAI EXTERIOR',
                'definicio' => 'ES PERCEP OLOR QUE ES POT INTERPRETAR PERILLOSA. POT SER OLOR DE GAS EN ESPAI EXTERIOR I TAMBÉ S\'EMPRARÀ PER POSSIBLES OLORS QUÍMICS A LA ZONA DE TARRAGONA',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB AR CT SS SI HI HA FERITS
ÀMBIT BCN VEU: BB / CT: AR CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            124 => 
            array (
                'id' => 125,
                'codi' => 'FOI',
                'descripcio' => 'RECONEIXEMENTS D\'OLORS SOSPITOSES EN ESPAI INTERIOR',
                'definicio' => 'ES PERCEP OLOR QUE ES POT INTERPRETAR PERILLOSA EN ESPAI INTERIOR. POT SER OLOR DE GAS.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB AR CT SS SI HI HA FERITS
ÀMBIT BCN VEU: BB / CT: AR CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            125 => 
            array (
                'id' => 126,
                'codi' => 'FCV',
                'descripcio' => 'VEHICLE AMB FUITA DE COMBUSTIBLE O INFLAMABLE.',
                'definicio' => 'VEHICLE ESTACIONAT QUE PERD COMBUSTIBLE I ELS SEUS CONDUCTORS NO ES TROBEN AL LLOC DE L\'INCIDENT.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR
ÀMBIT BCN VEU: BB / CT: PS AR
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA NO VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 3,
            ),
            126 => 
            array (
                'id' => 127,
                'codi' => 'FB',
                'descripcio' => 'GRAN EMERGÈNCIA BIOLÒGICA',
                'definicio' => 'FUITA / CONTAMINACIÓ DE PRODUCTE AMB RISC DE CONTAMINACIÓ BIOLÒGICA. IMPORTANT: DADES DEL PRODUCTE, PERSONA DE CONTACTE I EMPRESA IMPLICADA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR
ÀMBIT BCN VEU: BB / CT: PS SS AR',
                'classes_incidents_id' => 9,
            ),
            127 => 
            array (
                'id' => 128,
                'codi' => 'FR',
                'descripcio' => 'FUITA DE PRODUCTE RADIOACTIU',
                'definicio' => 'FUITA DE PRODUCTE RADIOACTIU. IMPORTANT: DADES DEL PRODUCTE, PERSONA DE CONTACTE I EMPRESA IMPLICADA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB PS SS AR
ÀMBIT BCN VEU: BB / CT: PS SS',
                'classes_incidents_id' => 2,
            ),
            128 => 
            array (
                'id' => 129,
                'codi' => 'DEPPP',
                'descripcio' => 'MOLÈSTIES PER PERSONES EN ESPAIS PÚBLICS + DE 5 PERSONES',
                'definicio' => 'COMPORTAMENTS INCÍVICS DE PERSONES EN ESPAIS OBERTS QUE CAUSEN MOLÈSTIES A VEÏNS O A ALTRES PERSONES COM XIVARRI, CÀNTICS, JOC DE MENORS, ETC.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            129 => 
            array (
                'id' => 130,
                'codi' => 'DEPPM',
                'descripcio' => 'MOLÈSTIES PER PERSONES EN ESPAIS PÚBLICS 1-5 PERSONES',
                'definicio' => 'COMPORTAMENTS INCÍVICS DE PERSONES EN ESPAIS OBERTS QUE CAUSEN MOLÈSTIES A VEÏNS O A ALTRES PERSONES COM XIVARRI, CÀNTICS, JOC DE MENORS, ETC.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            130 => 
            array (
                'id' => 131,
                'codi' => 'DEPO',
                'descripcio' => 'MOLÈSTIES PER OBRES / TREBALLS EN ESPAIS PÚBLICS',
                'definicio' => 'MOLÈSTIES ALS VEÏNS PROVOCADES PER TREBALLS QUE S\'EFECTUEN EN ESPAIS OBERTS.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            131 => 
            array (
                'id' => 132,
                'codi' => 'DEPAL',
                'descripcio' => 'CONSUM D\'ALCOHOL EN ESPAI PÚBLIC',
                'definicio' => 'GRUPS DE PERSONES REUNIDES EN ESPAIS PÚBLICS PER A CONSUMIR ALCOHOL CAUSANT MOLÈSTIES ALS VEÏNS.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            132 => 
            array (
                'id' => 133,
                'codi' => 'DEPNV',
                'descripcio' => 'NETEJAVIDRES I ALTRES ACTIVITATS SEMÀFOR',
                'definicio' => 'PERSONA O GRUP DE PERSONES QUE CAUSEN MOLÈSTIES ALS CONDUCTORS DE VEHICLES ATURATS ALS SEMÀFORS, EN INTENTAR NETEJAR ELS VIDRES DEL COTXE O AMB VENDA DE PRODUCTES.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            133 => 
            array (
                'id' => 134,
                'codi' => 'DEPLO',
                'descripcio' => 'LLANÇAMENT D\'OBJECTES A ESPAI PÚBLIC',
                'definicio' => 'PROVOCAR MOLÈSTIES O POSAR EN PERILL LA INTEGRITAT FÍSICA DE LES PERSONES LLENÇANT OBJECTES DES D\'UN DOMICILI A LA VIA PÚBLICA.',
                'instrucions' => 'VEU: PL / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            134 => 
            array (
                'id' => 135,
                'codi' => 'DEPPR',
                'descripcio' => 'PROSTITUCIÓ EN ESPAIS PÚBLICS',
                'definicio' => 'MOLÈSTIES PROVOCADES A VEÏNS O A ALTRES PERSONES PER EXERCIR L\'ACTIVITAT DE PROSTITUCIÓ EN ESPAIS PÚBLICS.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 4,
            ),
            135 => 
            array (
                'id' => 136,
                'codi' => 'DEPOK',
                'descripcio' => 'OCUPACIÓ NO AUTORITZADA D\'ESPAI PÚBLIC',
            'definicio' => 'AFECTACIONS PER OCUPACIÓ D\'ESPAIS PÚBLICS SENSE AUTORITZACIÓ. (VORERES, CALÇADES, ETC.,) (NO OCUPACIÓ DE VIVENDES)',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            136 => 
            array (
                'id' => 137,
                'codi' => 'DEPVC',
                'descripcio' => 'VEHICLE AMB LES CLAUS AL PANY',
                'definicio' => 'RECOLLIR LA CLAU DE VEHICLE ESTACIONAT QUE, POSSIBLEMENT PER DISTRACCIÓ DEL SEU CONDUCTOR, HA QUEDAT POSADA AL CONTACTE, PORTA, ETC.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            137 => 
            array (
                'id' => 138,
                'codi' => 'DEPRA',
                'descripcio' => 'RISC DE CAIGUDA D\'ARBRE',
            'definicio' => 'ARBRE QUE ESTÀ PUNT DE CAURE O QUE HAVENT CAIGUT GENERA UN RISC ADDICIONAL (A SOBRE DE VEHICLES, DE TANQUES, DE CABLES ELÈCTRICS,...)',
                'instrucions' => 'VEU: PL / CT: BB',
                'classes_incidents_id' => 1,
            ),
            138 => 
            array (
                'id' => 139,
                'codi' => 'DEPRS',
                'descripcio' => 'RISC DE CAIGUDA DE SENYAL',
                'definicio' => 'SENYAL EN ZONA URBANA QUE PRESENTA ALGUN TIPUS DE RISC PER POSSIBLE CAIGUDA.',
                'instrucions' => 'VEU: PL / CT: BB
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            139 => 
            array (
                'id' => 140,
                'codi' => 'DEPXX',
                'descripcio' => 'ALTRES ACTIVITATS I MOLÈSTIES EN ESPAIS PÚBLICS',
                'definicio' => 'MOLÈSTIES PROVOCADES A VEÏNS O ALTRES PERSONES PER EXERCIR ALTRES ACTIVITATS MOLESTES, NO TIPIFICADES, EN ESPAIS PÚBLICS.',
                'instrucions' => 'VEU: PL / CT: PS AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            140 => 
            array (
                'id' => 141,
                'codi' => 'DEPFN',
                'descripcio' => 'MOLÈSTIES PER SOROLLS DE FESTA EN MEDI NATURAL',
                'definicio' => 'MOLÈSTIES CAUSADES ALS VEÏNS PEL VOLUM DE LA MÚSICA O SOROLLS DELS ASSISTENTS D\'UNA FESTA EN MEDI NATURAL, AUTORITZADA O NO.',
                'instrucions' => 'VEU: PL / CT: PS AR',
                'classes_incidents_id' => 1,
            ),
            141 => 
            array (
                'id' => 142,
                'codi' => 'DEPFU',
                'descripcio' => 'MOLÈSTIES PER SOROLLS DE FESTA EN NUCLI URBÀ',
                'definicio' => 'MOLÈSTIES CAUSADES ALS VEÏNS PEL VOLUM DE LA MÚSICA O SOROLLS DELS ASSISTENTS D\'UNA FESTA EN NUCLI URBÀ. AUTORITZADA O NO.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 8,
            ),
            142 => 
            array (
                'id' => 143,
                'codi' => 'DEPVB',
                'descripcio' => 'VENDA AMBULANT DE BEGUDES',
                'definicio' => 'VENDA NO AUTORITZADA DE BEGUDES EN ESPAI PÚBLIC.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 8,
            ),
            143 => 
            array (
                'id' => 144,
                'codi' => 'DEPVCD',
                'descripcio' => 'VENDA AMBULANT DE CD/DVD',
                'definicio' => 'VENDA IL·LEGAL DE CD\'S DE MÚSICA O PEL·LÍCULES DE DVD EN ESPAIS PÚBLICS.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 10,
            ),
            144 => 
            array (
                'id' => 145,
                'codi' => 'DEPVXX',
                'descripcio' => 'VENDA AMBULANT D\'ALTRES TIPUS',
                'definicio' => 'VENDA IL·LEGAL DE QUALSEVOL TIPUS DE PRODUCTE, NO TIPIFICAT, QUE S\'EFECTUA EN ESPAIS PÚBLICS.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            145 => 
            array (
                'id' => 146,
                'codi' => 'DEPCRR',
                'descripcio' => 'INCIDÈNCIA AMB CONTENIDOR DE RUNA AMB RISC',
                'definicio' => 'INCIDÈNCIA AMB CONTENIDOR DE RUNA EN ESPAIS PÚBLICS AMB RISC.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 5,
            ),
            146 => 
            array (
                'id' => 147,
                'codi' => 'DEPCRS',
                'descripcio' => 'INCIDÈNCIA AMB CONTENIDORS DE RUNA SENSE RISC',
                'definicio' => 'INCIDÈNCIA AMB CONTENIDORS DE RUNA EN ESPAIS PÚBLICS SENSE RISC.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 2,
            ),
            147 => 
            array (
                'id' => 148,
                'codi' => 'DEPAU',
                'descripcio' => 'ACAMPADA DINS DEL NUCLI URBÀ',
                'definicio' => 'ACAMPADA DE PERSONES EN ESPAIS PÚBLICS DINTRE DEL NUCLI URBÀ, ON NO ESTIGUI PERMÈS. AMB O SENSE ESTRIS D\'ACAMPADA.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 10,
            ),
            148 => 
            array (
                'id' => 149,
                'codi' => 'DEPAFU',
                'descripcio' => 'ACAMPADA FORA NUCLI URBÀ',
                'definicio' => 'ACAMPADA DE PERSONES EN ESPAIS PÚBLICS, FORA DEL NUCLI URBÀ, ON NO ESTIGUI PERMÈS. AMB O SENSE ESTRIS D\'ACAMPADA.',
                'instrucions' => 'VEU: PL / CT: PS AR',
                'classes_incidents_id' => 8,
            ),
            149 => 
            array (
                'id' => 150,
                'codi' => 'DEPGE',
                'descripcio' => 'MOLÈSTIES PRODUÏDES PER GENERADORS DE COMPANYIES ELÈCTRIQUES.',
                'definicio' => 'PROVOCAR MOLÈSTIES ALS VEÏNS PER GENERADORS DE COMPANYIES ELÈCTRIQUES.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            150 => 
            array (
                'id' => 151,
                'codi' => 'DEPGP',
                'descripcio' => 'MOLÈSTIES PRODUÏDES PER GENERADORS D\'ENTITATS I/O PERSONES PRIVADES',
                'definicio' => 'PROVOCAR MOLÈSTIES ALS VEÏNS PER GENERADORS D\'ENTITATS I/O PERSONES PRIVADES',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 9,
            ),
            151 => 
            array (
                'id' => 152,
                'codi' => 'DLSO',
                'descripcio' => 'MOLÈSTIES PRODUÏDES PER SOROLL DE LOCALS',
                'definicio' => 'MOLÈSTIES QUE AFECTEN GENERALMENT ALS VEÏNS, PROVOCADES PEL SOROLL DE LOCALS NOCTURNS PER MANCA DE PROTECCIÓ ANTISOROLL O INCOMPLIMENT D\'ALTRES NORMES.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 4,
            ),
            152 => 
            array (
                'id' => 153,
                'codi' => 'DLFR',
                'descripcio' => 'INCIDÈNCIES PER FULLS DE RECLAMACIÓ',
                'definicio' => 'MANCA O NEGATIVA A FACILITAR FULLS DE RECLAMACIÓ A PERSONES, EN ESPECTACLES, RECINTES TANCATS O ESPAIS OBERTS ON TENEN L\'OBLIGACIÓ DE POSAR-LOS A DISPOSICIÓ DEL CLIENT.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 6,
            ),
            153 => 
            array (
                'id' => 154,
                'codi' => 'DLH',
                'descripcio' => 'LOCAL NO RESPECTA HORARI DE TANCAMENT',
                'definicio' => 'INCOMPLIMENT DE L\'HORARI DE TANCAMENT DE LOCALS O ESPECTACLES EN RECINTES TANCATS O EN ESPAIS OBERTS.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 7,
            ),
            154 => 
            array (
                'id' => 155,
                'codi' => 'DLA',
                'descripcio' => 'LOCAL AMB EXCÈS D\'AFORAMENT',
                'definicio' => 'LOCAL OBERT AL PÚBLIC ON EL NÚM. DE PERSONES A L\'INTERIOR DEL RECINTE ÉS SENSIBLEMENT SUPERIOR A L\'AUTORITZAT.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 4,
            ),
            155 => 
            array (
                'id' => 156,
                'codi' => 'DLS',
                'descripcio' => 'LOCAL AMB MANCA DE MESURES DE SEGURETAT',
                'definicio' => 'LOCAL OBERT AL PÚBLIC QUE INCOMPLEIX LES MESURES DE SEGURETAT ESTABLERTES A LES NORMATIVES VIGENTS.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 10,
            ),
            156 => 
            array (
                'id' => 157,
                'codi' => 'DLMA',
                'descripcio' => 'VENDA DE BEGUDES ALCOHÒLIQUES A MENORS',
                'definicio' => 'VENDA DE BEGUDES A MENORS EN BOTIGUES O LOCALS AUTORITZATS PER LA VENDA A PERSONES ADULTES.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 7,
            ),
            157 => 
            array (
                'id' => 158,
                'codi' => 'DLMLA',
                'descripcio' => 'MENORS EN INTERIOR DE LOCALS PER ADULTS',
                'definicio' => 'MENORS EN INTERIOR DE LOCAL, OBERT AL PÚBLIC, ON ÚNICAMENT ÉS PERMESA L\'ENTRADA DE PERSONES MAJORS DE 18 ANYS.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 9,
            ),
            158 => 
            array (
                'id' => 159,
                'codi' => 'DVAS',
                'descripcio' => 'INCIDÈNCIA FILTRACIÓ D\'AIGUA VEÏNS SENSE RISC',
            'definicio' => 'INCIDÈNCIA SENSE RISC PER UNA FILTRACIÓ PETITA O GOTERES PROVINENTS DELS PISOS VEÏNS. (NO INUNDACIÓ)',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 10,
            ),
            159 => 
            array (
                'id' => 160,
                'codi' => 'DVAR',
                'descripcio' => 'INCIDÈNCIA FILTRACIÓ D\'AIGUA VEÏNS AMB RISC',
            'definicio' => 'INCIDÈNCIA AMB RISC PER UNA FILTRACIÓ PETITA O GOTERES PROVINENTS DELS PISOS VEÏNS. (NO INUNDACIÓ)',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 2,
            ),
            160 => 
            array (
                'id' => 161,
                'codi' => 'DVO',
                'descripcio' => 'MOLÈSTIES VEÏNALS PRODUÏDES PER OBRES',
                'definicio' => 'MOLÈSTIES QUE PATEIXEN ELS VEÏNS PRODUÏDES PER OBRES EN PISOS O LOCALS PROPERS.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 8,
            ),
            161 => 
            array (
                'id' => 162,
                'codi' => 'DVSO',
                'descripcio' => 'MOLÈSTIES VEÏNALS PRODUÏDES PER SOROLLS/MÚSICA',
                'definicio' => 'PROVOCAR MOLÈSTIES ACÚSTIQUES ALS VEÏNS PER SOROLLS O MÚSICA.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 2,
            ),
            162 => 
            array (
                'id' => 163,
                'codi' => 'DVOL',
                'descripcio' => 'MOLÈSTIES VEÏNALS PRODUÏDES PER MALS OLORS',
            'definicio' => 'PROVOCAR MOLÈSTIES ALS VEÏNS PER MALS OLORS DERIVAT DE CONTENIDORS D\'ESCOMBRERIES O PERSONES AMB LA SÍNDROME DE DIÓGENES (INTERIORS)',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 3,
            ),
            163 => 
            array (
                'id' => 164,
                'codi' => 'DVAN',
                'descripcio' => 'MOLÈSTIES PRODUÏDES PER ANIMALS DE COMPANYIA',
                'definicio' => 'MOLÈSTIES PRODUÏDES ALS VEÏNS PROVOCADES PER ANIMALS DE COMPANYIA.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 7,
            ),
            164 => 
            array (
                'id' => 165,
                'codi' => 'DVXX',
                'descripcio' => 'MOLÈSTIES VEÏNALS D\'ALTRES TIPUS',
                'definicio' => 'ALTRES TIPUS DE MOLÈSTIES VEÏNALS NO TIPIFICADES',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 4,
            ),
            165 => 
            array (
                'id' => 166,
                'codi' => 'DPDI',
                'descripcio' => 'PERSONA DENUNCIADA PER DESAPARICIÓ ÀMBIT INTERURBÀ',
            'definicio' => 'PERSONA MAJOR D\'EDAT DE LA QUAL S\'INFORMA L\'ABSÈNCIA / DESAPARICIÓ DEL LLOC ON RESIDEIX HABITUALMENT. CERCA DE PERSONA DESAPAREGUDA. EN CAS DE PERSONA PERDUDA A LA  UNTANYA ES TIPIFICARÀ: RESCAT DE MUNTANYA (AMR)',
                'instrucions' => 'VEU: BB / CT: BB PS AR',
                'classes_incidents_id' => 5,
            ),
            166 => 
            array (
                'id' => 167,
                'codi' => 'DPDU',
                'descripcio' => 'PERSONA DENUNCIADA PER DESAPARICIÓ ÀMBIT URBÀ',
                'definicio' => 'PERSONA MAJOR D\'EDAT DE LA QUAL S\'INFORMA L\'ABSÈNCIA / DESAPARICIÓ DEL LLOC ON RESIDEIX HABITUALMENT. CERCA DE PERSONA DESAPAREGUDA ',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            167 => 
            array (
                'id' => 168,
                'codi' => 'DPPI',
                'descripcio' => 'PERSONA EXTRAVIADA EN ESPAI PÚBLIC ÀMBIT INTERURBÀ',
                'definicio' => 'PERSONA PERDUDA O TROBADA EN ESPAI PÚBLIC.',
                'instrucions' => 'VEU: BB / CT: BB PS AR CT SS SI HI HA FERITS',
                'classes_incidents_id' => 4,
            ),
            168 => 
            array (
                'id' => 169,
                'codi' => 'DPPU',
                'descripcio' => 'PERSONA EXTRAVIADA EN ESPAI PÚBLIC ÀMBIT URBÀ',
                'definicio' => 'PERSONA PERDUDA O TROBADA EN ESPAI PÚBLIC.',
                'instrucions' => 'NO VEU: PS / CT: PS CT SS SI HI HA FERITS
ÀMBIT BCN NO VEU: PS / AVÍS: GUB / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            169 => 
            array (
                'id' => 170,
                'codi' => 'DPMED',
                'descripcio' => 'PERSONA MORTA EN EDIFICI',
                'definicio' => 'CADÀVER CONFIRMAT A L\'INTERIOR D\'EDIFICI',
                'instrucions' => 'VEU: PS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 10,
            ),
            170 => 
            array (
                'id' => 171,
                'codi' => 'DPMEP',
                'descripcio' => 'PERSONA MORTA EN ESPAI PÚBLIC',
                'definicio' => 'CADÀVER EN ESPAI OBERT, VIA URBANA O INTERURBANA.',
                'instrucions' => 'VEU: PS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE',
                'classes_incidents_id' => 8,
            ),
            171 => 
            array (
                'id' => 172,
                'codi' => 'DPA',
                'descripcio' => 'PERSONA DEMANA AJUDA',
            'definicio' => 'PERSONA QUE SOL·LICITA SOCORS/SUPORT (NO ASSISTÈNCIA MÈDICA)',
                'instrucions' => 'VEU: PL / CT: PS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            172 => 
            array (
                'id' => 173,
                'codi' => 'DPIL',
                'descripcio' => 'PERSONA PER AVISAR EN DOMICILI QUE ES TROBA IL·LOCALITZABLE',
            'definicio' => 'LOCALITZACIÓ DE PERSONES PER DONAR-LES AVÍS D\'INTERÈS PARTICULAR O AVISOS D\'ORGANISMES. (PERSONES BUSCADES PER MOSSOS O PER JUTJATS)',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            173 => 
            array (
                'id' => 174,
                'codi' => 'DPXX',
                'descripcio' => 'ASSISTÈNCIA O AUXILI AL CIUTADÀ DINS DEL NUCLI URBÀ',
            'definicio' => 'ALTRES TIPUS DE SUPORT O SALVAMENT ALS CIUTADANS EN SITUACIONS DE NECESSITAT REAL. (PERSONES TANCADES EN RECINTES PÚBLICS, VIES URBANES TANCADES, ETC.)',
                'instrucions' => 'VEU: PL / CT: PS CT SS SI HI HA FERITS / AVÍS BB SI NO HI HA ACCÉS',
                'classes_incidents_id' => 1,
            ),
            174 => 
            array (
                'id' => 175,
                'codi' => 'DPOP',
                'descripcio' => 'OBERTURA DE PISOS',
                'definicio' => 'OBERTURA DE PIS PER UN NADÓ O PERSONA INCAPACITADA, PER AUXILIAR PERSONA QUE NO POT SORTIR D\'UNA ESTANÇA INTERIOR, O QUAN ES SOSPITA QUE HA POGUT PASSAR ALGUNA COSA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB CT SS SI HI HA FERITS
ÀMBIT BCN VEU: BB CT SS SI HI HA FERITS',
                'classes_incidents_id' => 5,
            ),
            175 => 
            array (
                'id' => 176,
                'codi' => 'DPOV',
            'descripcio' => 'OBRIR VEHICLE AMB LES CLAUS DINS (URGÈNCIA)',
                'definicio' => 'OBRIR LA PORTA D\'UN VEHICLE QUE HA QUEDAT AMB LES PORTES BLOQUEJADES I LES CLAUS A DINS, ON HI PUGUI HAVER URGÈNCIES PER LA PRESÈNCIA DE NEN/S PETIT/S A L\'INTERIOR O ALTRES SITUACIONS D\'EMERGÈNCIA RAONABLE.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            176 => 
            array (
                'id' => 177,
                'codi' => 'DPRU',
                'descripcio' => 'RETIRAR ÚTILS D\'EDIFICIS EVACUATS',
                'definicio' => 'COL·LABORACIÓ PER RETIRAR ÚTILS D\'EDIFICIS EVACUATS.',
                'instrucions' => 'VEU: BB / CT: BB',
                'classes_incidents_id' => 7,
            ),
            177 => 
            array (
                'id' => 178,
                'codi' => 'DPAF',
                'descripcio' => 'ASSISTÈNCIA PER FRED INTENS',
                'definicio' => 'ASSISTÈNCIA A PERSONES SENSE SOSTRE O AMB MANCA DE RECURSOS, PER CONDICIONS CLIMÀTIQUES AMB TEMPERATURES BAIXES',
                'instrucions' => 'VEU: PL CT SS SI HI HA FERITS',
                'classes_incidents_id' => 6,
            ),
            178 => 
            array (
                'id' => 179,
                'codi' => 'DPAS',
                'descripcio' => 'SALVAMENT DE PERSONES DINS ASCENSORS',
                'definicio' => 'PERSONES ATRAPADES DINS D\'UN ASCENSOR.',
                'instrucions' => 'VEU: BB / CT: BB PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            179 => 
            array (
                'id' => 180,
                'codi' => 'DPASAC',
                'descripcio' => 'ACCIDENT D\'ASCENSOR',
                'definicio' => 'ACCIDENT D\'ASCENSOR AMB O SENSE PERSONES DINS',
                'instrucions' => 'VEU: BB CT: BB, PS, SS Avís CECAT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            180 => 
            array (
                'id' => 181,
                'codi' => 'DALV',
                'descripcio' => 'ALARMA DE ROBATORI EN VEHICLE',
                'definicio' => 'ACTIVACIONS D\'ALARMES A CAUSA DE TEMPTATIVES DE ROBATORI O PER ALTRES CAUSES.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            181 => 
            array (
                'id' => 182,
                'codi' => 'DALH',
                'descripcio' => 'ALARMA DE ROBATORI DE VIVENDA',
                'definicio' => 'ACTIVACIONS D\'ALARMES A CAUSA DE ROBATORI DE VIVENDA O PER ALTRES CAUSES.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 2,
            ),
            182 => 
            array (
                'id' => 183,
                'codi' => 'DALL',
                'descripcio' => 'ALARMA DE ROBATORI EN LOCAL',
            'definicio' => 'ACTIVACIÓ D\'ALARMES A CAUSA DE ROBATORI DE LOCAL O PER ALTRES CAUSES. (INCLOSES FÀBRIQUES, EMPRESES, ETC.)',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 9,
            ),
            183 => 
            array (
                'id' => 184,
                'codi' => 'DANAR',
                'descripcio' => 'ABANDONAMENT D\'ANIMALS AMB RISC',
            'definicio' => 'ABANDONAMENT D\'ANIMALS PERILLOSOS (AGRESSIUS, VERINOSOS, ETC.)',
                'instrucions' => 'VEU: PL / CT: PS AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            184 => 
            array (
                'id' => 185,
                'codi' => 'DANAS',
                'descripcio' => 'ABANDONAMENT D\'ANIMALS SENSE RISC',
                'definicio' => 'ABANDONAMENT D\'ANIMALS DOMÈSTICS O NO PERILLOSOS',
                'instrucions' => 'VEU: PL / CT: AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            185 => 
            array (
                'id' => 186,
                'codi' => 'DANFR',
                'descripcio' => 'ANIMALS FERITS AMB RISC',
            'definicio' => 'ANIMALS FERITS PERILLOSOS (AGRESSIUS, VERINOSOS, ETC.)',
                'instrucions' => 'VEU: PL / CT: PS AR AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            186 => 
            array (
                'id' => 187,
                'codi' => 'DANFS',
                'descripcio' => 'ANIMALS FERITS SENSE RISC',
                'definicio' => 'ANIMALS FERITS DOMÈSTICS O NO PERILLOSOS',
                'instrucions' => 'VEU: PL / CT: PS AR AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            187 => 
            array (
                'id' => 188,
                'codi' => 'DANMR',
                'descripcio' => 'ANIMALS MORTS AMB RISC',
                'definicio' => 'ANIMALS MORTS AMB RISC',
                'instrucions' => 'VEU: PL / CT: PS AR AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            188 => 
            array (
                'id' => 189,
                'codi' => 'DANMS',
                'descripcio' => 'ANIMALS MORTS SENSE RISC',
                'definicio' => 'ANIMALS MORTS SENSE RISC',
                'instrucions' => 'VEU: PL / CT: PS AR AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            189 => 
            array (
                'id' => 190,
                'codi' => 'DANRD',
                'descripcio' => 'RESCAT D\'ANIMALS DOMÈSTICS',
            'definicio' => 'RESCAT D\'ANIMALS DOMÈSTICS EN LLOCS NO ACCESSIBLES (GATS, GOSSOS,ETC.)',
                'instrucions' => 'NO VEU: BB / CT: BB
ÀMBIT BCN VEU: BB',
                'classes_incidents_id' => 5,
            ),
            190 => 
            array (
                'id' => 191,
                'codi' => 'DANRS',
                'descripcio' => 'RESCAT D\'ANIMALS SALVATGES',
            'definicio' => 'RESCAT D\'ANIMALS SALVATGES (SERPS, RÈPTILS, ETC.)',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 5,
            ),
            191 => 
            array (
                'id' => 192,
                'codi' => 'DANTD',
                'descripcio' => 'MALTRACTAMENTS D\'ANIMALS DOMÈSTICS',
            'definicio' => 'INCIDÈNCIES RELATIVES AL MALTRACTAMENT D\'ANIMALS DOMÈSTICS (GATS, GOSSOS, ETC.)',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 4,
            ),
            192 => 
            array (
                'id' => 193,
                'codi' => 'DANTS',
                'descripcio' => 'MALTRACTAMENT D\'ANIMALS SALVATGES',
                'definicio' => 'INCIDÈNCIES RELATIVES AL MALTRACTAMENT D\'ANIMALS SALVATGES.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 7,
            ),
            193 => 
            array (
                'id' => 194,
                'codi' => 'DANPG',
                'descripcio' => 'INCIDÈNCIA AMB GOSSOS PERILLOSOS',
            'definicio' => 'INCIDÈNCIES PER INFRACCIONS A LA NORMATIVA ADMINISTRATIVA AMB GOSSOS CONSIDERATS PERILLOSOS. (NO CONFONDRE AMB ABANDONAMENT)',
            'instrucions' => 'VEU: PL / AVÍS: AR (SI GOSSOS SALVATGES) / CT: PS AR CT SS SI HI HA FERITS',
                'classes_incidents_id' => 5,
            ),
            194 => 
            array (
                'id' => 195,
                'codi' => 'DANPA',
                'descripcio' => 'ABELLES / ALTRES INSECTES EN ESPAI PÚBLIC',
                'definicio' => 'INCIDÈNCIES RELATIVES A L\'APARICIÓ D\'EIXAMS D\'ABELLES O PLAGUES D\'ALTRES INSECTES EN ESPAIS PÚBLICS ON PODEN REPRESENTAR PERILL POTENCIAL PER A LES PERSONES.',
                'instrucions' => 'NO VEU: BB / AVÍS: PL / CT: BB PS AR CT SS SI HA FERITS
ÀMBIT BCN VEU: GUB / CT: PS AR CT SS SI HA FERITS',
                'classes_incidents_id' => 5,
            ),
            195 => 
            array (
                'id' => 196,
                'codi' => 'DANPR',
                'descripcio' => 'INCIDÈNCIA AMB RÈPTILS',
                'definicio' => 'INCIDÈNCIES RELATIVES A LA PROTECCIÓ DE LA FAUNA I ANIMALS.',
                'instrucions' => 'VEU: AR / CT: AR PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 1,
            ),
            196 => 
            array (
                'id' => 197,
                'codi' => 'DANPPI',
                'descripcio' => 'INCIDÈNCIA AMB PORC/S SENGLAR/S NO URBÀ',
                'definicio' => 'INCIDÈNCIES AMB PORCS SENGLARS EN ZONES NO URBANES',
                'instrucions' => 'VEU: AR / CT: AR PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 2,
            ),
            197 => 
            array (
                'id' => 198,
                'codi' => 'DANPPU',
                'descripcio' => 'INCIDÈNCIA AMB PORC/S SENGLAR/S URBÀ',
                'definicio' => 'INCIDÈNCIES AMB PORCS SENGLARS EN ZONES URBANES',
                'instrucions' => 'VEU: PL / CT: PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 3,
            ),
            198 => 
            array (
                'id' => 199,
                'codi' => 'DANB',
                'descripcio' => 'BARALLES D\'ANIMALS',
                'definicio' => 'BARALLES D\'ANIMALS DOMÈSTICS AMB O SENSE APOSTES.',
                'instrucions' => 'NO VEU: PS / CT: PS AR',
                'classes_incidents_id' => 7,
            ),
            199 => 
            array (
                'id' => 200,
                'codi' => 'DSAM',
                'descripcio' => 'MANCA DE SUBMINISTRAMENT D\'AIGUA',
                'definicio' => 'AFECTACIÓ GENERALITZADA EN ZONES ÀMPLIES DE TERRITORI PER MANCA DE SUBMINISTRAMENT D\'AIGUA.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            200 => 
            array (
                'id' => 201,
                'codi' => 'DSAA',
                'descripcio' => 'AVARIA INSTAL·LACIÓ D\'AIGUA',
            'definicio' => 'AFECTACIÓ PUNTUAL PER AVARIA EN INSTAL·LACIÓ DE LA XARXA DE SUBMINISTRAMENT D\'AIGUA POTABLE. (CANONADA, BOCA D\'INCENDI, REGISTRE, ETC.).',
                'instrucions' => 'VEU: PL / CT: PS BB
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            201 => 
            array (
                'id' => 202,
                'codi' => 'DSEM',
                'descripcio' => 'MANCA DE SUBMINISTRAMENT ELÈCTRIC',
                'definicio' => 'AFECTACIÓ GENERALITZADA EN ZONES DELIMITADES DE LA CIUTAT PER MANCA DE SUBMINISTRAMENT ELÈCTRIC.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            202 => 
            array (
                'id' => 203,
                'codi' => 'DSEA',
                'descripcio' => 'AVARIA INSTAL·LACIÓ ELÈCTRICA',
            'definicio' => 'AFECTACIÓ (NO INCENDI) PUNTUAL PER AVARIA EN INSTAL·LACIÓ ELÈCTRICA DE LA XARXA DE SUBMINISTRAMENT. (TRANSFORMADOR, TORRE, PAL,CABLES, ETC.)',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            203 => 
            array (
                'id' => 204,
                'codi' => 'DSEE',
                'descripcio' => 'AVARIA D\'ENLLUMENAT PÚBLIC',
            'definicio' => 'AFECTACIÓ (NO INCENDI) PER AVARIES PUNTUALS DE LA XARXA ELÈCTRICA DE L\'ENLLUMENAT PÚBLIC. (CABLES QUE FAN ESPURNES, DESPENJATS, POSTES TRENCATS, CAIXES DE LLUM, ETC.)',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            204 => 
            array (
                'id' => 205,
                'codi' => 'DSGM',
                'descripcio' => 'MANCA DE SUBMINISTRAMENT DE GAS',
                'definicio' => 'AFECTACIÓ GENERALITZADA EN ZONES ÀMPLIES DE TERRITORI PER MANCA DE SUBMINISTRAMENT DE GAS.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            205 => 
            array (
                'id' => 206,
                'codi' => 'DSGA',
                'descripcio' => 'AVARIA INSTAL·LACIÓ DE GAS',
            'definicio' => 'AFECTACIÓ (NO INCENDI NI FUITA) PUNTUAL PER AVARIA EN QUALSEVOL PUNT DE LA XARXA DE DISTRIBUCIÓ DE GAS EN ESPAIS PÚBLICS. TAPES, REGISTRES.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            206 => 
            array (
                'id' => 207,
                'codi' => 'DSTM',
                'descripcio' => 'MANCA DE SERVEIS DE TELEFONIA',
                'definicio' => 'AFECTACIÓ GENERALITZADA EN ZONES ÀMPLIES DE TERRITORI PER MANCA DE SERVEIS DE TELEFONIA.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            207 => 
            array (
                'id' => 208,
                'codi' => 'DSTA',
                'descripcio' => 'AVARIA INSTAL·LACIÓ TELEFONIA',
            'definicio' => 'AFECTACIÓ PUNTUAL PER AVARIA EN INSTAL·LACIÓ TELEFÒNICA DE LA XARXA DE SUBMINISTRAMENT (DISTRIBUÏDOR, PAL, CABLES, ETC.).',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            208 => 
            array (
                'id' => 209,
                'codi' => 'DSC',
                'descripcio' => 'INCIDÈNCIA DE CLAVEGUERAM',
            'definicio' => 'AFECTACIÓ (NO INCENDI) PER ANOMALIES EN INSTAL·LACIONS DE LA XARXA DE CLAVEGUERAM DE LA CIUTAT (TAPA FORA DE LLOC, ENFONSADA, MANCA DE TAPA, EMBORNAL TAPONAT.)',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 5,
            ),
            209 => 
            array (
                'id' => 210,
                'codi' => 'DSPCR',
                'descripcio' => 'INCIDÈNCIES EN CORREUS AMB RISC',
                'definicio' => 'INCIDÈNCIES EN CORREUS NO TIPIFICADES AMB RISC',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 3,
            ),
            210 => 
            array (
                'id' => 211,
                'codi' => 'DSPCS',
                'descripcio' => 'INCIDÈNCIES EN CORREUS SENSE RISC',
                'definicio' => 'INCIDÈNCIES EN CORREUS NO TIPIFICADES SENSE RISC',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 10,
            ),
            211 => 
            array (
                'id' => 212,
                'codi' => 'DSPT',
                'descripcio' => 'INFRACCIÓ AL REGLAMENT DE TAXIS',
            'definicio' => 'INCIDÈNCIES PER QUALSEVOL INFRACCIÓ AL REGLAMENT DE TAXIS. (NO CONFONDRE AMB SEQTAXI)',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            212 => 
            array (
                'id' => 213,
                'codi' => 'DSPTP',
                'descripcio' => 'INCIDÈNCIA EN TRANSPORTS PÚBLICS',
            'definicio' => 'AFECTACIONS EN TRANSPORTS PÚBLICS (NO ACCIDENTS NI INCENDIS): INCIDÈNCIES PASSATGERS SENSE RISC, AVARIES DE TREN INCLÒS MMPP, OBSTACLES A LES VIES DE TREN, CANVIS DEL LLOC D\'ATERRATGE SENSE RISC.',
            'instrucions' => 'VEU: PL (SI ÉS EN ZONA URBANA) PS (SI ÉS FORA DE NUCLI URBÀ) / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            213 => 
            array (
                'id' => 214,
                'codi' => 'DSPUSB',
                'descripcio' => 'USUARI TRANSPORT PÚBLIC SENSE BITLLET',
                'definicio' => 'USUARI TRANSPORT PÚBLIC SENSE BITLLET',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 2,
            ),
            214 => 
            array (
                'id' => 215,
                'codi' => 'DSPM',
                'descripcio' => 'INCIDÈNCIA DE SERVEIS URBANS I MEDI AMBIENT.',
                'definicio' => 'AFECTACIÓ EN ESPAIS PÚBLICS PER PROBLEMES DE BRUTÍCIA, SENYALITZACIÓ NO PERILLOSA, I D\'ALTRES.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 4,
            ),
            215 => 
            array (
                'id' => 216,
                'codi' => 'DXXOE',
                'descripcio' => 'RECUPERACIÓ D\'OBJECTES / TROBALLES',
            'definicio' => 'OBJECTE TROBAT O PERDUT (DOCUMENTACIÓ PERSONAL -DNI, PASSAPORT, PERMÍS DE CONDUIR- O ALTRES) QUE ES DEDUEIX QUE HA ESTAT EXTRAVIAT I NO HA ESTAT VINCULAT A CAP FET IL·LÍCIT.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            216 => 
            array (
                'id' => 217,
                'codi' => 'DXXOM',
                'descripcio' => 'INFRACCIÓ A ALTRES OO.MM.',
                'definicio' => 'INCOMPLIMENT DE LES ORDENANCES MUNICIPALS. EXEMPLES: AERONAUS QUE VOLEN BAIX EN NUCLI POBLAT, NO RECOLLIDA D\'EXCREMENTS DE GOS, ETC.',
                'instrucions' => 'VEU: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            217 => 
            array (
                'id' => 218,
                'codi' => 'DXXEO',
                'descripcio' => 'INCIDÈNCIA EN INSTAL·LACIONS D\'EDIFICI OFICIAL',
                'definicio' => 'AFECTACIÓ EN EDIFICACIÓ, INSTAL·LACIÓ O EDIFICACIÓ DE QUALSEVOL ADMINISTRACIÓ PÚBLICA. SEMPRE QUE NO ESTIGUI CONTEMPLAT EN ALTRES CLAUS.',
            'instrucions' => 'VEU: PL (SI EDIFICI MUNICIPAL) PS (SI EDIFICI GENERALITAT) / CT: PS',
                'classes_incidents_id' => 9,
            ),
            218 => 
            array (
                'id' => 219,
                'codi' => 'SAX',
                'descripcio' => 'ATEMPTAT AMB EXPLOSIUS',
                'definicio' => 'EXPLOSIÓ CONSEQÜÈNCIA DE LA COL·LOCACIÓ D\'UN ARTEFACTE EXPLOSIU PERPETRADA PER GRUP TERRORISTA.',
                'instrucions' => 'VEU: PS / AVÍS: PL / CT: PS SS BB
ÀMBIT BCN / VEU: PS / AVÍS: GUB BB / CT: PS SS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PS / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 10,
            ),
            219 => 
            array (
                'id' => 220,
                'codi' => 'SAAF',
                'descripcio' => 'ATEMPTAT AMB ARMES DE FOC',
                'definicio' => 'MORT O LESIONS PRODUÏDES PER ARMES PERPETRADES PER GRUP TERRORISTA.',
                'instrucions' => 'VEU: PS / AVÍS: PL / CT: PS SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            220 => 
            array (
                'id' => 221,
                'codi' => 'SAOS',
                'descripcio' => 'OBJECTE SOSPITÓS',
                'definicio' => 'LOCALITZACIÓ D\'OBJECTE SOSPITÓS',
                'instrucions' => 'VEU: PS / AVÍS: PL / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PS / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 4,
            ),
            221 => 
            array (
                'id' => 222,
                'codi' => 'SASS',
                'descripcio' => 'SOBRE POSTAL SOSPITÓS',
                'definicio' => 'LOCALITZACIÓ DE SOBRE SOSPITÓS.',
                'instrucions' => 'VEU: PS / CT: PS
ÀMBIT BCN VEU: PS AVÍS: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            222 => 
            array (
                'id' => 223,
                'codi' => 'SXAB',
                'descripcio' => 'AMENAÇA DE BOMBA',
                'definicio' => 'ACCIÓ DE COMUNICAR LA COL·LOCACIÓ D\'UN ARTEFACTE EXPLOSIU.',
                'instrucions' => 'VEU: PS / CT: PS
ÀMBIT BCN VEU: PS / AVÍS: GUB / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PS / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 10,
            ),
            223 => 
            array (
                'id' => 224,
                'codi' => 'SXL',
            'descripcio' => 'LOCALITZACIÓ D\'ARMES (EXPLOSIUS)',
                'definicio' => 'LOCALITZACIÓ O AVÍS DE LOCALITZACIÓ DE QUALSEVOL TIPUS D\'ARMA/ES O EXPLOSIU.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PS / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 8,
            ),
            224 => 
            array (
                'id' => 225,
                'codi' => 'SXIR',
                'descripcio' => 'INFRACCIÓ AL REGLAMENT D\'ARMES / EXPLOSIUS',
                'definicio' => 'TINENÇA, OSTENTACIÓ O INFRACCIÓ DEL REGLAMENT EN RELACIÓ AMB OBJECTES PROHIBITS, ARMES, EXPLOSIUS',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            225 => 
            array (
                'id' => 226,
                'codi' => 'SRF',
                'descripcio' => 'FURT',
                'definicio' => 'ACCIÓ D\'ACONSEGUIR BÉNS DE MANERA IL·LEGAL SENSE UTILITZAR FORÇA NI VIOLÈNCIA',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            226 => 
            array (
                'id' => 227,
                'codi' => 'SRRS',
                'descripcio' => 'ROBATORI AMB FORÇA',
                'definicio' => 'ACCIÓ DE ROBAR UTILITZANT VIOLÈNCIA O INTIMIDACIÓ EN LES PERSONES O PRODUÏNT DANYS O ACCEDINT DE MANERA IRREGULAR AL LLOC ',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 10,
            ),
            227 => 
            array (
                'id' => 228,
                'codi' => 'SRRV',
                'descripcio' => 'ROBATORI AMB VIOLÈNCIA',
                'definicio' => 'ACCIÓ DE ROBAR UTILITZANT VIOLÈNCIA O INTIMIDACIÓ A LES PERSONES',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 4,
            ),
            228 => 
            array (
                'id' => 229,
                'codi' => 'SRER',
                'descripcio' => 'ROBATORI EN ENTITATS DE RISC',
            'definicio' => 'ACCIÓ DE ROBAR EN ENTITATS DE RISC (BANCS, BENZINERES, OFICINES DE CANVI DE MONEDA, JOIERIES, GRANS SUPERFÍCIES COMERCIALS, ETC.)',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 8,
            ),
            229 => 
            array (
                'id' => 230,
                'codi' => 'SRV',
                'descripcio' => 'ROBATORI DE VEHICLE',
                'definicio' => 'ACCIÓ DE SOSTREURE UN VEHICLE A MOTOR, CICLOMOTOR O EMBARCACIONS AMB MOTOR.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            230 => 
            array (
                'id' => 231,
                'codi' => 'SRBPP',
                'descripcio' => 'ROBATORI DE BENS DE PATRIMONI PÚBLIC',
                'definicio' => 'ACCIÓ D\'ACONSEGUIR BÉNS DE TITULARITAT PÚBLICA DE MANERA IL·LEGAL.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 6,
            ),
            231 => 
            array (
                'id' => 232,
                'codi' => 'SRAI',
                'descripcio' => 'APROPIACIÓ INDEGUDA',
                'definicio' => 'FET D\'INCORPORAR AL PATRIMONI D\'UNA PERSONA BÉNS DIPOSITATS EN CONFIANÇA, DIPÒSIT O ADMINISTRACIÓ.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            232 => 
            array (
                'id' => 233,
                'codi' => 'SRE',
                'descripcio' => 'ESTAFA / FRAU / FALSIFICACIÓ',
                'definicio' => 'ACCIÓ D\'ACONSEGUIR BÉNS DE MANERA IL·LEGAL UTILITZANT L\'ENGANY. TAMBÉ JOC IL·LEGAL.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            233 => 
            array (
                'id' => 234,
                'codi' => 'SRRO',
                'descripcio' => 'TROBALLA DE VEHICLE/OBJECTE ROBAT',
                'definicio' => 'LOCALITZACIÓ DE VEHICLE SOSTRET, O AMB SIGNES EVIDENTS, DENUNCIAT O NO, O ALTRE OBJECTE SUPOSADAMENT PROCEDENT DE ROBATORI. INCLOU CICLOMOTORS, BICICLETES,  DOCUMENTACIONS O ALTRES OBJECTES DE ROBATORI.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            234 => 
            array (
                'id' => 235,
                'codi' => 'SRCO',
                'descripcio' => 'COMERÇ D\'OBJECTES ROBATS',
                'definicio' => 'ACCIÓ DE COMPRAR O VENDRE OBJECTES SUSCEPTIBLES DE PROVENIR DE LA COMISSIÓ D\'UNA INFRACCIÓ PENAL',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            235 => 
            array (
                'id' => 236,
                'codi' => 'SRPI',
                'descripcio' => 'DELICTE CONTRA LA PROPIETAT INDUSTRIAL / INTEL·LECTUAL',
                'definicio' => 'ACCIÓ DE FABRICAR OBJECTES, CÒPIES IL·LEGALS DE MARQUES LEGALMENT REGISTRADES. TAMBÉ APROPIACIÓ DE DRETS D\'AUTOR, PLAGI, ETC',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 1,
            ),
            236 => 
            array (
                'id' => 237,
                'codi' => 'SGBEP',
                'descripcio' => 'BARALLA EN ESPAI PÚBLIC',
                'definicio' => 'CONFLICTE ENTRE DOS O MÉS GRUPS AMB VIOLÈNCIA FÍSICA A LA VIA PÚBLICA. SI NO HI HA VIOLÈNCIA FÍSICA ES TIPIFICARÀ COM A DISCUSSIÓ VERBAL.',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            237 => 
            array (
                'id' => 238,
                'codi' => 'SGBTP',
                'descripcio' => 'BARALLA EN TRANSPORT PÚBLIC',
            'definicio' => 'CONFLICTE VIOLENT ENTRE PERSONES A UN TRANSPORT PÚBLIC (METRO, FERROCARRIL, AUTOBUSOS, AVIONS, ETC.)',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS
ÀMBIT BCN VEU: PS / AVÍS: GUB / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            238 => 
            array (
                'id' => 239,
                'codi' => 'SGBIE',
                'descripcio' => 'BARALLA EN INSTAL·LACIÓ ESPORTIVA',
                'definicio' => 'CONFLICTE VIOLENT ENTRE DOS O MÉS GRUPS AMB VIOLÈNCIA FÍSICA A L\'INTERIOR O EXTERIOR DE LA INSTAL·LACIÓ. SI NO HI HA VIOLÈNCIA FÍSICA ES TIPIFICARA COM DISCUSSIÓ VERBAL.',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS  
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            239 => 
            array (
                'id' => 240,
                'codi' => 'SGBL',
                'descripcio' => 'BARALLA EN LOCAL/RECINTE TANCAT',
                'definicio' => 'CONFLICTE VIOLENT ENTRE DOS O MÉS GRUPS AMB VIOLÈNCIA FÍSICA DINS D\'UN LOCAL. SI NO HI HA VIOLÈNCIA FÍSICA ES TIPIFICARA COM DISCUSSIÓ VERBAL',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            240 => 
            array (
                'id' => 241,
                'codi' => 'SGGP',
                'descripcio' => 'AGRESSIÓ ENTRE PERSONES',
                'definicio' => 'CAUSAR LESIONS QUE MENYSCABIN LA INTEGRITAT CORPORAL O LA SALUT FÍSICA DE LES PERSONES, SENSE ARRIBAR A ESDEVENIR UNA BARALLA',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            241 => 
            array (
                'id' => 242,
                'codi' => 'SGGAA',
                'descripcio' => 'AGRESSIÓ CONTRA AGENT DE L\'AUTORITAT',
                'definicio' => 'ACCIÓ O INTENT D\'AGRESSIÓ A UN AGENT DE L\'AUTORITAT, QUE POT SER FÍSICA O VERBAL.',
            'instrucions' => 'VEU: PS / AVÍS: PL (SI L\'AGENT ÉS DEL SEU COS) / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            242 => 
            array (
                'id' => 243,
                'codi' => 'SGHC',
                'descripcio' => 'HOMICIDI CONSUMAT',
                'definicio' => 'CAUSAR LA MORT DE PERSONA/ES DE FORMA DOLOSA O PER IMPRUDÈNCIA GREU.',
                'instrucions' => 'VEU: PS / CT: PS SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            243 => 
            array (
                'id' => 244,
                'codi' => 'SGHT',
                'descripcio' => 'TEMPTATIVA D\'HOMICIDI',
                'definicio' => 'INTENTAR CAUSAR, SENSE ACONSEGUIR-HO, O SENSE PODER-HO ASSEGURAR, LA MORT DE PERSONA/ES DE FORMA INTENCIONADA O PER IMPRUDÈNCIA GREU.',
                'instrucions' => 'VEU: PS / CT: PS SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            244 => 
            array (
                'id' => 245,
                'codi' => 'SGSC',
                'descripcio' => 'SUÏCIDI CONSUMAT',
                'definicio' => 'AUTÒLISI EN LA QUAL HI HA INDICIS QUE LA PERSONA ÉS MORTA',
                'instrucions' => 'VEU: PS / CT: PS SS AVÍS BB SI EL LLOC NO ÉS ACCESIBLE
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            245 => 
            array (
                'id' => 246,
                'codi' => 'SGST',
                'descripcio' => 'TEMPTATIVA DE SUÏCIDI',
                'definicio' => 'PERSONA QUE AMENAÇA AMB SUÏCIDAR-SE O QUE JA HA INICIAT L\'AUTÒLISI. POT TRACTAR-SE D\'INTENTS EN ESPAIS INTERIORS O EXTERIORS. * PERSONES QUE ES TIREN A LES VIES DEL TREN ES CODIFICARAN COMA A ATFC" * PERSONES QUE ES TIREN O CAUEN DE BALCONS O FINESTRES ES ',
                'instrucions' => 'VEU: SS / CT: SS PS AVÍS BB SI NO HI HA ACCÉS O SI ES VOL TIRAR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            246 => 
            array (
                'id' => 247,
                'codi' => 'SGAC',
                'descripcio' => 'AMENACES / COACCIONS',
                'definicio' => 'AMENACES: INTIMIDAR A ALGÚ AMB L\'ANUNCI DE CAUSAR-LI ALGUN MAL. COACCIONS: ÚS DE VIOLÈNCIA O FETS PER OBLIGAR A UN ALTRE A FER EL QUE NO VOL.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 2,
            ),
            247 => 
            array (
                'id' => 248,
                'codi' => 'SGBD',
                'descripcio' => 'DISCUSSIÓ VERBAL',
                'definicio' => 'CONFLICTE ENTRE DOS O MES PERSONES, EN QUE ES DEFENSEN IDEES O INTERESSOS OPOSATS SENSE VIOLÈNCIA FÍSICA. EN EL CAS QUE HI HAGI VIOLÈNCIA FÍSICA ES TIPIFICARÀ COM AGRESSIÓ ENTRE PERSONES"',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 7,
            ),
            248 => 
            array (
                'id' => 249,
                'codi' => 'SGVD',
                'descripcio' => 'VIOLÈNCIA DOMÈSTICA',
                'definicio' => 'AGRESSIÓ O MALTRACTAMENT FÍSIC/PSÍQUIC QUE ES REALITZEN PER PART D\'UNA DETERMINADA PERSONA SOBRE UN O MÉS MEMBRES DEL SEU NUCLI FAMILIAR I/O DE CONVIVÈNCIA, PODEN ÉSSER SUBJECTES ACTIUS I PASSIUS TANT ELS HOMES COM LES DONES.',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 8,
            ),
            249 => 
            array (
                'id' => 250,
                'codi' => 'SGVG',
                'descripcio' => 'VIOLÈNCIA GÈNERE',
                'definicio' => 'AGRESSIÓ O MALTRACTAMENT FÍSIC/PSÍQUIC D\'HOME A DONA, ENTRE ELS QUALS HI HAGI O HI HAGI HAGUT RELACIÓ MATRIMONIAL O SENTIMENTAL, ENCARA QUE NO HI HAGI CONVIVÈNCIA.',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 6,
            ),
            250 => 
            array (
                'id' => 251,
                'codi' => 'SGS',
                'descripcio' => 'DETENCIÓ IL·LEGAL, SEGREST O TEMPTATIVA',
            'definicio' => 'PRIVAR DE LLIBERTAT (O INTENTAR-HO) A LES PERSONES EXIGINT O NO CONDICIONS PER POSAR LES EN LLIBERTAT.',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 1,
            ),
            251 => 
            array (
                'id' => 252,
                'codi' => 'SGPI',
                'descripcio' => 'PERSONA QUE CAUSA INSEGURETAT',
                'definicio' => 'PERSONA/ES, QUE PER LA SEVA ACTITUD O COMPORTAMENT, PROVOQUI/N, INQUIETUD, POR, PERTORBACIÓ O D\'ALTRES SITUACIONS DE NEGUIT O RISC A LES ALTRES PERSONES',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            252 => 
            array (
                'id' => 253,
                'codi' => 'SGPP',
                'descripcio' => 'PROTECCIÓ A PERSONES',
            'definicio' => 'PETICIÓ DE PROTECCIÓ A PERSONES. (AUTORITATS, VÍCTIMES DE FORMA CONTINUADA, PERSONES QUE NECESSITEN RECOLLIR PERTINENCES PERSONALS EN DOMICILIS EN ELS QUALS HI HA UNA PERSONA AMB ORDRE D\'ALLUNYAMENT, ETC.)',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            253 => 
            array (
                'id' => 254,
                'codi' => 'SEPV',
                'descripcio' => 'ACTES DE VANDALISME',
                'definicio' => 'PROVOCAR DANYS INTENCIONATS EN PROPIETAT PÚBLICA O PRIVADA. POT SER DE MANERA ORGANITZADA O NO',
                'instrucions' => 'VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            254 => 
            array (
                'id' => 255,
                'codi' => 'SEPP',
                'descripcio' => 'PINTADES / GRAFITTIS EN ESPAI PÚBLIC',
                'definicio' => 'ACCIÓ D\'EMBRUTAR PROPIETATS PRIVADES O PÚBLIQUES UTILITZANT BÀSICAMENT PINTURA.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 4,
            ),
            255 => 
            array (
                'id' => 256,
                'codi' => 'SEPB',
                'descripcio' => 'BARRICADES AMB MOBILIARI URBÀ',
                'definicio' => 'ACCIÓ DE COL·LOCAR OBJECTES PER OBSTACULITZAR EL PAS DE VEHICLES I PERSONES.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 9,
            ),
            256 => 
            array (
                'id' => 257,
                'codi' => 'SEPTU',
                'descripcio' => 'CONFLICTES AMB TRIBUS URBANES',
                'definicio' => 'PROBLEMÀTICA RELACIONADA AMB PERSONES INTEGRANTS DE BANDES O GRUPS ORGANITZATS, QUAN HI HA INDICIS DE PODER CAUSAR MOLÈSTIES O DISTURBIS',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 8,
            ),
            257 => 
            array (
                'id' => 258,
                'codi' => 'SMM',
                'descripcio' => 'MALTRACTAMENT DE MENORS',
                'definicio' => 'MALTRACTAMENTS O LESIONS FÍSIQUES O PSÍQUIQUES A MENORS.',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            258 => 
            array (
                'id' => 259,
                'codi' => 'SMA',
                'descripcio' => 'ABANDONAMENT DE MENORS',
                'definicio' => 'MENORS ABANDONATS SENSE LA CUSTÒDIA D\'UN ADULT.',
                'instrucions' => 'VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            259 => 
            array (
                'id' => 260,
                'codi' => 'SMD',
                'descripcio' => 'DESAMPARAMENT DE MENORS',
                'definicio' => 'INCOMPLIMENT DELS DEURES LEGALS AMB MENORS DE 18 ANYS, INCLÒS L\'INCOMPLIMENT D\'UNA CUSTÒDIA',
                'instrucions' => 'VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            260 => 
            array (
                'id' => 261,
                'codi' => 'SMDP',
                'descripcio' => 'MENOR DESAPAREGUT',
            'definicio' => 'DENÚNCIA SOBRE MENOR EN PARADOR DESCONEGUT. CERCA DE MENOR DESAPAREGUT. EN CAS D\'ESTAR PERDUT A LA MUNTANYA ES TIPIFICARÀ AMB LA CLAU DE RESCAT DE MUNTANYA (AMR)',
                'instrucions' => 'VEU: PS / AVÍS: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            261 => 
            array (
                'id' => 262,
                'codi' => 'SMMD',
                'descripcio' => 'MENDICITAT AMB MENORS',
                'definicio' => 'UTILITZAR O EXERCIR LA MENDICITAT AMB MENORS.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            262 => 
            array (
                'id' => 263,
                'codi' => 'SMP',
                'descripcio' => 'PROSTITUCIÓ DE MENORS',
                'definicio' => 'MENORS EXERCINT LA PROSTITUCIÓ A L\'ESPAI PÚBLIC O EN LOCAL',
                'instrucions' => 'VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            263 => 
            array (
                'id' => 264,
                'codi' => 'SMAE',
                'descripcio' => 'ABSENTISME ESCOLAR',
                'definicio' => 'MENOR DE 16 ANYS QUE, DINS DEL PERÍODE I JORNADA ESCOLAR, ES TROBA FORA DE RECINTE ESCOLAR SENSE HAVER ESTAT AUTORITZAT. ',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 5,
            ),
            264 => 
            array (
                'id' => 265,
                'codi' => 'SMCE',
                'descripcio' => 'CONFLICTE EN L\'ÀMBIT ESCOLAR',
            'definicio' => 'INCIDENT DINS DE L\'ÀMBIT ESCOLAR (MALTRACTAMENTS, BARALLES, ACTES DELICTIUS, ETC.)',
                'instrucions' => 'NO VEU: PS / AVÍS: PL / CT: PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 3,
            ),
            265 => 
            array (
                'id' => 266,
                'codi' => 'SMFC',
                'descripcio' => 'FUGIDA CENTRE DE MENORS',
                'definicio' => 'MENOR/S FUGIT/S DE CENTRE DE RECLUSIÓ DE MENORS, O QUE EN RÈGIM OBERT NO HA PERNOCTAT AL CENTRE O NO S\'HA PRESENTAT AL REQUERIMENT.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 6,
            ),
            266 => 
            array (
                'id' => 267,
                'codi' => 'SMT',
                'descripcio' => 'TRASLLAT DE MENORS',
                'definicio' => 'TRASLLAT DE MENORS A CENTRE ESCOLAR, DOMICILI, CENTRE DE MENORS, DEMANANT PRESÈNCIA POLICIAL',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 4,
            ),
            267 => 
            array (
                'id' => 268,
                'codi' => 'SMCAP',
                'descripcio' => 'MENORS: CONSUM D\'ALCOHOL. MÉS DE 5 PERS',
                'definicio' => 'MENORS CONSUMINT BEGUDES ALCOHÒLIQUES. ESPECÍFICA PER CONCENTRACIÓ DE MÉS DE 5 PERSONES.',
                'instrucions' => 'NO VEU: PS / AVIS: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            268 => 
            array (
                'id' => 269,
                'codi' => 'SMCAM',
                'descripcio' => 'MENORS: CONSUM D\'ALCOHOL DE 1-5 PERS.',
                'definicio' => 'MENORS CONSUMINT BEGUDES ALCOHÒLIQUES. ESPECÍFICA PER CONCENTRACIÓ D\'1 A 5 MENORS',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 6,
            ),
            269 => 
            array (
                'id' => 270,
                'codi' => 'SLD',
                'descripcio' => 'CONFLICTES O DESORDRES AMB CLIENTS',
                'definicio' => 'CONFLICTES ENTRE USUARIS I PERSONAL DE SERVEI DINS O FORA DE LOCALS DE PÚBLICA CONCURRÈNCIA.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            270 => 
            array (
                'id' => 271,
                'codi' => 'SLDA',
                'descripcio' => 'DRETS D\'ADMISSIÓ EN LOCALS',
                'definicio' => 'PROBLEMÀTICA AMB LA RESTRICCIÓ D\'ACCÉS DE LES PERSONES EN LOCALS DE PÚBLICA CONCURRÈNCIA. PER EXEMPLE LOCALS D\'OCI NOCTURN',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            271 => 
            array (
                'id' => 272,
                'codi' => 'SDTV',
                'descripcio' => 'TRÀFIC / POSSESSIÓ IL·LEGAL D\'ESTUPEFAENTS',
                'definicio' => 'ACCIÓ DE REALITZAR / FACILITAR LA VENDA, EL TRANSPORT, LA FABRICACIÓ I LA POSSESSIÓ IL·LEGAL DE SUBSTÀNCIES PSICOTRÒPIQUES O ESTUPEFAENTS.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            272 => 
            array (
                'id' => 273,
                'codi' => 'SDC',
                'descripcio' => 'CONSUM D\'ESTUPEFAENTS EN L\'ESPAI PÚBLIC',
                'definicio' => 'CONSUM DE SUBSTÀNCIES PSICOTRÒPIQUES O ESTUPEFAENTS EN ESPAIS OBERTS.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            273 => 
            array (
                'id' => 274,
                'codi' => 'SDE',
                'descripcio' => 'ABANDONAMENT D\'ESTRIS DE DROGODEPENDENTS',
                'definicio' => 'LLANÇAMENT O ABANDONAMENT D\'ESTRIS UTILITZATS PER AL CONSUM DE SUBSTÀNCIES ESTUPEFAENTS.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            274 => 
            array (
                'id' => 275,
                'codi' => 'SOEP',
                'descripcio' => 'OCUPACIÓ DE PROPIETAT PÚBLICA',
                'definicio' => 'TANCAMENT DE PERSONES, EN INSTAL·LACIONS O EDIFICIS DE TITULARITAT PÚBLICA, SENSE CONSENTIMENT DEL RESPONSABLE.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT BCN NO VEU: PS / AVÍS: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            275 => 
            array (
                'id' => 276,
                'codi' => 'SOPPR',
                'descripcio' => 'OCUPACIÓ IL·LEGAL DE PROPIETAT PARTICULAR',
                'definicio' => 'TANCAMENT DE PERSONES A L\'INTERIOR D\'UNA EDIFICACIÓ PARTICULAR AMB INTENCIÓ DE VIURE-HI SENSE CONSENTIMENT DEL PROPIETARI.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            276 => 
            array (
                'id' => 277,
                'codi' => 'SDPPUA',
                'descripcio' => 'DANYS CONTRA LA PROPIETAT PUBLICA NO MUNICIPAL',
                'definicio' => 'ACCIÓ DE PROVOCAR DESTROSSES I ESTRALLS EN EDIFICIS I INSTAL·LACIONS DE TITULARITAT PÚBLICA NO MUNICIPAL',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 6,
            ),
            277 => 
            array (
                'id' => 278,
                'codi' => 'SDPPR',
                'descripcio' => 'DANYS CONTRA LA PROPIETAT PRIVADA',
                'definicio' => 'ACCIÓ DE PROVOCAR DESTROSSES I ESTRALLS EN PROPIETATS PRIVADES.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            278 => 
            array (
                'id' => 279,
                'codi' => 'SDPPUM',
                'descripcio' => 'DANYS CONTRA LA PROPIETAT PÚBLICA MUNICIPAL',
                'definicio' => 'ACCIÓ DE PROVOCAR DESTROSSES I ESTRALLS EN EDIFICIS I INSTAL·LACIONS DE TITULARITAT PÚBLICA MUNICIPAL',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 6,
            ),
            279 => 
            array (
                'id' => 280,
                'codi' => 'SSG',
                'descripcio' => 'AGRESSIÓ SEXUAL',
                'definicio' => 'ATEMPTAR CONTRA LA LLIBERTAT SEXUAL D\'ALTRA PERSONA AMB VIOLÈNCIA O INTIMIDACIÓ',
                'instrucions' => 'VEU: PS / CT: PS CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            280 => 
            array (
                'id' => 281,
                'codi' => 'SSA',
                'descripcio' => 'ABÚS/ASSETJAMENT SEXUAL',
                'definicio' => 'ATEMPTAR CONTRA LA LLIBERTAT SEXUAL SENSE VIOLÈNCIA I/O INTIMIDACIÓ, SENSE CONSENTIMENT.',
                'instrucions' => 'VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            281 => 
            array (
                'id' => 282,
                'codi' => 'SSE',
                'descripcio' => 'EXHIBICIONISME',
                'definicio' => 'REALITZAR ACTES D\'EXHIBICIÓ OBSCENA',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            282 => 
            array (
                'id' => 283,
                'codi' => 'SSP',
                'descripcio' => 'PROXENETISME',
                'definicio' => 'INDUIR, PROMOURE O FACILITAR LA PROSTITUCIÓ SENSE O AMB CONSENTIMENT, O QUE ES FACI AMB ÀNIM DE LUCRE.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            283 => 
            array (
                'id' => 284,
                'codi' => 'SST',
                'descripcio' => 'TELÈFON ATENCIÓ A LA DONA',
                'definicio' => 'TRUCADES DE DONES SOL·LICITANT INFORMACIÓ, SUPORT, ASSESSORIA, ETC, PERQUÈ ESTAN VIVINT UNA SITUACIÓ DE VIOLÈNCIA. NO TENEN UNA EMERGÈNCIA EN EL MOMENT DE LA TRUCADA O NO VOLEN DENUNCIAR-LA, I PER TANT NO ÉS COMPETÈNCIA IMMEDIATA DE LA POLICIA DE SEGURETAT',
                'instrucions' => 'TRANSFERIR LA TRUCADA AL 900 900 120',
                'classes_incidents_id' => 10,
            ),
            284 => 
            array (
                'id' => 285,
                'codi' => 'SCM',
                'descripcio' => 'MANIFESTACIÓ ITINERANT',
                'definicio' => 'GRUP DE PERSONES QUE ES DESPLACEN PER L\'ESPAI PÚBLIC AMB CAIRE REIVINDICATIU.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA NO VEU: PS / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 4,
            ),
            285 => 
            array (
                'id' => 286,
                'codi' => 'SCC',
                'descripcio' => 'CONCENTRACIÓ ESTÀTICA DE PERSONES',
                'definicio' => 'GRUP DE PERSONES CONCENTRADES A L\'ESPAI PÚBLIC AMB CAIRE REIVINDICATIU.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA NO VEU: PS / AVÍS: BB-Bcn PL / CT: BB SS PS',
                'classes_incidents_id' => 6,
            ),
            286 => 
            array (
                'id' => 287,
                'codi' => 'SCV',
                'descripcio' => 'VAGA SERVEIS PÚBLICS',
                'definicio' => 'ATURADA DE L\'ACTIVITAT LABORAL EN EL PERSONAL DE LES ADMINISTRACIONS PÚBLIQUES I EMPRESES PÚBLIQUES.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            287 => 
            array (
                'id' => 288,
                'codi' => 'SFAP',
                'descripcio' => 'ADULTERACIÓ D\'ALIMENTS PER A PERSONES',
                'definicio' => 'INCIDÈNCIES PER L\'ADULTERACIÓ DE PRODUCTES ALIMENTARIS PER PERSONES. EN CAS DE QUE HI HAGI AFECTACIÓ DE PERSONES ES TIPIFICARÀ COM MALALTIA-INTOXICACIÓ',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 10,
            ),
            288 => 
            array (
                'id' => 289,
                'codi' => 'SFAA',
                'descripcio' => 'ADULTERACIÓ D\'ALIMENTS PER ANIMALS',
                'definicio' => 'INCIDÈNCIES PER ADULTERACIÓ D\'ALIMENTS PER ANIMALS.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 6,
            ),
            289 => 
            array (
                'id' => 290,
                'codi' => 'SFIT',
                'descripcio' => 'INCIDÈNCIA EN TRANSPORTS D\'ALIMENTS',
            'definicio' => 'INCIDÈNCIA EN TRANSPORT D\'ALIMENTS (FURGONETA, CAMIÓ,...) RELACIONADA AMB LA NORMATIVA DE SALUT PÚBLICA.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 5,
            ),
            290 => 
            array (
                'id' => 291,
                'codi' => 'SFIC',
                'descripcio' => 'INCIDÈNCIA EN COMERÇ D\'ALIMENTS',
            'definicio' => 'INCIDÈNCIA EN COMERÇ D\'ALIMENTS RELACIONADA AMB LA NORMATIVA DE SALUT PÚBLICA (MAL ESTAT, CADUCATS ...).',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 1,
            ),
            291 => 
            array (
                'id' => 292,
                'codi' => 'ST',
                'descripcio' => 'DELICTE CONTRA ELS DRETS DELS TREBALLADORS',
                'definicio' => 'PERJUDICAR, SUPRIMIR O RESTRINGIR DRETS DELS TREBALLADORS QUE ESTIGUIN RECONEGUTS EN LES DISPOSICIONS LEGALS.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            292 => 
            array (
                'id' => 293,
                'codi' => 'SJ',
                'descripcio' => 'ORDRE JUDICIAL D\'INTERNAMENT',
                'definicio' => 'COMPLIMENT D\'ORDRE D\'ÒRGAN JUDICIAL SOBRE INTERNAMENT INVOLUNTARI D\'UNA PERSONA EN CENTRE PENITENCIARI. PER EXEMPLE PERSONES EN CRIDA I CERCA',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 2,
            ),
            293 => 
            array (
                'id' => 294,
                'codi' => 'SP',
                'descripcio' => 'INCIDÈNCIES AMB PRESOS I DETINGUTS',
                'definicio' => 'ESCAPOLIMENT I ALTRES SITUACIONS DE PERSONES SOTMESES A RESTRICCIONS DE LLIBERTAT O ALTRES PROBLEMÀTIQUES.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 1,
            ),
            294 => 
            array (
                'id' => 295,
                'codi' => 'S-',
            'descripcio' => 'TAXIS (SEQTAXI)',
            'definicio' => 'INCIDENT DE SEGURETAT DEL TAXI QUAN LA TRUCADA ES REP A TRAVÉS DE LA SENYAL DEL SISTEMA SEQTAXI (PISÓN)',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 5,
            ),
            295 => 
            array (
                'id' => 296,
                'codi' => 'SRPAAD',
                'descripcio' => 'ÚS D\'APARELLS PER A POSSIBLE EXPOLI ARQUEOLÒGIC',
                'definicio' => 'ÚS D\'APARELLS PER A POSSIBLE EXPOLI ARQUEOLÒGIC',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 9,
            ),
            296 => 
            array (
                'id' => 297,
                'codi' => 'SRPAE',
                'descripcio' => 'EXPOLI DE PATRIMONI ARQUEOLÒGIC',
                'definicio' => 'EXPOLI DE PATRIMONI ARQUEOLÒGIC',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 1,
            ),
            297 => 
            array (
                'id' => 298,
                'codi' => 'SRPAD',
                'descripcio' => 'DESTRUCCIÓ DEL PATRIMONI ARQUEOLÒGIC',
                'definicio' => 'DESTRUCCIÓ DEL PATRIMONI ARQUEOLÒGIC',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 3,
            ),
            298 => 
            array (
                'id' => 299,
                'codi' => 'SZ',
                'descripcio' => 'AVISOS A POLICIA DE SEGURETAT A L\'ESTRANGER',
                'definicio' => 'INCIDENT DE SEGURETAT A L\'ESTRANGER ON LA PERSONA ES TROBA A CATALUNYA',
                'instrucions' => 'VEU:PS / CT:PS SUPERVISIÓ: Avís SCC',
                'classes_incidents_id' => 1,
            ),
            299 => 
            array (
                'id' => 300,
                'codi' => 'TAASU',
            'descripcio' => 'ATROPELLAMENT (SENSE FERITS) URBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT SENSE FERITS ON UN VIANANT ÉS ENVESTIT PER UN VEHICLE (MOTO, COTXE, CAMIÓ, TRAMVIA) EN ZONA URBANA',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            300 => 
            array (
                'id' => 301,
                'codi' => 'TAASI',
            'descripcio' => 'ATROPELLAMENT (SENSE FERITS) INTERURBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT SENSE FERITS ON UN VIANANT ÉS ENVESTIT PER UN VEHICLE (MOTO, COTXE, CAMIÓ, TRAMVIA) EN ZONA INTERURBANA',
                'instrucions' => 'VEU: PT / CT: PT
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 1,
            ),
            301 => 
            array (
                'id' => 302,
                'codi' => 'TAAFU',
            'descripcio' => 'ATROPELLAMENT (AMB FERITS) URBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT AMB FERITS ON UN VIANANT ÉS ENVESTIT PER UN VEHICLE (MOTO, COTXE, CAMIÓ, TRAMVIA) EN ZONA URBANA',
                'instrucions' => 'VEU: PL / CT: BB SS
ÀMBIT BCN VEU: PL / CT: SS / AVÍS: BB SI HI HA ATRAPATS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            302 => 
            array (
                'id' => 303,
                'codi' => 'TAAFI',
            'descripcio' => 'ATROPELLAMENT INTERURBÀ (AMB FERITS)',
            'definicio' => 'ACCIDENT DE TRÀNSIT AMB FERITS ON UN VIANANT ÉS ENVESTIT PER UN VEHICLE (MOTO, COTXE, CAMIÓ, TRAMVIA) EN ZONA INTERURBANA',
                'instrucions' => 'VEU: PT / CT: PT BB SS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 2,
            ),
            303 => 
            array (
                'id' => 304,
                'codi' => 'TAMSU',
            'descripcio' => 'CAIGUDA DE MOTO/CICLOMOTOR/BICICLETA (SENSE FERITS) URBÀ',
                'definicio' => 'ACCIDENT DE TRÀNSIT SENSE FERITS PROVOCAT PER LA CAIGUDA DEL/S OCUPANT/S D\'UNA MOTO/CICLOMOTOR/BICICLETA PER OLI, AIGUA, SORRA, FORATS, ETC. EN ZONA URBANA',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            304 => 
            array (
                'id' => 305,
                'codi' => 'TAMSI',
            'descripcio' => 'CAIGUDA DE MOTO/CICLOMOTOR/BICICLETA (SENSE FERITS) INTERURBÀ',
                'definicio' => 'ACCIDENT DE TRÀNSIT SENSE FERITS PROVOCAT PER LA CAIGUDA DEL/S OCUPANT/S D\'UNA MOTO/CICLOMOTOR/BICICLETA PER OLI, AIGUA, SORRA, FORATS, ETC. EN ZONA INTERURBANA',
                'instrucions' => 'VEU: PT / CT: PT
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 3,
            ),
            305 => 
            array (
                'id' => 306,
                'codi' => 'TAMFU',
            'descripcio' => 'CAIGUDA DE MOTO/CICLOMOTOR/BICICLETA (AMB FERITS) URBÀ',
                'definicio' => 'ACCIDENT DE TRÀNSIT AMB FERITS PROVOCAT PER LA CAIGUDA DEL/S OCUPANT/S D\'UNA MOTO/CICLOMOTOR/BICICLETA PER OLI, AIGUA, SORRA, FORATS, ETC. EN ZONA URBANA',
                'instrucions' => 'VEU: PL / CT: SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            306 => 
            array (
                'id' => 307,
                'codi' => 'TAMFI',
            'descripcio' => 'CAIGUDA DE MOTO/CILCOMOTOR/BICICLETA (AMB FERITS) INTERURBÀ',
                'definicio' => 'ACCIDENT DE TRÀNSIT PROVOCAT PER LA CAIGUDA DEL/S OCUPANT/S D\'UNA MOTO/CICLOMOTOR/BICICLETA PER OLI, AIGUA, SORRA, FORATS, ALTRE VEHICLE, ETC., INTERURBÀ',
                'instrucions' => 'VEU: PT / CT: PT SS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 6,
            ),
            307 => 
            array (
                'id' => 308,
                'codi' => 'TAVSU',
            'descripcio' => 'COL·LISIÓ DE VEHICLES (SENSE FERITS) URBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT SENSE FERITS (XOC CONTRA OBSTACLES, BOLCADES, ETC.) ON PODEN ESTAR IMPLICATS, UN O DIVERSOS VEHICLES (MOTO, COTXE, CAMIÓ, ETC) EN ZONA URBANA',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            308 => 
            array (
                'id' => 309,
                'codi' => 'TAVSI',
            'descripcio' => 'COL.LISIÓ DE VEHICLES (SENSE FERITS) INTERURBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT SENSE FERITS (XOC CONTRA OBSTACLES, BOLCADES, ETC) ON PODEN ESTAR IMPLICATS, UN O DIVERSOS VEHICLES (MOTO, COTXE, CAMIÓ, ETC.) EN ZONA INTERURBANA',
                'instrucions' => 'VEU: PT / CT: PT
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 7,
            ),
            309 => 
            array (
                'id' => 310,
                'codi' => 'TAVFU',
            'descripcio' => 'COL·LISIÓ DE VEHICLES (AMB FERITS) URBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT AMB FERITS (XOC CONTRA OBSTACLES, BOLCADES, ETC) ON PODEN ESTAR IMPLICATS, UN O DIVERSOS VEHICLES (MOTO, COTXE, CAMIÓ, ETC) EN ZONA URBANA',
                'instrucions' => 'VEU: PL / CT: BB SS
ÀMBIT BCN VEU: PL / CT: SS / AVÍS: BB SI HI HA  ATRAPATS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            310 => 
            array (
                'id' => 311,
                'codi' => 'TAVFI',
            'descripcio' => 'COL.LISIÓ DE VEHICLES (AMB FERITS) INTERURBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT AMB FERITS (XOC CONTRA OBSTACLES, BOLCADES, ETC.) ON PODEN ESTAR IMPLICATS, UN O DIVERSOS VEHICLES (MOTO, COTXE, CAMIÓ, ETC.) EN ZONA INTERURBANA',
                'instrucions' => 'VEU: PT / CT: PT SS BB
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 10,
            ),
            311 => 
            array (
                'id' => 312,
                'codi' => 'TAVTSU',
            'descripcio' => 'COL·LISIÓ DE VEHICLES EN TÚNEL (SENSE FERITS) URBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT SENSE FERITS NI FUM NI FOC (XOC CONTRA OBSTACLES, BOLCADES, ETC.) EN INTERIOR DE TÚNEL ON PODEN ESTAR IMPLICATS, UN O DIVERSOS VEHICLES (MOTO, COTXE, CAMIÓ, ETC.) EN ZONA URBANA. EN CAS D\'INCENDI ES CODIFICARÀ: IUIT (INCENDI EN TÚNEL)',
                'instrucions' => 'VEU: PL / CT: BB
ÀMBIT BCN VEU: PL / AVÍS: BB',
                'classes_incidents_id' => 9,
            ),
            312 => 
            array (
                'id' => 313,
                'codi' => 'TAVTSI',
                'descripcio' => 'COL.LISIÓ DE VEHICLES EN TUNEL SENSE FERITS INTERURBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT SENSE FERITS, SENSE FUM O FOC (XOC CONTRA OBSTACLES, BOLCADES, ETC.) EN INTERIOR DE TÚNEL ON PODEN ESTAR IMPLICATS, UN O DIVERSOS VEHICLES (MOTO, COTXE, CAMIÓ, ETC.) EN ZONA INTERURBANA. EN CAS D\'INCENDI ES CODIFICARÀ: IUIT (INCENDI EN ',
                'instrucions' => 'VEU: PT / CT: PT
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 9,
            ),
            313 => 
            array (
                'id' => 314,
                'codi' => 'TAVTFU',
            'descripcio' => 'COL·LISIÓ DE VEHICLES EN TÚNEL (AMB FERITS) URBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT AMB FERITS, SENSE FUM O FOC (XOC CONTRA OBSTACLES, BOLCADES, ETC.) EN INTERIOR DE TÚNEL ON PODEN ESTAR IMPLICATS, UN O DIVERSOS VEHICLES (MOTO, COTXE, CAMIÓ, ETC.) EN ZONA URBANA. EN CAS D\'INCENDI ES CODIFICARÀ: IUIT (INCENDI EN TÚNEL)',
                'instrucions' => 'VEU: PL / CT: BB SS
ÀMBIT BCN VEU: PL / CT: SS / AVÍS: BB SI HI HA ATRAPATS',
                'classes_incidents_id' => 6,
            ),
            314 => 
            array (
                'id' => 315,
                'codi' => 'TAVTFI',
            'descripcio' => 'COl:LISIÓ DE VEHICLE EN TUNEL (AMB FERITS) INTERURBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT AMB FERITS, SENSE FUM O FOC (XOC CONTRA OBSTACLES, BOLCADES, ETC.) EN INTERIOR DE TÚNEL ON PODEN ESTAR IMPLICATS, UN O DIVERSOS VEHICLES (MOTO, COTXE, CAMIÓ, ETC.) EN ZONA INTERURBANA. EN CAS D\'INCENDI ES CODIFICARÀ: IUIT (INCENDI EN TÚ',
                'instrucions' => 'VEU: PT / CT: PT BB SS
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 7,
            ),
            315 => 
            array (
                'id' => 316,
                'codi' => 'TAMPSU',
            'descripcio' => 'ACCIDENT AMB VEHICLE DE MATÈRIES PERILLOSES (SENSE FUITA) URBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT ON INTERVÉ UN VEHICLE QUE TRANSPORTA MATÈRIES PERILLOSES (CAMIÓ CISTERNA / CAMIÓ CAIXA QUE TRANSPORTA BIDONS, BOMBONES) SENSE QUE HI HAGI  ESSAMENT, EN ZONA URBANA',
                'instrucions' => 'VEU: PL / CT: BB SS
ÀMBIT BCN VEU: PL / AVÍS: BB / CT: SS',
                'classes_incidents_id' => 8,
            ),
            316 => 
            array (
                'id' => 317,
                'codi' => 'TAMPSI',
            'descripcio' => 'ACCIDENT AMB VEHICLE DE MATÈRIES PERILLOSES (SENSE FUITA) INTERURBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT ON INTERVÉ UN VEHICLE QUE TRANSPORTA MATÈRIES PERILLOSES (CAMIÓ CISTERNA / CAMIÓ CAIXA QUE TRANSPORTA BIDONS, BOMBONES) SENSE QUE HI HAGI VESSAMENT, EN ZONA INTERURBANA',
                'instrucions' => 'VEU: PT / CT: PT BB SS
ÀMBIT VALLVIDRERA VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 1,
            ),
            317 => 
            array (
                'id' => 318,
                'codi' => 'TAMPFU',
            'descripcio' => 'ACCIDENT AMB VEHICLE DE MATÈRIES PERILLOSES (AMB FUITA) URBÀ',
            'definicio' => 'ACCIDENT DE TRÀNSIT ON INTERVÉ UN VEHICLE QUE TRANSPORTA MATÈRIES PERILLOSES (CAMIÓ CISTERNA / CAMIÓ CAIXA QUE TRANSPORTA BIDONS, BOMBONES) AMB FUITA, EN ZONA URBANA',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB SS
ÀMBIT BCN VEU: BB / CT: SS',
                'classes_incidents_id' => 9,
            ),
            318 => 
            array (
                'id' => 319,
                'codi' => 'TAMPFI',
            'descripcio' => 'ACCIDENT AMB VEHICLE DE MATÈRIES PERILLOSES (AMB FUITA)',
            'definicio' => 'ACCIDENT DE TRÀNSIT ON INTERVÉ UN VEHICLE QUE TRANSPORTA MATÈRIES PERILLOSES (CAMIÓ CISTERNA / CAMIÓ CAIXA QUE TRANSPORTA BIDONS, BOMBONES) AMB FUITA, EN ZONA INTERURBANA',
                'instrucions' => 'VEU: BB / CT: PT BB SS AR
ÀMBIT VALLVIDRERA VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 4,
            ),
            319 => 
            array (
                'id' => 320,
                'codi' => 'TAMPEU',
                'descripcio' => 'GRAN ACCIDENT AMB VEHICLE DE MATÈRIES PERILLOSES URBÀ',
            'definicio' => 'GRAN ACCIDENT DE TRÀNSIT ON INTERVÉ UN VEHICLE QUE TRANSPORTA MATÈRIES PERILLOSES (CAMIÓ CISTERNA / CAMIÓ CAIXA QUE TRANSPORTA BIDONS, BOMBONES) I ES PRODUEIX UN GRAN VESSAMENT I/O EXPLOSIÓ EN VIA URBANA',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT: BB SS
ÀMBIT BCN VEU: BB / CT: SS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            320 => 
            array (
                'id' => 321,
                'codi' => 'TAMPEI',
                'descripcio' => 'GRAN ACCIDENT AMB VEHICLE DE MATERIES PERILLOSES INTERURBÀ',
            'definicio' => 'GRAN ACCIDENT DE TRÀNSIT ON INTERVÉ UN VEHICLE QUE TRANSPORTA MATÈRIES PERILLOSES (CAMIÓ CISTERNA / CAMIÓ CAIXA QUE TRANSPORTA BIDONS, BOMBONES) I ES PRODUEIX UN GRAN VESSAMENT I/O EXPLOSIÓ EN ZONA INTERURBANA',
                'instrucions' => 'VEU: BB / CT: BB PT SS AR
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA VEU: BB / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 6,
            ),
            321 => 
            array (
                'id' => 322,
                'codi' => 'TAASSU',
            'descripcio' => 'COL·LISIÓ DE VEHICLES AMB ANIMALS SALVATGES (SENSE FERITS) URBÀ',
                'definicio' => 'ACCIDENT DE TRÀNSIT URBÀ SENSE FERITS, PROVOCAT PER XOC AMB ANIMAL SALVATGE',
                'instrucions' => 'VEU: PL / CT: AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            322 => 
            array (
                'id' => 323,
                'codi' => 'TAASSI',
            'descripcio' => 'COL·LISIÓ DE VEHICLES AMB ANIMALS SALVATGES (SENSE FERITS) INTERURBÀ',
                'definicio' => 'ACCIDENT DE TRÀNSIT INTERURBÀ SENSE FERITS, PROVOCAT PER XOC AMB ANIMAL SALVATGE',
                'instrucions' => 'VEU: PT / CT: PT AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            323 => 
            array (
                'id' => 324,
                'codi' => 'TAASFU',
            'descripcio' => 'COL·LISIÓ DE VEHICLES AMB ANIMAL SALVATGE (AMB FERITS) URBÀ',
                'definicio' => 'ACCIDENT DE TRÀNSIT URBÀ AMB FERITS, PROVOCAT PER XOC AMB ANIMAL SALVATGE',
                'instrucions' => 'VEU: PL / AVÍS: AR / CT: BB SS AR 
ÀMBIT BCN VEU: PL / AVÍS: AR / CT: SS / AVÍS: BB SI HI HA ATRAPATS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            324 => 
            array (
                'id' => 325,
                'codi' => 'TAASFI',
            'descripcio' => 'COL·LISIÓ DE VEHICLES AMB ANIMAL SALVATGE (AMB FERITS) INTERURBÀ',
                'definicio' => 'ACCIDENT DE TRÀNSIT INTERURBÀ AMB FERITS, PROVOCAT PER XOC AMB ANIMAL SALVATGE',
                'instrucions' => 'VEU: PT / AVÍS: AR / CT: PT BB SS AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            325 => 
            array (
                'id' => 326,
                'codi' => 'TACTPU',
                'descripcio' => 'CAIGUDA DE PASSATGER DE TRANSPORT PÚBLIC URBÀ',
                'definicio' => 'FERITS PER CAIGUDA DE PASSATGERS DE VEHICLES DE TRANSPORT PÚBLIC EN ZONA URBANA',
                'instrucions' => 'VEU: PL / CT: SS / AVÍS: BB SI HI HA ATRAPATS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            326 => 
            array (
                'id' => 327,
                'codi' => 'TACTPI',
                'descripcio' => 'CAIGUDA PASSATGER DE TRANSPORT PÚBLIC INTERURBÀ',
                'definicio' => 'FERITS PER CAIGUDA DE PASSATGERS DE VEHICLES DE TRANSPORT PÚBLIC EN ZONA INTERURBANA',
                'instrucions' => 'VEU: PT / CT: PT SS AVÍS: BB SI HI HA ATRAPATS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            327 => 
            array (
                'id' => 328,
                'codi' => 'TFEU',
                'descripcio' => 'INCIDÈNCIA DE TRÀNSIT PER SATURACIÓ DE LA VIA URBANA',
                'definicio' => 'AFECTACIONS AL TRÀNSIT URBÀ PRODUÏDES PER AFLUÈNCIA DE VEHICLES SENSE LA CONCURRÈNCIA DE CAP OBSTACLE',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            328 => 
            array (
                'id' => 329,
                'codi' => 'TFEI',
                'descripcio' => 'INCIDÈNCIA DE TRÀNSIT PER SATURACIÓ DE LA VIA INTERURBANA',
                'definicio' => 'AFECTACIONS AL TRÀNSIT INTERURBÀ PRODUÏDES PER AFLUÈNCIA DE VEHICLES SENSE LA CONCURRÈNCIA DE CAP OBSTACLE ',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            329 => 
            array (
                'id' => 330,
                'codi' => 'TFOU',
                'descripcio' => 'OBRES AUTORITZADES EN ESPAI PÚBLIC URBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER OCUPACIONS AUTORITZADES DE CALÇADA COM PODEN SER: PAVIMENTACIÓ, OBRES DE REMODELACIÓ DE CARRERS, OBRES DE MILLORA DE SERVEIS, ETC.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            330 => 
            array (
                'id' => 331,
                'codi' => 'TFOI',
                'descripcio' => 'OBRES AUTORITZADES EN ESPAI PÚBLIC INTERURBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT INTERURBÀ PER OBRES AUTORITZADES DE CALÇADA COM PODEN SER: PAVIMENTACIÓ, OBRES DE REMODELACIÓ DE CARRERS, OBRES DE MILLORA DE SERVEIS, ETC.',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            331 => 
            array (
                'id' => 332,
                'codi' => 'TFCU',
                'descripcio' => 'INCIDÈNCIA DE TRÀNSIT PER CLIMATOLOGIA URBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT URBÀ PRODUÏDES PER LA CLIMATOLOGIA ADVERSA QUE POT PROVOCAR RESTRICCIONS DE CARRILS O TRAMS DE VIA ',
                'instrucions' => 'VEU: PL / CT: AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            332 => 
            array (
                'id' => 333,
                'codi' => 'TFCI',
                'descripcio' => 'INCIDÈNCIA DE TRÀNSIT PER CLIMATOLOGIA INTERURBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT INTERURBÀ PRODUÏDES PER LA CLIMATOLOGIA ADVERSA QUE POT PROVOCAR RESTRICCIONS DE CARRILS O TRAMS DE VIA ',
                'instrucions' => 'NO VEU: PT / CT: PT AR
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            333 => 
            array (
                'id' => 334,
                'codi' => 'TFOKU',
                'descripcio' => 'OCUPACIÓ AUTORITZADA D\'ESPAI PÚBLIC URBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT URBÀ PER OCUPACIONS AUTORITZADES DE CALÇADA COM PODEN SER: INSTAL·LACIÓ DE GRUA, DESCÀRREGA AUTORITZADA, MUDANCES, RODATGE DE PEL·LÍCULA, ETC',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            334 => 
            array (
                'id' => 335,
                'codi' => 'TFOKI',
                'descripcio' => 'OCUPACIÓ AUTORITZADA D\'ESPAI PÚBLIC INTERURBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT INTERURBÀ PER OCUPACIONS AUTORITZADES DE CALÇADA COM PODEN SER: INSTAL·LACIÓ DE GRUA, DESCÀRREGA AUTORITZADA, MUDANCES, RODATGE DE PEL·LÍCULA, ETC',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            335 => 
            array (
                'id' => 336,
                'codi' => 'TFFU',
                'descripcio' => 'FESTA/ACTE/PROVA ESPORTIVA URBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT URBÀ PER FESTES, ACTES PÚBLICS, PROVES ESPORTIVES, MITINGS POLÍTICS, FESTES VEÏNALS, ETC.',
                'instrucions' => 'VEU: PL / CT: AR',
                'classes_incidents_id' => 10,
            ),
            336 => 
            array (
                'id' => 337,
                'codi' => 'TFFI',
                'descripcio' => 'FESTA/ACTE/PROVA ESPORTIVA INTRURBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT INTERURBÀ PER FESTES, ACTES PÚBLICS, PROVES ESPORTIVES, MITINGS POLÍTICS, FESTES VEÏNALS, ETC.',
                'instrucions' => 'NO VEU: PT / CT: PT AR',
                'classes_incidents_id' => 6,
            ),
            337 => 
            array (
                'id' => 338,
                'codi' => 'TEGP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN GUAL',
                'definicio' => 'VEHICLE ESTACIONAT EN GUAL SENSE QUE EL SEU CONDUCTOR ESTIGUI AL VEHICLE PER PODER TREURE\'L QUAN SIGUI NECESSARI.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            338 => 
            array (
                'id' => 339,
                'codi' => 'TEGM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN GUAL',
                'definicio' => 'VEHICLE ESTACIONAT EN GUAL SENSE QUE EL SEU CONDUCTOR ESTIGUI AL VEHICLE PER PODER TREURE\'L QUAN SIGUI NECESSARI.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            339 => 
            array (
                'id' => 340,
                'codi' => 'TEZS',
                'descripcio' => 'VEHICLE ESTACIONAT EN ZONA DE SEGURETAT',
                'definicio' => 'ZONES DE CALÇADA ON NO ES PERMET PARAR NI ESTACIONAR, AMB LA SENYALITZACIÓ DE PROHIBIT PARAR I AMB EL RECTANGLE SOTA EL SENYAL QUE INDICA: ZONA DE SEGURETAT.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            340 => 
            array (
                'id' => 341,
                'codi' => 'TECDP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN ZONA DE CÀRREGA I DESCÀRREGA',
                'definicio' => 'ZONES DE CALÇADA RESERVADES PER A CÀRREGA I DESCÀRREGA DE MERCADERIES I SENYALITZADES AMB EL SENYAL CORRESPONENT INDICANT L\'HORARI RESERVAT.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            341 => 
            array (
                'id' => 342,
                'codi' => 'TECDM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN ZONA DE CÀRREGA I DESCÀRREGA',
                'definicio' => 'ZONES DE CALÇADA RESERVADES PER A CÀRREGA I DESCÀRREGA DE MERCADERIES I SENYALITZADES AMB EL SENYAL CORRESPONENT INDICANT L\'HORARI RESERVAT.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            342 => 
            array (
                'id' => 343,
                'codi' => 'TERO',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN RESERVA D\'OBRES',
                'definicio' => 'ZONES DE CALÇADA RESERVADES PER A EDIFICIS EN CONSTRUCCIÓ I/O OBRES AL CARRER I QUE HAN D\'ESTAR DELIMITADES PELS SENYALS CORRESPONENTS AMB UN RECTANGLE SOTA EL SENYAL QUE INDICA L\'HORARI DE PROHIBICIÓ.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            343 => 
            array (
                'id' => 344,
                'codi' => 'TEMP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN RESERVA DE MINUSVÀLID',
                'definicio' => 'ZONES DE CALÇADA RESERVADES PER A DISMINUÏTS FÍSICS. PODEN SER INDIVIDUALS O COL·LECTIVES.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            344 => 
            array (
                'id' => 345,
                'codi' => 'TEMM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN RESERVA DE MINUSVÀLID',
                'definicio' => 'ZONES DE CALÇADA RESERVADES PER A DISMINUÏTS FÍSICS. PODEN SER INDIVIDUALS O COL·LECTIVES.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            345 => 
            array (
                'id' => 346,
                'codi' => 'TEPTPP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN PARADA DE TRANSPORT PÚBLIC',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER VEHICLES ESTACIONATS EN PARADES DE BUS, AUTOCARS I TAXIS.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            346 => 
            array (
                'id' => 347,
                'codi' => 'TEPTPM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN PARADA DE TRANSPORT PÚBLIC',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER VEHICLES ESTACIONATS EN PARADES DE BUS, AUTOCARS I TAXIS.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            347 => 
            array (
                'id' => 348,
                'codi' => 'TECEP',
                'descripcio' => 'VEHICLE/S ESTAC. EN CARRIL ESPECIAL',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER VEHICLES ESTACIONATS EN CARRIL BUS, BICICLETA, ETC.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            348 => 
            array (
                'id' => 349,
                'codi' => 'TECEM',
                'descripcio' => 'VEHICLE/S ESTAC. EN CARRIL ESPECIAL',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER VEHICLES ESTACIONATS EN CARRIL BUS, BICICLETA, ETC.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            349 => 
            array (
                'id' => 350,
                'codi' => 'TEXXRP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN ALTRES ZONES RESERVADES',
                'definicio' => 'ZONES DE CALÇADA RESERVADES PER A L\'ESTACIONAMENT DEL 061, MOTOS, CONTENIDORS I TOTES LES QUE NO TENEN TIPUS INDIVIDUALITZAT.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            350 => 
            array (
                'id' => 351,
                'codi' => 'TEXXRM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S EN ALTRES ZONES RESERVADES',
                'definicio' => 'ZONES DE CALÇADA RESERVADES PER A L\'ESTACIONAMENT DEL 061, MOTOS, CONTENIDORS I TOTES LES QUE NO TENEN TIPUS INDIVIDUALITZAT.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            351 => 
            array (
                'id' => 352,
                'codi' => 'TEXXPP',
                'descripcio' => 'VEHICLE/S ESTAC. EN ALTRES LLOCS PROHIBITS',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER VEHICLES ESTACIONATS EN LLOCS QUE NO TENEN INCIDENT PERSONALITZAT. SEMPRE AMB SENYAL DE PROHIBICIÓ D\'ESTACIONAR.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            352 => 
            array (
                'id' => 353,
                'codi' => 'TEXXPM',
                'descripcio' => 'VEHICLE/S ESTAC. EN ALTRES LLOCS PROHIBITS',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER VEHICLES ESTACIONATS EN LLOCS QUE NO TENEN INCIDENT PERSONALITZAT. SEMPRE AMB SENYAL DE PROHIBICIÓ D\'ESTACIONAR.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            353 => 
            array (
                'id' => 354,
                'codi' => 'TEDTP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S DIFICULTANT EL TRÀNSIT DE VEHICLES',
                'definicio' => 'VEHICLES ESTACIONATS EN DOBLE FILERA, ESTACIONAMENT PROHIBIT, ESTACIONAMENT QUINZENAL / TRIMESTRAL, DIFICULTANT GIR, VÈRTEX.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            354 => 
            array (
                'id' => 355,
                'codi' => 'TEDTM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S DIFICULTANT EL TRÀNSIT DE VEHICLES',
                'definicio' => 'VEHICLES ESTACIONATS EN DOBLE FILERA, ESTACIONAMENT PROHIBIT, ESTACIONAMENT QUINZENAL / TRIMESTRAL, DIFICULTANT GIR, VÈRTEX.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            355 => 
            array (
                'id' => 356,
                'codi' => 'TEDVP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S DIFICULTANT TRÀNSIT DE VIANANTS',
                'definicio' => 'AFECTACIONS AL TRÀNSIT DE VIANANTS PER VEHICLES ESTACIONATS EN VORERA, PAS DE VIANANTS, ILLES DE VIANANTS, ETC.. ',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            356 => 
            array (
                'id' => 357,
                'codi' => 'TEDVM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S DIFICULTANT TRÀNSIT DE VIANANTS',
                'definicio' => 'AFECTACIONS AL TRÀNSIT DE VIANANTS PER VEHICLES ESTACIONATS EN VORERA, PAS DE VIANANTS, ILLES DE VIANANTS, ETC..',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            357 => 
            array (
                'id' => 358,
                'codi' => 'TEDO',
                'descripcio' => 'VEHICLE/S QUE DIFICULTEN OBRES / TREBALLS',
                'definicio' => 'AFECTACIÓ PER VEHICLES QUE DIFICULTEN LA REALITZACIÓ D\'OBRES O TREBALLS AUTORITZATS EN ESPAIS PÚBLICS.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            358 => 
            array (
                'id' => 359,
                'codi' => 'TEBVP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S BLOQUEJANT UN ALTRE',
                'definicio' => 'VEHICLE/S ESTACIONAT/S BLOQUEJANT EL MOVIMENT D\'ALTRES ESTACIONATS CORRECTAMENT.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            359 => 
            array (
                'id' => 360,
                'codi' => 'TEBVM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S BLOQUEJANT UN ALTRE.',
                'definicio' => 'VEHICLE/S ESTACIONAT/S BLOQUEJANT EL MOVIMENT D\'ALTRES ESTACIONATS CORRECTAMENT.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            360 => 
            array (
                'id' => 361,
                'codi' => 'TEBIP',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S BLOQUEJANT ACCÉS IMMOBLE',
                'definicio' => 'VEHICLE/S ESTACIONATS, EN VORERA O EN CARRERS SENSE VORERA, QUE IMPEDEIXEN O DIFICULTEN ENTRAR O SORTIR D\'IMMOBLES, LOCALS, ETC..',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 6,
            ),
            361 => 
            array (
                'id' => 362,
                'codi' => 'TEBIM',
                'descripcio' => 'VEHICLE/S ESTACIONAT/S BLOQUEJANT ACCÉS IMMOBLE',
                'definicio' => 'VEHICLE/S ESTACIONATS, EN VORERA O EN CARRERS SENSE VORERA, QUE IMPEDEIXEN O DIFICULTEN ENTRAR O SORTIR D\'IMMOBLES, LOCALS, ETC..',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 3,
            ),
            362 => 
            array (
                'id' => 363,
                'codi' => 'TEBCP',
                'descripcio' => 'VEHICLE/S ESTAC. IMPEDEIX RETIRADA DE CONTENIDOR',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER VEHICLES ESTACIONATS DAVANT DE CONTENIDORS AMB UBICACIÓ SENYALITZADA AL TERRA, QUE IMPEDEIX LA RETIRADA.',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 2,
            ),
            363 => 
            array (
                'id' => 364,
                'codi' => 'TEBCM',
                'descripcio' => 'VEHICLE/S ESTAC. IMPEDEIX RETIRADA DE CONTENIDOR',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER VEHICLES ESTACIONATS DAVANT DE CONTENIDORS AMB UBICACIÓ SENYALITZADA AL TERRA, QUE IMPEDEIX LA RETIRADA.',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 7,
            ),
            364 => 
            array (
                'id' => 365,
                'codi' => 'TEDS',
                'descripcio' => 'VEHICLE/S ESTAC. DIFICULTANT VISIBILITAT DE SENYALS',
            'definicio' => 'VEHICLES ESTACIONATS QUE IMPEDEIXEN LA VISIBILITAT DE SENYALS (SENYALS DE PERILL, STOP, CEDIU EL PAS, ENTRADA PROHIBIDA, ETC.)',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            365 => 
            array (
                'id' => 366,
                'codi' => 'TEVD',
                'descripcio' => 'VEHICLE DESFRENAT',
                'definicio' => 'VEHICLE ESTACIONAT SENSE FRENS, EN LLOC ON ES POT DESPLAÇAR I CREAR SITUACIONS DE PERILL.',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            366 => 
            array (
                'id' => 367,
                'codi' => 'TEVID',
                'descripcio' => 'VEHICLE IMPLICAT EN DELICTE',
                'definicio' => 'REQUERIMENT PER INGRESSAR EN DIPÒSIT VEHICLES IMPLICATS EN DILIGÈNCIES POLICIALS',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            367 => 
            array (
                'id' => 368,
                'codi' => 'TEVOP',
                'descripcio' => 'OCUPACIÓ IL·LEGAL DE PARKING',
                'definicio' => 'OCUPACIÓ IL·LEGAL DE PARKING PRIVAT.',
                'instrucions' => 'NO VEU: PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            368 => 
            array (
                'id' => 369,
                'codi' => 'TIEU',
                'descripcio' => 'CONDUIR EN ESTAT ETÍLIC URBÀ',
                'definicio' => 'AFECTACIONS A LA SEGURETAT DEL TRÀNSIT PER LA CONDUCCIÓ DE VEHICLES EN ESTAT EBRI EN ZONES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            369 => 
            array (
                'id' => 370,
                'codi' => 'TIEI',
                'descripcio' => 'CONDUIR EN ESTAT ETÍLIC INTERURBÀ',
                'definicio' => 'AFECTACIONS A LA SEGURETAT DEL TRÀNSIT PER LA CONDUCCIÓ DE VEHICLES EN ESTAT EBRI EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            370 => 
            array (
                'id' => 371,
                'codi' => 'TIDU',
                'descripcio' => 'CONDUIR SOTA EFECTES DE DROGUES/PSICOTRÒPICS URBÀ',
                'definicio' => 'AFECTACIONS A LA SEGURETAT DEL TRÀNSIT PER LA CONDUCCIÓ DE VEHICLES SOTA EFECTES DROGUES EN ZONES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            371 => 
            array (
                'id' => 372,
                'codi' => 'TIDI',
                'descripcio' => 'CONDUIR SOTA EFECTES DE DROGUES/PSICOTRÒPICS INTERURBÀ',
                'definicio' => 'AFECTACIONS A LA SEGURETAT DEL TRÀNSIT PER LA CONDUCCIÓ DE VEHICLES SOTA EFECTES DROGUES EN ZONES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            372 => 
            array (
                'id' => 373,
                'codi' => 'TITU',
                'descripcio' => 'CONDUIR DE FORMA TEMERÀRIA URBÀ',
                'definicio' => 'CONDUCCIÓ TEMERÀRIA O NEGLIGENT EN VIES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            373 => 
            array (
                'id' => 374,
                'codi' => 'TITIC',
                'descripcio' => 'VEHICLE EN CONTRADIRECCIÓ',
                'definicio' => 'VEHICLE EN CONTRADIRECCIÓ.',
                'instrucions' => 'VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            374 => 
            array (
                'id' => 375,
                'codi' => 'TITIN',
                'descripcio' => 'CONDUIR DE FORMA TEMERÀRIA INTERURBÀ',
                'definicio' => 'CONDUCCIÓ TEMERÀRIA O NEGLIGENT EN VIES INTERURBANES. EXCEPTE CONTRADIRECCIÓ.',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            375 => 
            array (
                'id' => 376,
                'codi' => 'TICTU',
                'descripcio' => 'INFRACCIÓ VEHICLES CAMP A TRAVÉS URBÀ',
                'definicio' => 'INFRACCIONS PER ACCÉS MOTORITZAT CAMP A TRAVÉS EN ZONA URBANA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 4,
            ),
            376 => 
            array (
                'id' => 377,
                'codi' => 'TICTI',
                'descripcio' => 'INFRACCIÓ VEHICLES CAMP A TRAVÉS INTERURBÀ',
            'definicio' => 'INFRACCIONS PER ACCÉS MOTORITZAT CAMP A TRAVÉS EN ZONA INTERURBANA (MARGES DE CARRETERES, VIES DE SERVEI, ETC)',
                'instrucions' => 'NO VEU: PT / CT: PT',
                'classes_incidents_id' => 1,
            ),
            377 => 
            array (
                'id' => 378,
                'codi' => 'TICTN',
                'descripcio' => 'INFRACCIÓ VEHICLES CAMP A TRAVÉS MEDI NATURAL',
                'definicio' => 'INFRACCIÓ PER ACCÉS MOTORITZAT EN MEDI NATURAL.',
                'instrucions' => 'VEU: AR / CT: AR PT',
                'classes_incidents_id' => 8,
            ),
            378 => 
            array (
                'id' => 379,
                'codi' => 'TIPFU',
                'descripcio' => 'INFRACCIÓ VEHICLES EN PISTES FORESTALS URBÀ',
                'definicio' => 'INFRACCIONS PER ACCÉS MOTORITZAT EN PISTES FORESTALS QUE FORMEN PART DE ZONA URBANA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 2,
            ),
            379 => 
            array (
                'id' => 380,
                'codi' => 'TIPFI',
                'descripcio' => 'INFRACCIÓ VEHICLES EN PISTES FORESTALS INTERURBÀ',
                'definicio' => 'INFRACCIONS PER ACCÉS MOTORITZAT EN PISTES FORESTALS QUE FORMEN PART DE VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT',
                'classes_incidents_id' => 2,
            ),
            380 => 
            array (
                'id' => 381,
                'codi' => 'TIPFN',
                'descripcio' => 'INFRACCIÓ VEHICLES EN PISTES FORESTALS MEDI NATURAL',
                'definicio' => 'INFRACCIONS PER ACCÉS MOTORITZAT EN PISTES FORESTALS',
                'instrucions' => 'VEU: AR / CT: AR PT',
                'classes_incidents_id' => 10,
            ),
            381 => 
            array (
                'id' => 382,
                'codi' => 'TIAGU',
                'descripcio' => 'INFRACCIONS ACTIVITATS EN GRUP URBÀ',
                'definicio' => 'INFRACCIONS D\'ACTIVITATS ORGANITZADES AMB VEHICLES A MOTOR EN ZONA URBANA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 8,
            ),
            382 => 
            array (
                'id' => 383,
                'codi' => 'TIAGI',
                'descripcio' => 'INFRACCIONS ACTIVITATS EN GRUP INTERURBÀ',
            'definicio' => 'INFRACCIONS D\'ACTIVITATS ORGANTIZADES AMB VEHICLES A MOTOR EN VIA INTERURBANA (CARRERES IL·LEGALS, ETC)',
                'instrucions' => 'NO VEU: PT / CT: PT',
                'classes_incidents_id' => 6,
            ),
            383 => 
            array (
                'id' => 384,
                'codi' => 'TIAGN',
                'descripcio' => 'INFRACCIONS ACTIVITATS EN GRUP MEDI NATURAL',
            'definicio' => 'INFRACCIONS D\'ACTIVITATS ORGANITZADES AMB VEHICLES A MOTOR EN EL MEDI NATURAL (CARRERES IL·LEGALS, ETC.)',
                'instrucions' => 'VEU: AR / CT: AR PT',
                'classes_incidents_id' => 7,
            ),
            384 => 
            array (
                'id' => 385,
                'codi' => 'TIIRU',
                'descripcio' => 'INFRACCIÓ PER INCOMPLIMENT DE REQUISITS DEL VEHICLE URBÀ',
                'definicio' => 'INCLOU INFRACCIONS D\'ITV, PLAQUES DE MATRÍCULA, ENLLUMENAT, FUMS, SOROLLS, PNEUMÀTICS EN MAL ESTAT, ETC., EN ZONES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            385 => 
            array (
                'id' => 386,
                'codi' => 'TIIRI',
                'descripcio' => 'INFRACCIÓ PER INCOMPLIMENT DE REQUISITS DEL VEHICLE INTERURBÀ',
                'definicio' => 'INCLOU INFRACCIONS D\'ITV, PLAQUES DE MATRÍCULA, ENLLUMENAT, FUMS, SOROLLS, PNEUMÀTICS EN MAL ESTAT, ETC.',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            386 => 
            array (
                'id' => 387,
                'codi' => 'TIVEU',
                'descripcio' => 'INFRACCIÓ DE VEHICLE ESPECIAL URBÀ',
                'definicio' => 'INFRACCIONS PER TRANSPORT EN VEHICLE ESPECIAL SENSE PERMÍS, VEHICLE DE MIDES ESPECIALS SENSE SENYALITZAR, ETC., EN ZONES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            387 => 
            array (
                'id' => 388,
                'codi' => 'TIVEI',
                'descripcio' => 'INFRACCIÓ DE VEHICLE ESPECIAL INTERURBÀ',
                'definicio' => 'INFRACCIONS PER TRANSPORT EN VEHICLE ESPECIAL SENSE PERMÍS, VEHICLE DE MIDES ESPECIALS SENSE SENYALITZAR, ETC., EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            388 => 
            array (
                'id' => 389,
                'codi' => 'TIXXU',
                'descripcio' => 'ALTRES INFRACCIONS URBÀ',
                'definicio' => 'ALTRES INFRACCIONS NO TIPIFICADES RELACIONADES AMB LA CIRCULACIÓ MOTORITZADA EN ZONA URBANA',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            389 => 
            array (
                'id' => 390,
                'codi' => 'TIXXI',
                'descripcio' => 'ALTRES INFRACCIONS INTERURBÀ',
                'definicio' => 'ALTRES INFRACCIONS NO TIPIFICADES RELACIONADES AMB LA CIRCULACIÓ MOTORITZADA EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 6,
            ),
            390 => 
            array (
                'id' => 391,
                'codi' => 'TIXXN',
                'descripcio' => 'ALTRES INFRACCIONS MEDI NATURAL',
                'definicio' => 'ALTRES INFRACCIONS NO TIPIFICADES RELACIONADES AMB LA CIRCULACIÓ MOTORITZADA EN MEDI NATURAL',
                'instrucions' => 'VEU: AR / CT: AR PT',
                'classes_incidents_id' => 8,
            ),
            391 => 
            array (
                'id' => 392,
                'codi' => 'TOCU',
                'descripcio' => 'OBSTACLES EN CALÇADA URBANA',
            'definicio' => 'OBSTACLES A LA CALÇADA QUE SUPOSEN PERILL PER A LA CIRCULACIÓ. (SOTS, CAIGUDES DE CÀRREGA, ARBRES CAIGUTS, TANQUES, ETC.) EN ZONA URBANA',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            392 => 
            array (
                'id' => 393,
                'codi' => 'TOCI',
                'descripcio' => 'OBSTACLES EN CALÇADA INTERURBANA',
            'definicio' => 'OBSTACLES A LA CALÇADA QUE SUPOSEN PERILL PER A LA CIRCULACIÓ. (SOTS, CAIGUDES DE CÀRREGA, ARBRES CAIGUTS, TANQUES, ETC.) EN VIA INTERURBANA',
                'instrucions' => 'NUNO VEU: PT / CT: PT
ÀMBIT AEROPORTLL',
                'classes_incidents_id' => 9,
            ),
            393 => 
            array (
                'id' => 394,
                'codi' => 'TOVU',
                'descripcio' => 'OBSTACLES EN VORERA PELS VIANANTS URBÀ',
            'definicio' => 'AFECTACIONS AL TRÀNSIT DE VIANANTS PER OBSTACLES PERILLOSOS A LA VORERA. (SOT O ENFONSAMENT EN VORERA, FERRO SORTINT, ETC.) EN VIES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            394 => 
            array (
                'id' => 395,
                'codi' => 'TOVI',
                'descripcio' => 'OBSTACLES EN VORERA PELS VIANANTS INTERURBÀ',
            'definicio' => 'AFECTACIONS AL TRÀNSIT DE VIANANTS PER OBSTACLES PERILLOSOS A LA VORERA. (SOT O ENFONSAMENT EN VORERA, FERRO SORTINT, ETC.) VORERES DE VIES INTERURBANES',
                'instrucions' => 'NO VEU:PS / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            395 => 
            array (
                'id' => 396,
                'codi' => 'TOVB',
                'descripcio' => 'OBSTACLES EN VORERA PELS VIANANTS A BARCELONA',
            'definicio' => 'AFECTACIONS AL TRÀNSIT DE VIANANTS PER OBSTACLES PERILLOSOS A LA VORERA. (SOT O ENFONSAMENT EN VORERA, FERRO SORTINT, ETC.) CIUTAT DE BARCELONA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 4,
            ),
            396 => 
            array (
                'id' => 397,
                'codi' => 'TOVAPU',
            'descripcio' => 'VEHICLE AVARIAT (DE 1 A 3 VEHICLES) URBÀ',
            'definicio' => 'VEHICLE AVARIAT (DE 1 A 3 VEHICLES) QUE DIFICULTA LA CIRCULACIÓ EN ZONA URBANA (EXCEPTE BARCELONA CIUTAT)',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            397 => 
            array (
                'id' => 398,
                'codi' => 'TOVAPI',
            'descripcio' => 'VEHICLE AVARIAT (DE 1 A 3 VEHICLES) INTERURBÀ',
            'definicio' => 'VEHICLE AVARIAT (DE 1 A 3 VEHICLES) QUE DIFICULTA LA CIRCULACIÓ EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            398 => 
            array (
                'id' => 399,
                'codi' => 'TOVAPB',
            'descripcio' => 'VEHICLE AVARIAT (DE 1 A 3 VEHICLES) BARCELONA',
            'definicio' => 'VEHICLE AVARIAT (DE 1 A 3 VEHICLES) QUE DIFICULTA LA CIRCULACIÓ A LA CIUTAT DE BARCELONA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 9,
            ),
            399 => 
            array (
                'id' => 400,
                'codi' => 'TOVAMU',
            'descripcio' => 'VEHICLES AVARIATS (MÉS DE 3 VEHICLES) URBÀ',
                'definicio' => 'MÉS DE 3 VEHICLES AVARIATS QUE DIFICULTEN LA CIRCULACIÓ EN ZONES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            400 => 
            array (
                'id' => 401,
                'codi' => 'TOVAMI',
            'descripcio' => 'VEHICLES AVARIATS (MÉS DE 3 VEHICLES) INTERURBÀ',
                'definicio' => 'MÉS DE 3 VEHICLES AVARIATS QUE DIFICULTEN LA CIRCULACIÓ EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            401 => 
            array (
                'id' => 402,
                'codi' => 'TOVPA',
                'descripcio' => 'VEHICLE POLICIAL AVARIAT',
                'definicio' => 'VEHICLE POLICIAL AVARIAT QUE NECESSITA D\'UNA GRUA O NO PER FER EL TRASLLAT AL TALLER O DEPENDÈNCIA.',
                'instrucions' => 'NO VEU: PS / AVIS: PL / CT: PS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            402 => 
            array (
                'id' => 403,
                'codi' => 'TOTRU',
                'descripcio' => 'GEL O NEU A LA VIA URBANA',
                'definicio' => 'GEL O NEU A LA VIA QUE POT REPRESENTAR RISC PER AL TRÀNSIT DE VEHICLES I/O VIANANTS. VIES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            403 => 
            array (
                'id' => 404,
                'codi' => 'TOTRI',
                'descripcio' => 'GEL O NEU A LA VIA INTERURBANA',
                'definicio' => 'GEL O NEU A LA VIA QUE POT REPRESENTAR RISC PER AL TRÀNSIT DE VEHICLES I/O VIANANTS. VIA INTERURBANA',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            404 => 
            array (
                'id' => 405,
                'codi' => 'TOTHU',
                'descripcio' => 'TACA HIDROCARBURS URBÀ',
            'definicio' => 'CALÇADA A SOBRE DE LA QUAL HA CAIGUT OLI O ALGUN HIDROCARBUR (COMBUSTIBLE), EN VIES URBANES',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            405 => 
            array (
                'id' => 406,
                'codi' => 'TOTHI',
                'descripcio' => 'TACA HIDROCARBURS INTERURBÀ',
            'definicio' => 'CALÇADA A SOBRE DE LA QUAL HA CAIGUT OLI O ALGUN HIDROCARBUR (COMBUSTIBLE), EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 7,
            ),
            406 => 
            array (
                'id' => 407,
                'codi' => 'TODU',
                'descripcio' => 'DESPRENIMENT A LA VIA O ENSORRAMENT DE LA CALÇADA URBÀ',
            'definicio' => 'AFECTACIÓ AL TRÀNSIT PER DESPRENIMENT O RISC DE DESPRENIMENT DE LA CALÇADAO ELS MURS ANNEXES. (PEDRES I ROQUES, ESLLEVISSADA, ASFALT ENSORRAT, NEU, ETC.) EN VIES URBANES',
                'instrucions' => 'VEU: PL / CT: BB CT SS SI HI HA FERITS
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            407 => 
            array (
                'id' => 408,
                'codi' => 'TODI',
                'descripcio' => 'DESPRENIMENT A LA VIA O ENSORRAMENT DE LA CALÇADA INTERURBÀ',
            'definicio' => 'AFECTACIÓ AL TRÀNSIT PER DESPRENIMENT O RISC DE DESPRENIMENT DE LA CALÇADAO ELS MURS ANNEXES. (PEDRES I ROQUES, ESLLEVISSADA, ASFALT ENSORRAT, NEU, ETC.) EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT BB CT SS SI HI HA FERITS
ÀMBIT AEROPORT
ÀMBIT VALLVIDRERA NO VEU: PT / AVÍS: BB-Bcn PL / CT: BB SS PT',
                'classes_incidents_id' => 8,
            ),
            408 => 
            array (
                'id' => 409,
                'codi' => 'TOVIIU',
                'descripcio' => 'VIANANT EN VIA RÀPIDA URBÀ',
            'definicio' => 'VIANANT QUE VA A PEU PER CALÇADA DE VIA RÀPIDA REPRESENTANT RISC PER A LA SEVA VIDA I LA DELS ALTRES USUARIS DE LA VIA (RONDES DE BARCELONA, TRAVESSERES, CINTURONS, ETC.)',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 5,
            ),
            409 => 
            array (
                'id' => 410,
                'codi' => 'TOVIII',
                'descripcio' => 'VIANANT EN VIA RÀPIDA INTERURBÀ',
                'definicio' => 'VIANANT QUE VA A PEU PER CALÇADA DE VIA RÀPIDA REPRESENTANT RISC PER A LA SEVA VIDA I LA DELS ALTRES USUARIS DE LA VIA.',
                'instrucions' => 'NO VEU: PT / CT: PT',
                'classes_incidents_id' => 8,
            ),
            410 => 
            array (
                'id' => 411,
                'codi' => 'TOPU',
                'descripcio' => 'PANCARTA PERILLOSA PEL TRÀNSIT URBÀ',
            'definicio' => 'AFECTACIONS AL TRÀNSIT PER PANCARTA QUE LA SEVA COL·LOCACIÓ POT REPRESENTAR PERILL PER ESTAR POSADA INFRINGINT NORMATIVA (COL·LOCADA SOBRE CALÇADA A MENYS DE 5  METRES D\'ALÇADA. ETC.)',
                'instrucions' => 'VEU: PL AVÍS: BB SI HI HA RISC DE CAIGUDA
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            411 => 
            array (
                'id' => 412,
                'codi' => 'TOPI',
                'descripcio' => 'PANCARTA PERILLOSA PEL TRANSIT INTERURBÀ',
            'definicio' => 'AFECTACIONS AL TRÀNSIT PER PANCARTA QUE LA SEVA COL·LOCACIÓ POT REPRESENTAR PERILL PER ESTAR POSADA INFRINGINT NORMATIVA (COL·LOCADA SOBRE CALÇADA A MENYS DE 5 METRES D\'ALÇADA. ETC.)',
                'instrucions' => 'NO VEU: PT / CT: PT AVÍS: BB SI HI HA RISC DE CAIGUDA
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            412 => 
            array (
                'id' => 413,
                'codi' => 'TSSCU',
                'descripcio' => 'INCIDENCIA EN SEMAFORS AFECTANT A CRUILLA URBANA',
            'definicio' => 'AVARIA DE SEMÀFORS QUE AFECTA A TOTA LA CRUÏLLA (APAGATS, INTERMITENTS, DESFASATS, ESTÀTICS, CAIXES DE CONTROL TRENCADES O AVARIADES ETC.) EN VIES URBANES',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 3,
            ),
            413 => 
            array (
                'id' => 414,
                'codi' => 'TSSCI',
                'descripcio' => 'INCIDENCIA EN SEMAFORS AFECTANT A CRUILLA INTERURBANA',
            'definicio' => 'AVARIA DE SEMÀFORS QUE AFECTA A TOTA LA CRUÏLLA (APAGATS, INTERMITENTS, DESFASATS, ESTÀTICS, CAIXES DE CONTROL TRENCADES O AVARIADES ETC.) EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT',
                'classes_incidents_id' => 7,
            ),
            414 => 
            array (
                'id' => 415,
                'codi' => 'TSSNCU',
                'descripcio' => 'INCIDÈNCIA EN UN SEMÀFOR SENSE AFECTAR A CRUÏLLA URBANA',
                'definicio' => 'INCIDÈNCIA EN UN SEMÀFOR SENSE AFECTAR A CRUÏLLA URBANA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 5,
            ),
            415 => 
            array (
                'id' => 416,
                'codi' => 'TSSNCB',
                'descripcio' => 'INCIDÈNCIA EN UN SEMÀFOR SENSE AFECTAR A CRUÏLLA A BARCELONA',
                'definicio' => 'INCIDÈNCIA EN UN SEMÀFOR SENSE AFECTAR A CRUÏLLA A BARCELONA CIUTAT',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 2,
            ),
            416 => 
            array (
                'id' => 417,
                'codi' => 'TSSNCI',
                'descripcio' => 'INCIDÈNCIA EN UN SEMÀFOR SENSE AFECTAR A CRUÏLLA INTERURBANA',
                'definicio' => 'INCIDÈNCIA EN UN SEMÀFOR SENSE AFECTAR A CRUÏLLA INTERURBANA',
                'instrucions' => 'NO VEU: PT / CT: PT',
                'classes_incidents_id' => 10,
            ),
            417 => 
            array (
                'id' => 418,
                'codi' => 'TSAU',
                'descripcio' => 'INCIDÈNCIA/AVARIA EN SENYALS AUTOMATITZADES URBÀ',
            'definicio' => 'INCIDÈNCIES / AVARIES EN: CARRILS I SENYALS REVERSIBLES, PILONS, ETC. (NO SEMÀFORS) EN ZONA URBANA EXCEPTE BARCELONA CIUTAT',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            418 => 
            array (
                'id' => 419,
                'codi' => 'TSAI',
                'descripcio' => 'INCIDÈNCIA/AVARIA EN SENYALS AUTOMATITZADES INTERURBÀ',
            'definicio' => 'INCIDÈNCIES / AVARIES EN: CARRILS I SENYALS REVERSIBLES, PILONS, ETC. (NO SEMÀFORS) EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 3,
            ),
            419 => 
            array (
                'id' => 420,
                'codi' => 'TSAB',
                'descripcio' => 'INCIDÈNCIA/AVARIA EN SENYALS AUTOMATITZADES A BARCELONA',
            'definicio' => 'INCIDÈNCIES / AVARIES EN: CARRILS I SENYALS REVERSIBLES, PILONS, ETC. (NO SEMÀFORS) A LA CIUTAT DE BARCELONA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 10,
            ),
            420 => 
            array (
                'id' => 421,
                'codi' => 'TSVU',
                'descripcio' => 'INCIDÈNCIA EN SENYALITZACIÓ VERTICAL URBANA',
                'definicio' => 'INCIDÈNCIES EN SENYALS: CEDIU EL PAS, STOP, DIRECCIÓ PROHIBIDA, DIRECCIÓ OBLIGATÒRIA, I QUALSEVOL SENYAL DE PERILL PER AL TRÀNSIT EN VIES URBANES EXCEPTE BARCELONA CIUTAT',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            421 => 
            array (
                'id' => 422,
                'codi' => 'TSVI',
                'descripcio' => 'INCIDÈNCIA EN SENYALITZACIÓ VERTICAL INTERURBANA',
                'definicio' => 'INCIDÈNCIES EN SENYALS: CEDIU EL PAS, STOP, DIRECCI´PROHIBIDA, DIRECCIÓ OBLIGATÒRIA, I QUALSEVOL SENYAL DE PERILL PER AL TRÀNSIT EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 10,
            ),
            422 => 
            array (
                'id' => 423,
                'codi' => 'TSVB',
                'descripcio' => 'INCIDÈNCIA EN SENYALITZACIÓ VERTICAL A BARCELONA',
                'definicio' => 'INCIDÈNCIES EN SENYALS: CEDIU EL PAS, STOP, DIRECCI´PROHIBIDA, DIRECCIÓ OBLIGATÒRIA, I QUALSEVOL SENYAL DE PERILL PER AL TRÀNSIT A BARCELONA CIUTAT',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 1,
            ),
            423 => 
            array (
                'id' => 424,
                'codi' => 'TSHU',
                'descripcio' => 'INCIDÈNCIA EN SENYALITZACIÓ HORITZONTAL URBÀ',
                'definicio' => 'INCIDÈNCIES EN SENYALS HORITZONTALS: SENYALS PINTADES AL TERRA, MARQUES EN EL PAVIMENT, ETC. EN VIA URBANA EXCEPTE BARCELONA CIUTAT',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 2,
            ),
            424 => 
            array (
                'id' => 425,
                'codi' => 'TSHI',
                'descripcio' => 'INCIDÈNCIA EN SENYALITZACIÓ HORITZONTAL INTERURBÀ',
                'definicio' => 'INCIDÈNCIES EN SENYALS: SENYALS PINTADES AL TERRA, MARQUES EN EL PAVIMENT, ETC. EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            425 => 
            array (
                'id' => 426,
                'codi' => 'TSHB',
                'descripcio' => 'INCIDÈNCIA EN SENYALITZACIÓ HORITZONTAL A BARCELONA',
                'definicio' => 'INCIDÈNCIES EN SENYALS: SENYALS PINTADES AL TERRA, MARQUES EN EL PAVIMENT, ETC. A LA CIUTAT DE BARCELONA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 8,
            ),
            426 => 
            array (
                'id' => 427,
                'codi' => 'TSMPU',
                'descripcio' => 'INCIDÈNCIA EN MIRALL PARABÒLIC URBÀ',
            'definicio' => 'INCIDÈNCIES EN MIRALLS PARABÒLICS (TRENCAT, GIRAT,...) EN ZONA URBANA EXCEPTE BARCELONA CIUTAT',
                'instrucions' => 'VEU: PL / CT: BB
ÀMBIT AEROPORT',
                'classes_incidents_id' => 4,
            ),
            427 => 
            array (
                'id' => 428,
                'codi' => 'TSMPI',
                'descripcio' => 'INCIDÈNCIA EN MIRALL PARABÒLIC INTERURBÀ',
            'definicio' => 'INCIDÈNCIES EN MIRALLS PARABÒLICS (TRENCAT, GIRAT,...) EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT BB
ÀMBIT AEROPORT',
                'classes_incidents_id' => 9,
            ),
            428 => 
            array (
                'id' => 429,
                'codi' => 'TSMPB',
                'descripcio' => 'INCIDÈNCIA EN MIRALL PARABÒLIC A BARCELONA',
            'definicio' => 'INCIDÈNCIES EN MIRALLS PARABÒLICS (TRENCAT, GIRAT,...) A LA CIUTAT DE BARCELONA',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 2,
            ),
            429 => 
            array (
                'id' => 430,
                'codi' => 'TSSDU',
                'descripcio' => 'SENYALITZACIÓ DEFICIENT URBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER SENYALITZACIÓ DEFICIENT PER: OBRES EN VIA PÚBLICA, DESVIAMENTS PROVISIONALS, I D\'ALTRES TRAMS DE VIA ON PUGUI ESTAR INCORRECTAMENT COL·LOCADA. VIES URBANES EXCEPTE BARCELONA CIUTAT',
                'instrucions' => 'VEU: PL
ÀMBIT AEROPORT',
                'classes_incidents_id' => 1,
            ),
            430 => 
            array (
                'id' => 431,
                'codi' => 'TSSDB',
                'descripcio' => 'SENYALITZACIÓ DEFICIENT A BARCELONA',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER SENYALITZACIÓ DEFICIENT PER: OBRES EN VIA PÚBLICA, DESVIAMENTS PROVISIONALS, I D\'ALTRES TRAMS DE VIA ON PUGUI ESTAR INCORRECTAMENT COL·LOCADA A BARCELONA CIUTAT',
                'instrucions' => 'VEU: PL',
                'classes_incidents_id' => 5,
            ),
            431 => 
            array (
                'id' => 432,
                'codi' => 'TSSDI',
                'descripcio' => 'SENYALITZACIÓ DEFICIENT INTERURBÀ',
                'definicio' => 'AFECTACIONS AL TRÀNSIT PER SENYALITZACIÓ DEFICIENT PER: OBRES EN VIA PÚBLICA, DESVIAMENTS PROVISIONALS, I D\'ALTRES TRAMS DE VIA ON PUGUI ESTAR INCORRECTAMENT COL·LOCADA EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT
ÀMBIT AEROPORT',
                'classes_incidents_id' => 8,
            ),
            432 => 
            array (
                'id' => 433,
                'codi' => 'TSU',
                'descripcio' => 'REQUERIMENTS D\'ALTRES COSSOS PER COL·LABORACIÓ EN TRÀNSIT INTERURBÀ',
                'definicio' => 'PETICIÓ D\'UN COS OPERATIU PER COL·LABORACIÓ DE LA POLICIA DE TRÀNSIT EN TASQUES DE TRÀNSIT EN VIES INTERURBANES',
                'instrucions' => 'NO VEU: PT / CT: PT',
                'classes_incidents_id' => 2,
            ),
            433 => 
            array (
                'id' => 434,
                'codi' => 'GPF',
                'descripcio' => 'AIGUA/TEMPORAL PLUGES: FILTRACIÓ',
            'definicio' => 'AIGUA/TEMPORAL PLUGES: FILTRACIÓ (NO GOTERES)',
                'instrucions' => 'VEU: BB / CT: BB',
                'classes_incidents_id' => 7,
            ),
            434 => 
            array (
                'id' => 435,
                'codi' => 'GPI',
                'descripcio' => 'AIGUA/TEMPORAL PLUGES: INUNDACIÓ',
                'definicio' => 'TEMPORAL D\'AIGUA: INUNDACIÓ',
                'instrucions' => 'VEU: BB / CT: BB PS AR CT SS SI HI HA FERITS',
                'classes_incidents_id' => 3,
            ),
            435 => 
            array (
                'id' => 436,
                'codi' => 'GPR',
                'descripcio' => 'AIGUA/TEMPORAL PLUGES: RIUADES',
            'definicio' => 'TEMPORAL D\'AIGUA: RIUADES (QUE ES PODEN EMPORTAR VEHICLES O BÉNS)',
                'instrucions' => 'VEU: BB / CT: BB PS CT SS SI HI HA FERITS',
                'classes_incidents_id' => 10,
            ),
            436 => 
            array (
                'id' => 437,
                'codi' => 'GVAN',
                'descripcio' => 'TEMPORAL DE VENT: ANTENES',
                'definicio' => 'TEMPORAL DE VENT: ANTENA AL TERRAT, BALCONADA, FINESTRA, ETC. AMB PERILL DE CAIGUDA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT:BB PS
ÀMBIT BCN VEU: BB / CT: PS',
                'classes_incidents_id' => 1,
            ),
            437 => 
            array (
                'id' => 438,
                'codi' => 'GVA',
                'descripcio' => 'TEMPORAL DE VENT: ARBRES',
                'definicio' => 'TEMPORAL DE VENT: ARBRE A PUNT DE CAURE O AMB RISCOS ADDICIONALS.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT:BB PS
ÀMBIT BCN VEU: BB / CT: PS',
                'classes_incidents_id' => 5,
            ),
            438 => 
            array (
                'id' => 439,
                'codi' => 'GVB',
                'descripcio' => 'TEMPORAL DE VENT: BASTIDES',
                'definicio' => 'TEMPORAL DE VENT: BASTIDA AMB PERILL DE CAIGUDA',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT:BB PS
ÀMBIT BCN VEU: BB / CT: PS',
                'classes_incidents_id' => 4,
            ),
            439 => 
            array (
                'id' => 440,
                'codi' => 'GVC',
            'descripcio' => 'TEMPORAL DE VENT: COBERTES (URALITES)',
                'definicio' => 'TEMPORAL DE VENT: COBERTA AL TERRAT, BALCONADA, FINESTRA, ETC. AMB PERILL DE CAIGUDA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT:BB PS
ÀMBIT BCN VEU: BB / CT: PS',
                'classes_incidents_id' => 10,
            ),
            440 => 
            array (
                'id' => 441,
                'codi' => 'GVMU',
                'descripcio' => 'TEMPORAL DE VENT: MOBILIARI URBÀ',
                'definicio' => 'TEMPORAL DE VENT: MOBILIARI URBÀ AMB RISC DE CAIGUDA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT:BB PS
ÀMBIT BCN VEU: BB / CT: PS',
                'classes_incidents_id' => 1,
            ),
            441 => 
            array (
                'id' => 442,
                'codi' => 'GVRP',
                'descripcio' => 'TEMPORAL DE VENT: RÈTOLS PUBLICITARIS',
                'definicio' => 'TEMPORAL DE VENT: RÈTOL PUBLICITARI AMB RISC DE CAIGUDA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT:BB PS
ÀMBIT BCN VEU: BB / CT: PS',
                'classes_incidents_id' => 10,
            ),
            442 => 
            array (
                'id' => 443,
                'codi' => 'GVT',
                'descripcio' => 'TEMPORAL DE VENT: TENDALS',
                'definicio' => 'TEMPORAL DE VENT: TENDAL AL TERRAT, BALCONADA, FINESTRA, ETC. AMB PERILL DE CAIGUDA.',
                'instrucions' => 'VEU: BB / AVÍS: PL / CT:BB PS
ÀMBIT BCN VEU: BB / CT: PS',
                'classes_incidents_id' => 7,
            ),
            443 => 
            array (
                'id' => 444,
                'codi' => 'GN',
                'descripcio' => 'INCIDÈNCIES PER NEU I GEL',
                'definicio' => 'AFECTACIONS PER NEVADES',
                'instrucions' => 'VEU: PL / CT: PS AR',
                'classes_incidents_id' => 10,
            ),
            444 => 
            array (
                'id' => 445,
                'codi' => 'RART',
                'descripcio' => 'ABOCAMENT / ABANDONAMENT DE RESIDUS TÒXICS',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR RESIDUS TÒXICS SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'NO VEU: PS / AVÍS: PL / CT: PS 
ÀMBIT BCN: NO VEU: PS / CT: PS',
                'classes_incidents_id' => 2,
            ),
            445 => 
            array (
                'id' => 446,
                'codi' => 'RARTN',
                'descripcio' => 'ABOCAMENT / ABANDONAMENT DE RESIDUS TÒXICS EN MN',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR RESIDUS TÒXICS EN MEDI NATURAL SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 5,
            ),
            446 => 
            array (
                'id' => 447,
                'codi' => 'RATR',
                'descripcio' => 'ABOCAMENTS / ABANDONAMENT DE RESIDUS',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR RESIDUS SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'NO VEU: PS / AVÍS: PL / CT: PS
ÀMBIT BCN: NO VEU: PS / CT: PS',
                'classes_incidents_id' => 2,
            ),
            447 => 
            array (
                'id' => 448,
                'codi' => 'RATRN',
                'descripcio' => 'ABOCAMENTS / ABANDONAMENT DE RESIDUS EN MEDI NATURAL',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR RESIDUS EN MEDI NATURAL SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 7,
            ),
            448 => 
            array (
                'id' => 449,
                'codi' => 'RARU',
                'descripcio' => 'ABOCAMENT / ABANDONAMENT DE RUNES',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR RUNES SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 9,
            ),
            449 => 
            array (
                'id' => 450,
                'codi' => 'RARUN',
                'descripcio' => 'ABOCAMENT / ABANDONAMENT DE RUNES EN MEDI NATURAL',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR RUNES EN MEDI NATURAL SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 7,
            ),
            450 => 
            array (
                'id' => 451,
                'codi' => 'RAMC',
                'descripcio' => 'ABOCAMENT / ABANDONAMENT MATERIALS COMBUSTIBLES',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR MATERIALS COMBUSTIBLES SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'NO VEU: PS / AVÍS: PL / CT: PS',
                'classes_incidents_id' => 4,
            ),
            451 => 
            array (
                'id' => 452,
                'codi' => 'RAMCN',
                'descripcio' => 'ABOCAMENT/ABANDONAMENT MATERIALS COMBUSTIBLES EN MN',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR MATERIALS COMBUSTIBLES EN MEDI NATURAL SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 2,
            ),
            452 => 
            array (
                'id' => 453,
                'codi' => 'RAP',
                'descripcio' => 'ABOCAMENT / ABANDONAMENTDE PURINS',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR PURINS SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'NO VEU: PS / AVÍS: PL / CT: PS',
                'classes_incidents_id' => 7,
            ),
            453 => 
            array (
                'id' => 454,
                'codi' => 'RAPN',
                'descripcio' => 'ABOCAMENT / ABANDONAMENT DE PURINS EN MEDI NATURAL',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR PURINS EN MEDI NATURAL SENSE AUTORITZACIÓ O EN LLOC EXPLÍCITAMENT PROHIBIT.',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 5,
            ),
            454 => 
            array (
                'id' => 455,
                'codi' => 'RAXX',
                'descripcio' => 'ALTRES ABOCAMENTS / ABANDONAMENTS NO PERMESOS',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR ALTRES ELEMENTS NO CONTEMPLATS EN LA RESTA DE TIPIFICACIONS.',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 6,
            ),
            455 => 
            array (
                'id' => 456,
                'codi' => 'RAXXN',
                'descripcio' => 'ALTRES ABOCAMENTS / ABANDONAMENTS NO PERMESOS EN MN',
                'definicio' => 'DIPOSITAR, TIRAR O ABANDONAR ALTRES ELEMENTS EN MEDI NATURAL NO CONTEMPLATS EN LA RESTA DE TIPIFICACIONS',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 4,
            ),
            456 => 
            array (
                'id' => 457,
                'codi' => 'RCW',
                'descripcio' => 'INCIDÈNCIA PER CONTAMINACIÓ D\'AIGÜES',
                'definicio' => 'INCIDÈNCIA PER CONTAMINACIÓ D\'AIGÜES',
                'instrucions' => 'VEU: AR / CT: AR SI LA CONTAMINACIÓ ÉS EN EL MAR, AVISAR TAMBÉ A SALVAMENT MARÍTIM',
                'classes_incidents_id' => 6,
            ),
            457 => 
            array (
                'id' => 458,
                'codi' => 'RCL',
                'descripcio' => 'INCIDÈNCIA PER CONTAMINACIÓ LLUMINOSA',
                'definicio' => 'INCIDÈNCIA PER CONTAMINACIÓ LLUMINOSA',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 8,
            ),
            458 => 
            array (
                'id' => 459,
                'codi' => 'RCA',
                'descripcio' => 'INCIDÈNCIA PER CONTAMINACIÓ ACÚSTICA',
                'definicio' => 'INCIDÈNCIA PER CONTAMINACIÓ ACÚSTICA',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 1,
            ),
            459 => 
            array (
                'id' => 460,
                'codi' => 'RCO',
                'descripcio' => 'INCIDÈNCIA PER CONTAMINACIÓ ODORIFERA',
                'definicio' => 'INCIDÈNCIA PER CONTAMINACIÓ ODORIFERA.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 1,
            ),
            460 => 
            array (
                'id' => 461,
                'codi' => 'RCPSP',
                'descripcio' => 'CAÇAR O PESCAR SENSE PERMÍS',
                'definicio' => 'CAÇAR O PESCAR SENSE PERMÍS EN ZONA URBANA',
                'instrucions' => 'VEU: PL / CT: PS',
                'classes_incidents_id' => 3,
            ),
            461 => 
            array (
                'id' => 462,
                'codi' => 'RCPSPN',
                'descripcio' => 'CAÇAR O PESCAR SENSE PERMÍS EN MEDI NATURAL',
                'definicio' => 'CAÇAR O PESCAR SENSE PERMÍS EN MEDI NATURAL',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 9,
            ),
            462 => 
            array (
                'id' => 463,
                'codi' => 'RCPEP',
                'descripcio' => 'CAÇAR O PESCAR ESPÈCIES PROTEGIDES',
                'definicio' => 'CAÇAR O PESCAR ESPÈCIES PROTEGIDES EN ZONA URBANA',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 3,
            ),
            463 => 
            array (
                'id' => 464,
                'codi' => 'RCPEPN',
                'descripcio' => 'CAÇAR O PESCAR ESPECIES PROTEGIES EN MEDI NATURAL.',
                'definicio' => 'CAÇAR O PESCAR ESÈCIES PROTEGIDES EN MEDI NATURAL',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 6,
            ),
            464 => 
            array (
                'id' => 465,
                'codi' => 'RCPXX',
                'descripcio' => 'ALTRES TIPUS DE CAÇA O PESCA',
                'definicio' => 'ALTRES TIPUS DE CAÇA O PESCA EN ZONA URBANA',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 3,
            ),
            465 => 
            array (
                'id' => 466,
                'codi' => 'RCPXXN',
                'descripcio' => 'ALTRES TIPUS DE CAÇA O PESCA EN MEDI NATURAL',
                'definicio' => 'ALTRES TIPUS DE CAÇA O PESCA EN MEDI NATURAL',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 3,
            ),
            466 => 
            array (
                'id' => 467,
                'codi' => 'RCPRA',
                'descripcio' => 'DANYS O MOLÈSTIES CAUSADES PER ARMES',
                'definicio' => 'ÚS PERILLÓS D\'ARMES PER A LA CAÇA AMB PERILL REAL PER LES PERSONES I/O DANYS EN EL PATRIMONI EN NUCLI URBÀ O URBANITZAT. ELS CASOS SENSE PERILL REAL O RELATIUS A PERSMISOS  DE CAÇA ES CODIFICARAN COM A RCPRAN O RCPSPN RESPECTIVAMENT.',
                'instrucions' => 'NO VEU: PS / CT: PS',
                'classes_incidents_id' => 4,
            ),
            467 => 
            array (
                'id' => 468,
                'codi' => 'RCPRAN',
                'descripcio' => 'RISC PER ARMES EN MEDI NATURAL',
                'definicio' => 'ÚS PERILLÓS D\'ARMES PER A LA CAÇA EN MEDI NATURAL',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 2,
            ),
            468 => 
            array (
                'id' => 469,
                'codi' => 'RFSD',
                'descripcio' => 'DANYS O MOLÈSTIES CAUSADES PER FAUNA SALVATGE',
                'definicio' => 'SOL·LICITUD D\'INTERVENCIÓ DELS DANYS O MOLÈSTIES CAUSADES PER LA FAUNA EN ZONES URBANES',
                'instrucions' => 'NO VEU: PS / AVÍS: AR / CT: PS AR',
                'classes_incidents_id' => 1,
            ),
            469 => 
            array (
                'id' => 470,
                'codi' => 'RFSDN',
                'descripcio' => 'DANYS O MOLÈSTIES CAUSADES PER LA FAUNA SALVATGE EN MN',
                'definicio' => 'SOL·LICITUD D\'INTERVENCIÓ DELS DANYS O MOLÈSTIES EN MEDI NATURAL CAUSADES PER LA FAUNA.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 2,
            ),
            470 => 
            array (
                'id' => 471,
                'codi' => 'RFSR',
                'descripcio' => 'RESCAT DE FAUNA SALVATGE FERIDA O EN MAL ESTAT',
            'definicio' => 'RECOLLIDA, RESCAT, TRASLLAT O QUALSEVOL ALTRA GESTIÓ RELACIONADA AMB LA FAUNA SALVATGE FERIDA O EN MAL ESTAT (EN ZONES URBANES)',
                'instrucions' => 'NO VEU: PS / AVÍS: AR / CT: PS AR',
                'classes_incidents_id' => 10,
            ),
            471 => 
            array (
                'id' => 472,
                'codi' => 'RFSRN',
                'descripcio' => 'RESCAT DE FAUNA SALVATGE FERIDA O EN MAL ESTAT EN MN.',
                'definicio' => 'RECOLLIDA, RESCAT, TRASLLAT O QUALSEVOL ALTRA GESTIÓ RELACIONADA AMB LA FAUNA SALVATGE FERIDA O EN MAL ESTAT EN MEDI NATURAL.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 10,
            ),
            472 => 
            array (
                'id' => 473,
                'codi' => 'RFSTV',
                'descripcio' => 'CAPTURA, TINENÇA, COMERÇ O EXHIBICIÓ FAUNA I FLORA PROTEGIDA',
                'definicio' => 'SOL·LICITUD D\'INTERVENCIÓ EN TEMES RELACIONATS AMB QUALSEVOL TIPUS DE CAPTURA, TINENÇA, COMERÇ, O EXHIBICIÓ DE FAUNA O FLORA PROTEGIDA',
                'instrucions' => 'VEU: AR / CT: AR PS',
                'classes_incidents_id' => 8,
            ),
            473 => 
            array (
                'id' => 474,
                'codi' => 'RFTA',
                'descripcio' => 'TALA ARBRES',
            'definicio' => 'TALA D\'ARBRES EN TERRENY FORESTAL (ZONES NO URBANES)',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 6,
            ),
            474 => 
            array (
                'id' => 475,
                'codi' => 'RFRE',
                'descripcio' => 'RECOL·LECCIÓ DE PRODUCTES FORESTALS',
                'definicio' => 'RECOL·LECCIÓ DE PRODUCTES FORESTALS: PINYES, TOFONES, MOLSA, PLANTES O LES SEVES PARTS.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 5,
            ),
            475 => 
            array (
                'id' => 476,
                'codi' => 'RFOC',
                'descripcio' => 'OBERTURA DE CAMINS EN ZONES FORESTALS',
                'definicio' => 'OBERTURA DE CAMINS EN ZONES FORESTALS',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 4,
            ),
            476 => 
            array (
                'id' => 477,
                'codi' => 'RFMT',
                'descripcio' => 'MOVIMENT DE TERRES O ACTIVITATS EXTRACTIVES',
                'definicio' => 'ROMPUDES, ABOCAMENTS DE TERRES, ETC., I TOTA CLASSE D\'EXTRACCIÓ DE TERRES, GRAVES, ÀRIDS,..',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 1,
            ),
            477 => 
            array (
                'id' => 478,
                'codi' => 'REPA',
                'descripcio' => 'ACAMPADA EN ESPAI PROTEGIT',
                'definicio' => 'INCIDÈNCIA PER ACTIVITATS EN ESPAIS PROTEGITS RELACIONADES AMB L\'ACAMPADA.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 1,
            ),
            478 => 
            array (
                'id' => 479,
                'codi' => 'REPE',
                'descripcio' => 'ESPORT EN ESPAI PROTEGIT',
                'definicio' => 'INCIDÈNCIA PER ACTIVITATS EN ESPAIS PROTEGITS RELACIONADES AMB L\'ESPORT',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 10,
            ),
            479 => 
            array (
                'id' => 480,
                'codi' => 'REPF',
                'descripcio' => 'FOTOGRAFIA O FILMACIÓ EN ESPAIS PROTEGITS',
                'definicio' => 'INCIDÈNCIA PER ACTIVITATS EN ESPAIS PROTEGITS RELACIONADES AMB LA FOTOGRAFIA O LA FILMACIÓ.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 6,
            ),
            480 => 
            array (
                'id' => 481,
                'codi' => 'REPEX',
                'descripcio' => 'ACTIVITATS EXTRACTIVES EN ESPAIS PROTEGITS',
                'definicio' => 'INCIDÈNCIA EN ESPAIS PROTEGITS RELACIONADES AMB ACTIVITATS EXTRACTIVES',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 8,
            ),
            481 => 
            array (
                'id' => 482,
                'codi' => 'RCR',
                'descripcio' => 'ESGOTAMENT CABAL DEL RIU',
                'definicio' => 'INTERVENCIÓ EN TEMES D\'ASSECAMENT O DESVIACIÓ DE TRAMS DE RIU.',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 5,
            ),
            482 => 
            array (
                'id' => 483,
                'codi' => 'RU',
                'descripcio' => 'CONSTRUCCIÓ O EDIFICACIÓ EN TERRENY NO URBANITZABLE',
                'definicio' => 'CONSTRUCCIÓ O EDIFICACIÓ EN TERRENY NO URBANITZABLE PER FORMA PART D\'UNA ZONA NATURAL PROTEGIDA',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 5,
            ),
            483 => 
            array (
                'id' => 484,
                'codi' => 'RPDMA',
                'descripcio' => 'DESTRUCCIÓ DEL PATRIMONI DEL DEPARTAMENT DE MEDI NATURAL',
                'definicio' => 'DESTRUCCIÓ DEL PATRIMONI DEL DEPARTAMENT DE MEDI NATURAL',
                'instrucions' => 'VEU: AR / CT: AR',
                'classes_incidents_id' => 7,
            ),
            484 => 
            array (
                'id' => 485,
                'codi' => 'RXX',
                'descripcio' => 'ALTRES ACTUACIONS EN MEDI AMBIENT',
                'definicio' => 'INTERVENCIÓ EN ALTRES INCIDÈNCIES RELACIONADES AMB EL MEDI AMBIENT.',
                'instrucions' => 'VEU: AR / AVÍS: PL / CT: AR PS',
                'classes_incidents_id' => 6,
            ),
            485 => 
            array (
                'id' => 486,
                'codi' => 'NM',
                'descripcio' => 'PROBLEMES AMB TELÈFONS MÒBILS',
                'definicio' => 'TRUCADES ERRÒNIES PROVOCADES PER LA INCORRECTA UTILITZACIÓ DE TELÈFONS MÒBILS',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 5,
            ),
            486 => 
            array (
                'id' => 487,
                'codi' => 'NPROVA',
                'descripcio' => 'NPROVA',
                'definicio' => 'NPROVA',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 5,
            ),
            487 => 
            array (
                'id' => 488,
                'codi' => 'NIA',
                'descripcio' => 'SIMULACRE PROVA SIRENES 20101214',
                'definicio' => 'SIMULACRE PROVA SIRENES 20101214',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 2,
            ),
            488 => 
            array (
                'id' => 489,
                'codi' => 'NBA',
                'descripcio' => 'ADULTS',
                'definicio' => 'BROMES REALITZADES PER ADULTS',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 2,
            ),
            489 => 
            array (
                'id' => 490,
                'codi' => 'NBI',
                'descripcio' => 'INFANTS',
                'definicio' => 'BROMES PROVINENTS D\'INFANTS',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 4,
            ),
            490 => 
            array (
                'id' => 491,
                'codi' => 'NDM',
                'descripcio' => 'MARCACIÓ',
                'definicio' => 'MARCACIÓ DEL 112 PER ERROR O ACCIDENT',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 7,
            ),
            491 => 
            array (
                'id' => 492,
                'codi' => 'NDT',
                'descripcio' => 'TÈCNICA',
                'definicio' => 'TRUCADA QUE NO TRANSMET VEU I NO PERMET IDENTIFICAR AL TRUCANT',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 10,
            ),
            492 => 
            array (
                'id' => 493,
                'codi' => 'NIER',
                'descripcio' => 'TRUCADES INFORMATIVES RELACIONADES AMB EPISODIS RELLEVANTS',
                'definicio' => 'TRUCADES INFORMATIVES RELACIONADES AMB EPISODIS RELLEVANTS',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 6,
            ),
            493 => 
            array (
                'id' => 494,
                'codi' => 'NIC',
                'descripcio' => 'DEMANDA D\'INFORMACIÓ COMISSARIES PGME',
                'definicio' => 'PETICIÓ D\'INFORMACIÓ COMISSARIES PGME',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 10,
            ),
            494 => 
            array (
                'id' => 495,
                'codi' => 'NQP',
                'descripcio' => 'AL 112',
                'definicio' => 'RECLAMACIONS FORMULADES SOBRE EL FUNCIONAMENT DEL CENTRE D\'EMERGÈNCIES 1-1-2',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 1,
            ),
            495 => 
            array (
                'id' => 496,
                'codi' => 'NQS',
                'descripcio' => 'OPERATIUS',
                'definicio' => 'RECLAMACIONS A COSSOS OPERATIUS',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 1,
            ),
            496 => 
            array (
                'id' => 497,
                'codi' => 'NSB',
                'descripcio' => 'COMUNICACIÓ AMB BOMBERS',
                'definicio' => 'COMUNICACIÓ AMB BOMBERS',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 7,
            ),
            497 => 
            array (
                'id' => 498,
                'codi' => 'NSI',
                'descripcio' => 'INFORMACIÓ',
                'definicio' => 'DEMANDA DE DADES COMPLEMENTÀRIES SOBRE ALGUN DELS INCIDENTS TRANSFERITS AMB ANTERIORITAT',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 9,
            ),
            498 => 
            array (
                'id' => 499,
                'codi' => 'NST',
                'descripcio' => 'TRADUCCIÓ',
                'definicio' => 'TRADUCCIÓ',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 3,
            ),
            499 => 
            array (
                'id' => 500,
                'codi' => 'NTN',
                'descripcio' => 'TAXI NO PROCEDENT',
                'definicio' => 'TRUCADA NO PROCEDENT EFECTUADA DES DE L\'EQUIP EMBARCAT AL TAXI',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 9,
            ),
        ));
        \DB::table('incidents')->insert(array (
            0 => 
            array (
                'id' => 501,
                'codi' => 'NTP',
                'descripcio' => 'PROVA DE TAXI',
                'definicio' => 'PROVA EFECTUADA PER COMPROVAR EL SISTEMA SEQTAXI',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 6,
            ),
            1 => 
            array (
                'id' => 502,
                'codi' => 'NPS',
                'descripcio' => 'PROVA MODUL SMS',
                'definicio' => 'PROVA DE VALIDACIÓ DEL SISTEMA ESPECIAL D\'AVISOS PER SMS',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 1,
            ),
            2 => 
            array (
                'id' => 503,
                'codi' => 'NZ',
                'descripcio' => 'FORA CATALUNYA',
                'definicio' => 'TRUCADES PER INCIDENTS OCORREGUTS FORA DE CATALUNYA',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 9,
            ),
            3 => 
            array (
                'id' => 504,
                'codi' => 'TID',
                'descripcio' => 'TRANSFERÈNCIA AL GRUP D\'IDIOMA',
                'definicio' => 'TRANSFERÈNCIA AL GRUP D\'IDIOMA',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 9,
            ),
            4 => 
            array (
                'id' => 505,
                'codi' => 'NI/NE',
                'descripcio' => 'INFORMATIVES/FALSA EMERGÈNCIA',
                'definicio' => 'COM A NI: QUAN EL TRUCANT DEMANA INFORMACIÓ QUE NO TÉ A VEURE AMB CAP SERVEI D\'EMERGÈNCIA. COM A NE: SITUACIONS D\'EMERGÈNCIA RESOLTES EN EL TRANSCURS DE TRUCADA I  QUE NO REQUEREIXIN DONAR AVÍS A CAP COS OPERATIU. TAMBÉ AQUELLES SITUACIONS QUE SUPOSEN NECE',
                'instrucions' => 'NULL',
                'classes_incidents_id' => 9,
            ),
        ));
        
        
    }
}