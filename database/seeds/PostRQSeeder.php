<?php

use Illuminate\Database\Seeder;

class PostRQSeeder extends Seeder
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
            DB::table('post_rq')->insert([ //mengisi datadi database
                'id_barang' => $faker->numberBetween(1, 6),
                'id_pengguna' => $faker->numberBetween(1, 6), //email unique sehingga tidak ada yang sama
                'id_pegawai' => '2',
                'statusPost' => $faker->randomElement($array = array('Berhasil Post', 'Gagal Post', 'Belum Konfirmasi')),
                'tglBerakhir' => $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 14 days', $timezone = null),
                'created_at' => $faker->date('D:M:Y')
            ]);
        }
    }
}
