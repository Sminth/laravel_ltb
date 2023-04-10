<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_documents_legauxes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('documents_legauxes')->insert([
            [

            'nom' => '2023-12-10 10:15:13',
            'contenu' => 'foot',
            'fichier'=> 'sqs',
            

             
            ],
            [

            'nom' => '2023-12-10 10:15:13',
            'contenu' => 'foot',
            'fichier'=> 'sqs',
            
                 
            ],            

        ]);
    }
}
