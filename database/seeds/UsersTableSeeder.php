<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
          'name' => 'Admin',
          'email' => 'franky.tse@student.ehb.be',
          'password' => bcrypt('password')

        ]);
    }
}
