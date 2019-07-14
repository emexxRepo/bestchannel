<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class OpportunityTableSeeder extends Seeder
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
                'company_id' => 1,
                'title' => $faker->title,
                'content' => $faker->text,
                'photo'=>$faker->title
            ]);
        }
    }
}
