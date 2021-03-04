<?php

use App\Spec;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $newSpec = new Spec();
            $newSpec->series = $faker->words(3);
            $newSpec->price = $faker->randomFloat(2, 0, 20);
            $newSpec->date = $faker->dateTime();
            $newSpec->volume_issue = $faker->randomDigit();
            $newSpec->trim_size = $faker->bothify();
            $newSpec->page_count = $faker->randomDigit();
            $newSpec->rated = $faker->word();
            $newSpec->save();
        }
    }
}
