<?php

use Illuminate\Database\Seeder;

class TravellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('traveller')->insert([ //mengisi datadi database
                'id_pengguna' => $faker->unique()->numberBetween(6,15),
                'actTraveller' => $faker->unique()->numberBetween(1,5),
            ]);
        }
    }
}
