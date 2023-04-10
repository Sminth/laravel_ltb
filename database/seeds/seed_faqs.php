<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_faqs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('faqs')->insert([
            [

            'question' => 'sqdsqs',
            'reponse' => 'foot',
            
            

             
            ],
            [

            'question' => 'sqdsqs',
            'reponse' => 'foot',
            
            
                 
            ],            

        ]);
    }
}
