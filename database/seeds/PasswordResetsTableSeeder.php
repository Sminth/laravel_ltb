<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'kadiojean1017@yahoo.com',
                'token' => '5w0rR2xIcrwyJVgmqP9J',
                'created_at' => NULL,
            ),
        ));
        
        
    }
}