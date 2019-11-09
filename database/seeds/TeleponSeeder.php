<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
            DB::table('telepon')->insert([
                'nomor_telepon' => $faker->e164PhoneNumber,
                'pengguna_id' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
