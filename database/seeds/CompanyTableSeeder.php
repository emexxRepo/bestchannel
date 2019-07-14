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

        \App\Companies::create([
            'name' => 'Apple Inc',
            'email' => 'support@apple.com',
            'password' => bcrypt('12345678'),
            'sector_id' =>1,
            'summary' => 'Apple Inc...'
        ]);


        foreach (range(1, 10) as $index) {
             \App\Companies::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'sector_id'=>1,
                'summary' => $faker->text,
                'photo'=>$faker->creditCardExpirationDateString.'.jpg',
            ]);
        }
    }
}
