<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            $newAuthor = new Author;
            $newAuthor->name = $faker->firstName();
            $newAuthor->lastname = $faker->lastname();
            $newAuthor->date_of_birth = $faker->dateTimeBetween("-30years", "now");
            $newAuthor->save();
        }
    }
}
