<?php

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('communes')->delete();
        
        \DB::table('communes')->insert(array (
            0 => 
            array (
                'code' => 'coc',
                'code_ville' => 'ABJ',
                'nom' => 'COCODY',
                'enabled' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-10-13 03:23:47',
                'updated_at' => '2020-10-13 03:23:47',
            ),
            1 => 
            array (
                'code' => 'KMS',
                'code_ville' => 'ABJ',
                'nom' => 'KOUMASSI',
                'enabled' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-10-13 03:25:11',
                'updated_at' => '2020-10-13 03:25:11',
            ),
            2 => 
            array (
                'code' => 'PLT',
                'code_ville' => 'ABJ',
                'nom' => 'Plateau',
                'enabled' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-10-13 03:24:44',
                'updated_at' => '2020-10-13 03:24:44',
            ),
            3 => 
            array (
                'code' => 'PTB',
                'code_ville' => 'ABJ',
                'nom' => 'PORT-BOUET',
                'enabled' => 1,
                'deleted_at' => NULL,
                'created_at' => '2020-10-13 03:25:48',
                'updated_at' => '2020-10-13 03:25:48',
            ),
        ));
        
        
    }
}