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
    }
}
