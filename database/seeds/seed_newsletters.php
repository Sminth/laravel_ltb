<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_newsletters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('newsletters')->insert([
            [

            'email' => 'sqdsq@gmail.com',
            'status' => 'foonnt',
            
            

             
            ],
            [

            'email' => 'sqdssq@gmail.com',
            'status' => 'fonhot',
            
            
                 
            ],            

        ]);
    }
}
