<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_paiements extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('paiements')->insert([
            [

            'libelle' => 'orange',
            

             
            ],
            [
                'libelle' => 'moov',
                
            ],            

        ]);
    }
}
