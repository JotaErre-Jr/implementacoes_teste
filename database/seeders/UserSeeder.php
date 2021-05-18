<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@system.com',
            'password' => bcrypt('123456789'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@system.com',
            'password' => bcrypt('123456789'),
        ]);

        $user = User::find(1);
        $user->assignRole('Admin');
        $user = User::find(2);
        $user->assignRole('User');


    }
}
