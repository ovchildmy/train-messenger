<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $date = strval(rand(1, 30)) . '.' . strval(rand(1,12)) . '.' . strval(rand(1950, 2005));
        // DB::table('users')->insert([
        //     'name' => Str::random(5),
        //     'about' => Str::random(60),
        //     'birth' => $date,
        //     'email' => Str::random(7) . '@gmail.com',
        //     'password' => Hash::make('password')
        // ]);

        User::factory()
            ->count(30)
            ->create();
    }
}
