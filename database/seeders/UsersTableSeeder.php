<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email'=> 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' =>'admin',
                'semester'=>'-'
            ]
            ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
