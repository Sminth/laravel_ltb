<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class seed_clients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chambres')->insert([
            [

            'num_chambre' => 'football',
            'description' => 'foot',
            'photo'=> 'sqs',
            'superficie' => 'sqss',
            'limite' => 'd',
            'prix' => 'dd',
            'etat' => 'true',

             
            ],
            [

                'num_chambre' => 'football',
                'description' => 'foot',
                'photo'=> 'sqs',
                'superficie' => 'sqss',
                'limite' => 'd',
                'prix' => 'dd',
                'etat' => 'true',
                 
            ],            

        ]);
    }
}
