<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_promo_codes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('promo_codes')->insert([
            [

            'nom' => '12',
            'code' => '1500',
            'rabais' => "120",
            'date_debut'=> '2023-12-10 10:15:13',
            'date_fin'=> '2023-12-10 10:15:13',
            
            

             
            ],
            [

            'nom' => '12',
            'code' => '1500',
            'rabais' => "120",
            'date_debut'=> '2023-12-10 10:15:13',
            'date_fin'=> '2023-12-10 10:15:13',
            
            ],            

        ]);
    }
}
