<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_jobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jobs')->insert([
            [

            'queue' => 'sqdsqs',
            'payload' => 'foot',
            'attempts'=> '12',
            'available_at'=>'2023',
            'created_at'=>'206',
            
            

             
            ],
            [

            'queue' => 'sqdsqs',
            'payload' => 'foot',
            'attempts'=> '13',
            'available_at'=>'202',
            'created_at'=>'2064',
            
                 
            ],            

        ]);
    }
}
