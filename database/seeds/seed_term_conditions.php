<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class seed_term_conditions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('term_conditions')->insert([
            [

            'h_arrive' => '2023-12-10 10:15:13',
            'h_depart' => '2023-12-10 10:15:13',
            'condition_paie' => 'dssd',
            'condition_annimal' => 'dssd'
            
            
            

             
            ],
            [
                'h_arrive' => '2023-12-10 10:15:13',
                'h_depart' => '2023-12-10 10:15:13',
                'condition_paie' => 'dssd',
                'condition_annimal' => 'dssd'
                
            
            
                 
            ],            

        ]);
    }
}
