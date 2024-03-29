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
        $this->call(UserTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(OpportunityTableSeeder::class);
        $this->call(ApplyTableSeeder::class);
        $this->call(SectorTableSeeder::class);
    }
}
