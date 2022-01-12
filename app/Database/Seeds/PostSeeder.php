<?php

namespace App\Database\Seeds;

use App\Models\Post;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PostSeeder extends Seeder
{
    public function run()
    {
        $user = new Post();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $title = $faker->sentence();
            $slug = url_title($title, '-', true);
            $user->save(
                [
                    'user_id'     =>    $faker->randomNumber(1, 5),
                    'title'       =>    $title,
                    'slug'        =>    $slug,
                    'image'       =>    $faker->imageUrl(750, 450),
                    'description' =>    $faker->paragraph(),
                    'created_at'  =>    Time::createFromTimestamp($faker->unixTime()),
                    'updated_at'  =>    Time::now()
                ]
            );
        }
    }
}
