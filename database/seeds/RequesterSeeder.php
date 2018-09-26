<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RequesterSeeder extends Seeder
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
            DB::table('requester')->insert([ //mengisi datadi database
                'id_user' => $faker->numberBetween(1,2),
                'actRequester' => $faker->numberBetween(1,2),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
