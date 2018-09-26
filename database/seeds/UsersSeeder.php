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

        $limit1 = 4; //batasan berapa banyak data
        $limit2 = 10;

        DB::table('users')->insert([ //mengisi datadi database
            'name' => $faker->name,
            'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
            'is_admin' => 1,
            'password' => $faker->word,
            'created_at' => $faker->date()
        ]);
        for ($i = 0; $i < $limit1; $i++) {
            DB::table('users')->insert([ //mengisi datadi database
                'name' => $faker->name,
                'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
                'is_admin' => $faker->numberBetween(2, 4),
                'password' => $faker->word,
                'created_at' => $faker->date()
            ]);
        }
        for ($i = 0; $i < $limit2; $i++) {
            DB::table('users')->insert([ //mengisi datadi database
                'name' => $faker->name,
                'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
                'is_admin' => 0,
                'password' => $faker->word,
                'created_at' => $faker->date()
            ]);
        }
    }
}
