<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_activites extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ajout de seed 
        DB::table('activites')->insert([
            [

            'titre' => 'foot',
            'sous-titre' => 'africain',
            'description'=> 'exceptionnel le foot africain',
            'photo' => 'sssssssss' 
            ],
            [

                'titre' => 'foot',
                'sous-titre' => 'africain',
                'description'=> 'exceptionnel le foot africain',
                'photo' => 'sssssssss' 
            ],            

        ]);
    }
}
