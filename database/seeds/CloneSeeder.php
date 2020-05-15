<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CloneSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create();
        factory(App\Category::class, 21)->create();
        factory(App\Channel::class, 100)->create();
        // for ($x = 0; $x <= 100; $x++) {
        //     $id = $x + 1;

        //   }
    }
}

// DB::table('users')->insert([
//     'name' => Str::random(10),
//     'email' => Str::random(10).'@gmail.com',
//     'password' => Hash::make('password'),
// ]);