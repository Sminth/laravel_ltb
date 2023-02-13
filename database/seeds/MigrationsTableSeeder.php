<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2020_03_31_114745_remove_backpackuser_model',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2020_10_11_130223_create_clients_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2020_10_11_130923_create_villes_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2020_10_11_131338_create_communes_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2020_10_11_132731_create_addresses_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2020_10_11_162104_create_produits_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2020_10_11_162736_create_categories_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2020_10_11_163029_create_souscategories_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2020_10_12_120540_create_marques_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2020_10_12_121046_create_tailleproduits_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2020_10_12_121314_create_couleurs_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2020_10_12_121443_create_commandes_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2020_10_12_121540_create_detailcommandes_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2020_10_12_182846_create_produit_has_couleurs_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2020_10_12_183106_create_produit_has_taille_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2020_10_13_042640_create_bon_reductions_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2020_10_13_044034_create_permission_tables',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2020_11_26_182627_create_wishlists_table',
                'batch' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2020_11_27_072531_create_slider_table',
                'batch' => 3,
            ),
        ));
        
        
    }
}