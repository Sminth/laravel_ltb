<?php

use Illuminate\Database\Seeder;

class AdressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('adresses')->delete();
        
        
    }
}