<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_partenaires extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('partenaires')->insert([
            [

            'nom' => 'orange',
            'logo' => 'zfdsfdfd',
            

             
            ],
            [
                'nom' => 'moov',
 
                'logo' => 'zfdsfdfd',
            ],            

        ]);
    }
}
