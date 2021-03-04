<?php

use App\Writer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <5; $i++) { 
            $newWriter = new Writer;
            $newWriter->name = $faker->word();
            $newWriter->save();
        }
    }
}
