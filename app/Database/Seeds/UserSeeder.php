<?php

namespace App\Database\Seeds;

use App\Models\User;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $faker = \Faker\Factory::create();
        $password = 'password@123';

        for ($i = 0; $i < 10; $i++) {
            $user->save(
                [
                    'name'        =>    $faker->name,
                    'email'       =>    $faker->email,
                    'password'    =>    password_hash($password, PASSWORD_DEFAULT),
                    'created_at'  =>    Time::createFromTimestamp($faker->unixTime()),
                    'updated_at'  =>    Time::now()
                ]
            );
        }
    }
}
