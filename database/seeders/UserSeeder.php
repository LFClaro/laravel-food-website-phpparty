<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $limit = 10;

        for($i = 0; $i < $limit; $i++){
            User::create(
                [
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->unique()->email,
                    'user_name' => $faker->unique()->userName,
                    'password' => $faker->password,
                ]
            );
        }
    }
}
