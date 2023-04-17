<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_etat_chambre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('etat_chambres')->insert([
            [

            'libelle' => 'occupé',
            
            

             
            ],
            [

            'libelle' => 'libre',
            
            
                 
            ],            

        ]);
    }
    
}
