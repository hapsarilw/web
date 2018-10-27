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
        $limit1 = 2;
        $limit2 = 3;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('act_traveller')->insert([ //mengisi datadi database
                'id_traveller' => $faker->numberBetween(6,15),
                'aksi' => 'Pergi',
                'tgl' => $faker->date('D:M:Y'),
                'negara' => $faker->randomElement(['Thailand', 'Jepang', 'Korea', 'Amerika', 'Jerman', 'Swiss', 'Paris']),
                'postRequester' => $faker->date('D:M:Y'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        for ($i = 0; $i < $limit1; $i++) {
            DB::table('act_traveller')->insert([ //mengisi datadi database
                'id_traveller' => $faker->numberBetween(6,15),
                'aksi' => 'Pulang',
                'tgl' => $faker->date('D:M:Y'),
                'negara' => 'Indonesia',
                'postRequester' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        for ($i = 0; $i < $limit2; $i++) {
            DB::table('act_traveller')->insert([ //mengisi datadi database
                'id_traveller' => $faker->numberBetween(6,15),
                'aksi' => 'Setujui Pembelian',
                'tgl' => $faker->date('D:M:Y'),
                'negara' => '-',
                'postRequester' => $faker->numberBetween(1, 5),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

