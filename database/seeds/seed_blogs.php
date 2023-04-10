<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class seed_blogs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blogs')->insert([
            [

            'titre' => 'football',
            'sous-titre' => 'foot',
            'photo'=> 'sqs',
            'contenu' => 'sqss',
             
            ],
            [

                'titre' => 'football',
                'sous-titre' => 'foot',
                'photo'=> 'sqs',
                'contenu' => 'sqss',
                 
            ],            

        ]);
    }
}
