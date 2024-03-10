<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 3; $i++){
            $address = new Address;
            $address->street_name = $faker->streetName();
            $address->street_number = $faker->buildingNumber();
            $address->city_id = rand(1,10);
            $address->save();
        }
    }
}
