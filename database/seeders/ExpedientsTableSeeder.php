<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExpedientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('expedients')->delete();
        
        \DB::table('expedients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_creacio' => '2022-03-30 11:03:41',
                'data_ultima_modificacio' => '2022-04-25 12:46:37',
                'estats_expedients_id' => 3,
                'codi' => 'EXP-1',
            ),
            1 => 
            array (
                'id' => 2,
                'data_creacio' => '2022-03-31 11:03:41',
                'data_ultima_modificacio' => '2022-04-25 11:24:55',
                'estats_expedients_id' => 4,
                'codi' => 'EXP-2',
            ),
            2 => 
            array (
                'id' => 4,
                'data_creacio' => '2022-03-09 11:03:41',
                'data_ultima_modificacio' => '2022-04-25 11:24:59',
                'estats_expedients_id' => 4,
                'codi' => 'EXP-3',
            ),
            3 => 
            array (
                'id' => 5,
                'data_creacio' => '2022-03-03 11:03:41',
                'data_ultima_modificacio' => '2022-04-25 11:24:31',
                'estats_expedients_id' => 4,
                'codi' => 'EXP-5',
            ),
            4 => 
            array (
                'id' => 6,
                'data_creacio' => '2022-03-18 07:58:41',
                'data_ultima_modificacio' => '2022-04-25 11:25:03',
                'estats_expedients_id' => 4,
                'codi' => 'EXP-6',
            ),
            5 => 
            array (
                'id' => 35,
                'data_creacio' => '2022-05-01 18:16:58',
                'data_ultima_modificacio' => '2022-05-01 18:16:58',
                'estats_expedients_id' => 1,
                'codi' => 'EXP-010520222016578',
            ),
            6 => 
            array (
                'id' => 36,
                'data_creacio' => '2022-05-01 18:31:20',
                'data_ultima_modificacio' => '2022-05-01 18:31:20',
                'estats_expedients_id' => 1,
                'codi' => 'EXP-010520222031193',
            ),
            7 => 
            array (
                'id' => 37,
                'data_creacio' => '2022-05-01 18:32:00',
                'data_ultima_modificacio' => '2022-05-01 18:32:00',
                'estats_expedients_id' => 1,
                'codi' => 'EXP-010520222032003',
            ),
            8 => 
            array (
                'id' => 39,
                'data_creacio' => '2022-05-01 18:34:16',
                'data_ultima_modificacio' => '2022-05-01 18:34:16',
                'estats_expedients_id' => 1,
                'codi' => 'EXP-010520222034161',
            ),
            9 => 
            array (
                'id' => 41,
                'data_creacio' => '2022-05-01 18:55:22',
                'data_ultima_modificacio' => '2022-05-01 18:55:22',
                'estats_expedients_id' => 1,
                'codi' => 'EXP-010520222055215',
            ),
            10 => 
            array (
                'id' => 42,
                'data_creacio' => '2022-05-01 18:57:33',
                'data_ultima_modificacio' => '2022-05-01 21:55:10',
                'estats_expedients_id' => 2,
                'codi' => 'EXP-010520222057326',
            ),
            11 => 
            array (
                'id' => 43,
                'data_creacio' => '2022-05-01 20:03:01',
                'data_ultima_modificacio' => '2022-05-01 20:03:01',
                'estats_expedients_id' => 1,
                'codi' => 'EXP-010520222203010',
            ),
            12 => 
            array (
                'id' => 44,
                'data_creacio' => '2022-05-01 20:04:36',
                'data_ultima_modificacio' => '2022-05-01 20:04:36',
                'estats_expedients_id' => 1,
                'codi' => 'EXP-010520222204356',
            ),
            13 => 
            array (
                'id' => 45,
                'data_creacio' => '2022-05-01 20:42:46',
                'data_ultima_modificacio' => '2022-05-01 23:11:44',
                'estats_expedients_id' => 1,
                'codi' => 'EXP-010520222242460',
            ),
        ));
        
        
    }
}