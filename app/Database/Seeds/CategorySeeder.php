<?php

namespace App\Database\Seeds;

use App\Models\Category;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $user = new Category();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $category = $faker->word();
            $slug = url_title($category, '-', true);
            $user->save(
                [
                    'name'       =>    $category,
                    'slug'        =>    $slug,
                    'created_at'  =>    Time::createFromTimestamp($faker->unixTime()),
                    'updated_at'  =>    Time::now()
                ]
            );
        }
    }
}
