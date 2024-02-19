<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => static::$password ??= Hash::make('password') // password
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'role' => 'user',
                'password' => static::$password ??= Hash::make('password') // password
            ],
        ]);
    }
}
