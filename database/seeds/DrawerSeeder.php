<?php

use App\Drawer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class DrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <5; $i++) { 
            $newDrawer = new Drawer;
            $newDrawer->name = $faker->word();
            $newDrawer->save();
        }
    }
}
