<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_chambres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chambres')->insert([
            [

            'num_chambre' => 'football',
            'description' => 'foot',
            'photo'=> 'sqs',
            'superficie' => 'sqss',
            'limite' => 'd',
            'prix' => 'dd',
            'id_EtatChambre' => '1',

             
            ],
            [

                'num_chambre' => 'football',
                'description' => 'foot',
                'photo'=> 'sqs',
                'superficie' => 'sqss',
                'limite' => 'd',
                'prix' => 'dd',
                'id_EtatChambre' => '2',
                 
            ],            

        ]);
    }
}
