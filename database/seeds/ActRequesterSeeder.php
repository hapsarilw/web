<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ActRequesterSeeder extends Seeder
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
            DB::table('act_requester')->insert([ //mengisi datadi database
                'id_requester' => $faker->numberBetween(3,6),
                'aksi' => $faker->randomElement(['upload post requester', 'melakukan pembayaran', 'komentar pada post']),
                'postRequester' => $faker->url,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
