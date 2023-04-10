<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_categ_galeries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categ_galeries')->insert([
            [

            'libelle' => 'football',
            'video' => 'foot',
            
            
             
            ],
            [

                'libelle' => 'football',
                'video' => 'foot',
                
                
                 
            ],            

        ]);
    }
}
