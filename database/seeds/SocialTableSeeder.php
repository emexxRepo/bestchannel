<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SocialTableSeeder extends Seeder
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
            DB::table('socials')->insert([
                'instagram' => $faker->name,
                'twitter' => $faker->name,
                'youtube' => $faker->name,
            ]);
        }
    }
}
