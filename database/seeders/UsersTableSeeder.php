<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Chandan Shakya',
                'email' => 'chandan@gmail.com',
                'password' => Hash::make('chandan123'),
            ],
            [
                'name' => 'Ram Bahadur',
                'email' => 'ram@gmail.com',
                'password' => Hash::make('ram12345'),
            ],
        ]);
    }
}
