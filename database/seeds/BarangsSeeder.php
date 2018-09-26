<?php

use Illuminate\Database\Seeder;

class BarangsSeeder extends Seeder
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
            DB::table('barangs')->insert([ //mengisi datadi database
                'nama' => $faker->name,
                'statusPecahBelah' => $faker->randomElement(['Ya' ,'Tidak']),
                'berat' => $faker->numberBetween($min = 1, $max = 5),
                'harga' => $faker->randomNumber(6),
                'panjang' => $faker->numberBetween($min = 1, $max = 100),
                'lebar' => $faker->numberBetween($min = 1, $max = 100),
                'kodeBarang' => $faker->randomElement(['Request' ,'Pre Order', 'Ready Stock']),
                'foto' => $faker->imageUrl('100'),

            ]);
        }
    }
}
