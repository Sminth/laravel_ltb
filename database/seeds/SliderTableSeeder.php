<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slider')->delete();
        
        \DB::table('slider')->insert(array (
            0 => 
            array (
                'id' => '1',
                'nom' => 'images/sliders/f0d6d7d48d3dece2f57578bb383d074e.jpg',
                'titre' => 'Le livre au feminin',
                'texte' => 'Le livre est un passport qui franchit toutes les frontières',
                'url' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 11:33:45',
                'updated_at' => '2021-06-07 06:04:38',
            ),
            1 => 
            array (
                'id' => '2',
                'nom' => 'images/sliders/2754c055beab6cef0f9e6a9c12484254.jpg',
                'titre' => 'Bibles d\'études.',
                'texte' => 'Laissez vous transformez par la parole de Dieu',
                'url' => '/produits',
                'deleted_at' => NULL,
                'created_at' => '2020-11-27 08:08:13',
                'updated_at' => '2021-06-07 06:06:00',
            ),
            2 => 
            array (
                'id' => '3',
                'nom' => 'images/sliders/59e95d2b96a09927e42e862fed841c35.jpg',
                'titre' => NULL,
                'texte' => NULL,
                'url' => '/produits',
                'deleted_at' => NULL,
                'created_at' => '2020-11-28 09:13:31',
                'updated_at' => '2021-07-20 19:57:35',
            ),
        ));
        
        
    }
}