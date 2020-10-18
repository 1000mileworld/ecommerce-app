<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // $this->call(AdminsTableSeeder::class);
        // $this->call(SettingsTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(AttributesTableSeeder::class);
        $this->call(AValuesTableSeeder::class);
        //$this->call(DummySeeder::class);
    }
}

//run "php artisan db:seed" to execute
