<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
                'id_traveller' => $faker->numberBetween(1,2),
                'aksi' => $faker->randomElement(['Pergi' ,'Pulang', 'Setujui Pembelian']),
                'tgl' => $faker->date('D:M:Y'),
                'negara' => $faker->randomElement(['Thailand', 'Jepang', 'Korea', 'Amerika', 'Jerman', 'Swiss', 'Paris']),
                'postRequester' => $faker->date('D:M:Y'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);


        }
    }



}
