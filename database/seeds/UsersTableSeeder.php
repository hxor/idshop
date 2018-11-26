<?php

use App\Models\User;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'role' => 'admin',
            'password' => bcrypt('secret'),
            'email_verified_at' => date("Y-m-d H:i:s")
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'role' => 'customer',
            'password' => bcrypt('secret'),
            'email_verified_at' => date("Y-m-d H:i:s")
        ]);
    }
}
