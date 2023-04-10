<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seed_adresses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('adresses')->insert([
            [

            'id_client' => '1',
            'code_commune' => '151345',
            'description'=> 'exceptionnel le foot africain',
            'latitude' => '141321',
            'longitude' => '51334' 
            ],
            [

            'id_client' => '2',
            'code_commune' => '151345',
            'description'=> 'exceptionnel le foot africain',
            'latitude' => '62333333333',
            'longitude' => '51643' 
            ],            

        ]);
    }
}
