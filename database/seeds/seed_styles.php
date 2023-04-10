<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class seed_styles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('styles')->insert([
            [

            'nom' => 'sdssdsd',
            
            
            

             
            ],
            [
                'nom' => 'sdssdsd',
                
            
            
                 
            ],            

        ]);
    }
}
