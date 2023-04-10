<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed_contacts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->insert([
            [

            'nom' => 'football',
            'prenom' => 'foot',
            'telephone'=> 'sqs',
            'email' => 'sqss',
            'message' => 'd',

             
            ],
            [

            'nom' => 'football',
            'prenom' => 'foot',
            'telephone'=> 'sqs',
            'email' => 'sqss',
            'message' => 'd',
                 
            ],            

        ]);
    }
}
