<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $newComic = new Comic;
            $newComic->title = $faker->text(30);
            $newComic->original_title = $faker->text(40);
            $newComic->author = $faker->name(40);
            $newComic->edition = $faker->text(30);
            $newComic->number = $faker->numberBetween(1, 1000);
            $newComic->num_pages = $faker->numberBetween(100, 700);
            $newComic->release = $faker->year();
            $newComic->price = $faker->randomFloat(2, 1, 9999);
            $newComic->colored = rand(0,1);
            $newComic->cover = $faker->imageUrl(200,300);
            $newComic->save();
        }
    }
}
