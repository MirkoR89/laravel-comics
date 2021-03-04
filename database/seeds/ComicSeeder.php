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
            $newComic->title = $faker->words(2);
            $newComic->description = $faker->text();
            $newComic->cover = $faker->imageUrl(640, 480, 'animals', true);
            $newComic->available = $faker->boolean();
            $newComic->save();
        }
    }
}
