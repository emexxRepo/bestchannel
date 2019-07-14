<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SectorTableSeeder extends Seeder
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
            DB::table('sectors')->insert([
                'name' => $faker->name,
                'slug' => $faker->slug,
                'photo'=>$faker->title.'gif'
            ]);
        }
    }
}
