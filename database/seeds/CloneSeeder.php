<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class CloneSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $faker = new Faker\Generator();
        factory(App\User::class, 500)->create();
        factory(App\Category::class, 30)->create();
        for ($x = 0; $x <= 499; $x++) {
            $id = $x + 1;
            $categoryId = App\Category::all()->pluck('id')->random();
            DB::table('channels')->insert([
                'title' => $faker->sentence,
                'user_id' => $id,
                'category_id' => $categoryId
                ]);
            }
            // factory(App\Channel::class, 00)->create();
    }
}
