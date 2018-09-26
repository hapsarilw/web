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
                'id_user' => $faker->numberBetween(1,2),
                'actTraveller' => $faker->numberBetween(1,2),
            ]);
        }
    }
}
