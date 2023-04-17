<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_reservations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reservations')->insert([
            [

            'num_res' => '12',
            'debut'=> '153',
            'fin'=> '153',
            'duree' => '2023-12-11 12:13:11',
            'total' => "152",
            'rabais' => '100',
            'ttc' => '100',
            'id_EtatReserva' => "1",
            
            
            

             
            ],
            [

            'num_res' => '12',
            'debut'=> '153',
            'fin'=> '153',
            'duree' => '2023-12-11 12:13:11',
            'total' => "152",
            'rabais' => '100',
            'ttc' => '100',
            'EtatReserva' => "1",
            
            
            ],            

        ]);
    }
}
