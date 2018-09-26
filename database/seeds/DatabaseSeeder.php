<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BarangsSeeder::class);
        $this->call(TravellerSeeder::class);
        $this->call(ActivityTravellerSeeder::class);
        $this->call(RequesterSeeder::class);
        $this->call(ActRequesterSeeder::class);
        $this->call(UsersSeeder::class);

    }
}
