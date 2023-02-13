<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'akylium',
                'email' => 'admin@akylium.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DeptA760k0qWCUEQF/5MmuTQhIm.q0zzmnNqUQB3kUZ4GJGRDxlhC',
                'remember_token' => 'ZNZlY8tVqVh5Cv3RJNmrwYPUdp8cR1vHAVZpoZeXXEc5SVfrdWWGHab8okoC',
                'created_at' => '2021-07-12 19:05:15',
                'updated_at' => '2021-07-12 19:05:15',
            ),
            1 =>
            array (
                'id' => '3',
                'name' => 'sminth',
                'email' => 'virtus225one@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DeptA760k0qWCUEQF/5MmuTQhIm.q0zzmnNqUQB3kUZ4GJGRDxlhC',
                'remember_token' => '34eUUFcWvkkS0ImHc5ZwzsCswedbJJKR5L1M6UkuA7rp6horbEkimMqH2ds4',
                'created_at' => '2021-07-12 19:05:15',
                'updated_at' => NULL,
            ),
        ));


    }
}