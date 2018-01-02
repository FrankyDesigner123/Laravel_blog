<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
          'site_name' => "Laravel's Blog",
          'address' => 'Tervuren',
          'contact_number' => '32 23 233 12 23',
          'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
