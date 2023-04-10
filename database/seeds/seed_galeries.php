<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_galeries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('galeries')->insert([
            [

            'photo' => 'sqdsqs',
            
            
            

             
            ],
            [

            'photo' => 'sqdsqs',
            
            
            
                 
            ],            

        ]);
    }
}
