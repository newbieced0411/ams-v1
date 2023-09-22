<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'John',
            'middleName' => 'Smith',
            'lastName' => 'Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'phoneNumber' => '+639999999999',
        ]);
    }
}
