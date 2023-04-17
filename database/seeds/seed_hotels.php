<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class seed_hotels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hotels')->insert([
            [

            'nom' => 'aadqd',
            'phone_1' => '151345',
            'phone_2'=> '635454',
            'phone_3' => '141321',
            'email_hotel' => 'kdsdsd111@gmail.com',
            'email_reservation' => 'qdsfggfsd@gmail.com',
            'photo' => 'sdfdsdfs',
            'video' => 'fdsdsffds',
            'id_Pays' => '13',
            'id_ville' => '14',
            ],
            [

            'nom' => 'aadqd',
            'phone_1' => '151345',
            'phone_2'=> '635454',
            'phone_3' => '62333333333',
            'email_hotel' => 'kdsdsdx111@gmail.com',
            'email_reservation' => 'qdsfjsd@gmail.com',
            'photo' => 'sdfdsdfs',
            'video' => 'fdsdsffds',
            'id_Pays' => '11',
            'id_ville' => '12',  
            ],            

        ]);
    }
}
