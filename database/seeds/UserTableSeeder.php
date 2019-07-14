<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\User::create([
            'name' => 'Ali',
            'email' => 'a@a.com',
            'password' => bcrypt('12345678'),
            'photo'=>'as.jpg'
        ]);
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'photo'=>$faker->title.'png',
            ]);
        }


    }
}
