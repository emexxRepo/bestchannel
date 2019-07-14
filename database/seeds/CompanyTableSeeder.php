<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('companies')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'sector_id'=>1,
                'photo'=>$faker->creditCardExpirationDateString.'.jpg',
            ]);
        }
    }
}
