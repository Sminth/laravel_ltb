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
        DB::table('clients')->insert([
            [

            'total_reservation' => '12',
            
             
            ],
            [

                'total_reservation' => '124',
                 
            ],            

        ]);
    }
}
