<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ApplyTableSeeder extends Seeder
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
                'user_id' => 1,
                'opportunity_id' => 2,

            ]);
        }
    }
}
