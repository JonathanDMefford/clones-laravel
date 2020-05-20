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
    public function run()
    {
        // $faker = new Faker;
        factory(App\User::class, 1000)->create();
        factory(App\Category::class, 21)->create();
        for ($x = 0; $x <= 999; $x++) {
            $id = $x + 1;
            $categoryId = App\Category::all()->pluck('id')->random();
            DB::table('channels')->insert([
                'title' => Str::random(10),
                'user_id' => $id,
                'category_id' => $categoryId
                ]);
            }
            // factory(App\Channel::class, 00)->create();
    }
}
