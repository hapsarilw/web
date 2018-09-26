<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActivityTravellerSeeder extends Seeder
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
            DB::table('act_traveller')->insert([ //mengisi datadi database
                'id_traveller' => $faker->numberBetween(1,3),
                'aksi' => $faker->randomElement(['Pergi' ,'Pulang', 'Setujui Pembelian']),
                'negara' => $faker->randomElement(['Thailand', 'Jepang', 'Korea', 'Amerika', 'Jerman', 'Swiss', 'Paris']),
                'postRequester' => $faker->url,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
