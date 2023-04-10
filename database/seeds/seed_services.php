<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class seed_services extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('services')->insert([
            [

            'nom' => 'sdssdssd',
            'photo' => 'sfxxxxx',
            
            

             
            ],
            [
                'nom' => 'sdssdsd',
                'photo' => 'sfxxsxxx',
            
            
                 
            ],            

        ]);
    }
}
