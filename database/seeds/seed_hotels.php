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
            'email_hotel' => 'kdsdsd11@gmail.com',
            'email_reservation' => 'qdsffsd@gmail.com',
            'photo' => 'sdfdsdfs',
            'video' => 'fdsdsffds',
            'Pays' => 'sdfdsdfs',
            'ville' => 'fdsdsffds',
            ],
            [

            'nom' => 'aadqd',
            'phone_1' => '151345',
            'phone_2'=> '635454',
            'phone_3' => '62333333333',
            'email_hotel' => 'kdsdsdx11@gmail.com',
            'email_reservation' => 'qdsfsd@gmail.com',
            'photo' => 'sdfdsdfs',
            'video' => 'fdsdsffds',
            'Pays' => 'sdfdsdfs',
            'ville' => 'fdsdsffds',  
            ],            

        ]);
    }
}
