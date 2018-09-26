<?php

use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
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
            DB::table('pengguna')->insert([ //mengisi datadi database
                'id_user' => $faker->unique()->numberBetween(6,15),
                'noRek' => $faker->unique()->bankAccountNumber, //email unique sehingga tidak ada yang sama
                'namaBank' => $faker->randomElement($array = array ('BNI','BCA','Mandiri')),
                'alamat' => $faker->address,
                'kodePos' => $faker->postcode,
                'kecamatan' => $faker->citySuffix,
                'kota' => $faker->city,
                'propinsi' => $faker->state,
                'created_at' => $faker->date(),
            ]);
        }
    }
}
