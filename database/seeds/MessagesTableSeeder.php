<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('messages')->insert([
            [

            'contenu' => 'football',
            'fichier' => 'foot',
            
            
             
            ],
            [

                'contenu' => 'football',
                'fichier' => 'foot',
                
                
                 
            ],            

        ]);
    }
}