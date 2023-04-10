<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_failed_jobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('failed_jobs')->insert([
            [

            'connection' => 'sqdsqs',
            'queue' => 'foot',
            'payload'=> 'sqs',
            'exception'=>"sqqsd"
            

             
            ],
            [

            'connection' => 'sqdsqs',
            'queue' => 'foot',
            'payload'=> 'sqs',
            'exception'=>"sqqsd"
            
                 
            ],            

        ]);
    }
}
