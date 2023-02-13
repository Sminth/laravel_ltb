<?php

use Illuminate\Database\Seeder;

class VillesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('villes')->delete();
        
        \DB::table('villes')->insert(array (
            0 => 
            array (
                'code' => 'ABJ',
                'nom' => 'abidjan',
                'deleted_at' => NULL,
                'created_at' => '2020-10-12 19:10:59',
                'updated_at' => '2020-10-12 19:10:59',
            ),
        ));
        
        
    }
}