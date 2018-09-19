<?php

use Illuminate\Database\Seeder;
use App\Category;

class CatogeryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();
        foreach (range(0, 15) as $index) {
            Category::create([
                'user_id'=>$faker->seed(1),
                'title' => $faker->title,
                'icon_id'=>$faker->numberBetween($min = 1, $max = 30),
                'color_id'=>$faker->numberBetween($min = 1, $max = 30),
               
            ]);
        }


    }
}
