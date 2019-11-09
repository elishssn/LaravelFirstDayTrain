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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => "Elis",
            'email' => "elis@gmail.com",
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => "Apis",
            'email' => "apis@gmail.com",
            'password' => bcrypt('password'),
        ]);
    }
}
