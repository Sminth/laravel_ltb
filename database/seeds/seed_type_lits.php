<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed_type_lits extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('type_lits')->insert([
            [

            'nom' => 'dssd',
            'description' => 'sddsd',
            'place' => '2',
            
            

             
            ],
            [
                'nom' => 'dssd',
                'description' => 'sdsds',
                'place' => '3',
                
            
            
                 
            ],            

        ]);
    }
}
