<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => 1,
                'name' => 'Recipe Hub Admin',
                'email' => 'recipehub@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        ];
        DB::table('users')->insert($user);
    }
}
