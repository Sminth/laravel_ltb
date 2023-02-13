<?php

use Illuminate\Database\Seeder;

class ModelHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('model_has_permissions')->delete();
        
        \DB::table('model_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 2,
                'model_type' => 'App\\User',
                'model_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'model_type' => 'App\\User',
                'model_id' => 4,
            ),
            2 => 
            array (
                'permission_id' => 3,
                'model_type' => 'App\\User',
                'model_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'model_type' => 'App\\User',
                'model_id' => 4,
            ),
            4 => 
            array (
                'permission_id' => 3,
                'model_type' => 'App\\User',
                'model_id' => 5,
            ),
            5 => 
            array (
                'permission_id' => 4,
                'model_type' => 'App\\User',
                'model_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 4,
                'model_type' => 'App\\User',
                'model_id' => 4,
            ),
            7 => 
            array (
                'permission_id' => 5,
                'model_type' => 'App\\User',
                'model_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 5,
                'model_type' => 'App\\User',
                'model_id' => 4,
            ),
            9 => 
            array (
                'permission_id' => 5,
                'model_type' => 'App\\User',
                'model_id' => 5,
            ),
        ));
        
        
    }
}