<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_offres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('offres')->insert([
            [

            'code_produit' => '12',
            'reduction' => '1500',
            'duree'=> '2023-12-10 10:15:13',
            
            

             
            ],
            [

            'code_produit' => '12',
            'reduction' => '1500',
            'duree'=> '2023-12-10 10:15:13',
            
            ],            

        ]);
    }
}
