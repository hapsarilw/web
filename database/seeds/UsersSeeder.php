<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([ //mengisi datadi database
                'name' => $faker->name,
                'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
                'is_admin' => $faker->numberBetween(0, 4),
                'password' => $faker->word,
                'created_at' => $faker->date()
            ]);
        }
    }
}
