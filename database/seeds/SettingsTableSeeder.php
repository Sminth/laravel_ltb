<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'facebook_page',
                'name' => 'page facebook',
                'description' => 'lien de la page facebook',
                'value' => 'https://m.facebook.com/akyliumci-119138899938134/',
                'field' => '{"name":"value","label":"Value","type":"email"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'twitter_page',
                'name' => 'page twitter',
                'description' => 'lien de la page twitter',
                'value' => '',
                'field' => '{"name":"value","label":"Value","type":"text"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'instagram_page',
                'name' => 'page instagram',
                'description' => 'lien de la page instagram',
                'value' => '',
                'field' => '{"name":"value","label":"Value","type":"email"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'contact_1',
                'name' => 'contact 1',
                'description' => 'numero de téléphone 1',
                'value' => '08 08 08 08',
                'field' => '{"name":"value","label":"Value","type":"text"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'contact_2',
                'name' => 'contact 2',
                'description' => 'numero de  téléphone 2',
                'value' => '08 08 08 08',
                'field' => '{"name":"value","label":"Value","type":"text"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'email',
                'name' => 'email',
                'description' => 'email du site',
                'value' => 'virtus225one@gmail.com',
                'field' => '{"name":"value","label":"Value","type":"email"}',
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}