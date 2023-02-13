<?php

use Illuminate\Database\Seeder;

class AdressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('adresses')->delete();
        
        \DB::table('adresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_client' => 1,
                'code_commune' => 'coc',
                'description' => 'St Jean',
                'latitude' => '0',
                'longitude' => '0',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            ));
        
        
    }
}