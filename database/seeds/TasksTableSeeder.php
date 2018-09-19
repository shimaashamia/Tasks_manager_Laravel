<?php

use Illuminate\Database\Seeder;
use App\Tasks;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          $faker = Faker\Factory::create();
        foreach (range(0, 30) as $index) {
            Tasks::create([
               'user_id'=>$faker->seed(1),
               'category_id'=>$faker->numberBetween($min = 1, $max = 15),
               'title' => $faker->title,
               'time'=>$faker->time,
               'date'=>$faker->date,
               'descriptions'=>$faker->text,
               'new_time'=>$faker->dateTime,
               'tone_id'=>$faker->seed(1),
               'repitition_id'=>$faker->numberBetween($min = 1, $max = 6),
               'repitition_times_number'=>$faker->randomDigit,
               'file'=>$faker->fileExtension,
               'is_active'=>$faker->boolean,
               'delay_duration_id'=>$faker->numberBetween($min = 1, $max = 8),
               'priority_level'=>$faker->numberBetween($min = 1, $max = 5),
               'is_vibrator'=>$faker->boolean,
               
            ]);
        }


    }
}
