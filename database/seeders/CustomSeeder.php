<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //there are many 
        $faker = Faker::create();
        for($i=0; $i < 100; $i++){
            $customer = new Customer;
            $customer->name = $faker->name;
            $customer->username = $faker->username;
            $customer->email = $faker->email;
            $customer->gender = "M";
            $customer->address = $faker->address;
            $customer->dob = now();
            $customer->password = $faker->password;
            $customer->state = $faker->state;
            $customer->country = $faker->country;
            $customer->save();
        }
    }
}
