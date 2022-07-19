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
        for ($i = 0; $i < 10; $i++) {
            $newcomic = new Comic();
            $newcomic->title = $faker->word();
            $newcomic->description = $faker->paragraph();
            $newcomic->thumb = $faker->imageUrl(360, 306, 'animals', true);
            $newcomic->price = $faker->randomFloat(2, 1, 500);
            $newcomic->series = $faker->word();
            $newcomic->sale_date = $faker->date();
            $newcomic->type = $faker->word();
            $newcomic->save();
        }
    }
}
