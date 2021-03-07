<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $newComic = new Comic();
            $newComic->title = $faker->words(2, true);
            $newComic->description = $faker->text();
            $newComic->cover = $faker->imageUrl(640, 480, 'animals', true);
            $newComic->available = $faker->boolean();
            $newComic->series = $faker->word();
            $newComic->price = $faker->randomFloat(2, 0, 10);
            $newComic->on_sale_date = $faker->dateTime();
            $newComic->volume_issue = $faker->randomDigit();
            $newComic->trim_size = $faker->bothify();
            $newComic->page_count = $faker->randomDigit();
            $newComic->rated = $faker->word();
            $newComic->save();
        }
    }
}
