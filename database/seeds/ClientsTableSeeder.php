<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nom' => 'sminth',
                'prenom' => 'Emmanuel',
                'email' => 'virtus225one@gmail.com',
                'password' => '$2y$10$pHvwTVGlUpb3zWSavkBKMuOAWDsjJCCbRyskVOLNNoT8rS8eSXTRi',
                'remember_token' => NULL,
                'telephone' => '88364403',
                'enabled' => '0',
                'deleted_at' => NULL,
                'created_at' => '2020-11-09 21:37:53',
                'updated_at' => '2020-11-10 11:37:03',
                'google_id' => NULL,
                'facebook_id' => NULL,
            ),
        ));
        
        
    }
}