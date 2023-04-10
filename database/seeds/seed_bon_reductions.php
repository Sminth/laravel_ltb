<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class seed_bon_reductions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bon_reductions')->insert([
            [
            'code' => '1',
            'pourcentage' => '12',
            
             
            ],
            [
                'code' => '2',
                'pourcentage' => '13',
                 
            ],            

        ]);
    }
}
