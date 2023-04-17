<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VillesTableSeeder::class);
        $this->call(CommunesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);

        //$this->call(ClientsTableSeeder::class);

        $this->call(SettingsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        // $this->call(WishlistsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(seed_activites::class);
        $this->call(seed_adresses::class);
        $this->call(seed_blogs::class);
        $this->call(seed_bon_reductions::class);
        $this->call(seed_categ_galeries::class);
        $this->call(seed_chambres::class);
        $this->call(seed_clients::class);
        $this->call(seed_contacts::class);
        $this->call(seed_demandes::class);
        $this->call(seed_documents_legauxes::class);
        $this->call(seed_failed_jobs::class);
        $this->call(seed_faqs::class);
        $this->call(seed_galeries::class);
        $this->call(seed_hotels::class);
        $this->call(seed_jobs::class);
        $this->call(seed_ligne_reservations::class);
        $this->call(seed_newsletters::class);
        $this->call(seed_noters::class);
        $this->call(seed_notifications::class);
        $this->call(seed_offres::class);
        $this->call(seed_paiements::class);
        $this->call(seed_partenaires::class);
        $this->call(seed_promo_codes::class);
        $this->call(seed_reservations::class);
        $this->call(seed_services::class);
        $this->call(seed_styles::class);
        $this->call(seed_term_conditions::class);
        $this->call(seed_type_lits::class);
        $this->call(seed_etat_chambre::class);


    }
}
