<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // single user
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
        ]);

        // multiple user
        // $user = [
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => bcrypt('123456'),
        //     ],
        //     [
        //         'name' => 'Admin1',
        //         'email' => 'admin1@gmail.com',
        //         'password' => bcrypt('123456'),
        //     ],
        // ];
        // User::insert($user);
    }
}
