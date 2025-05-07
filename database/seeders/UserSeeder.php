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
        $user = [
            'name' => 'Putri',
            'email' => 'putri@gmail.com',
            'password' => bcrypt('1234'),
        ];

        User::insert($user);
    }
}
