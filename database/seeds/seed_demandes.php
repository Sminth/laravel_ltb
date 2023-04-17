<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class seed_demandes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('demandes')->insert([
            [

            'heure_depart' => '2023-12-10 10:15:13',
            'contenu' => 'foot',
            'id_preference'=> '1',
            

             
            ],
            [

            'heure_depart' => '2023-12-10 10:15:13',
            'contenu' => 'foot',
            'id_preference'=> '11',
            
                 
            ],            

        ]);
    }
}
