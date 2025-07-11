<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['username' => 'Admin EasyWork', 'email' => 'admin@easywork.com', 'role' => 'admin'],
            ['username' => 'Validator Easywork', 'email' => 'validator@easywork.com', 'role' => 'validator'],
            ['username' => 'PT Garuda Jaya', 'email' => 'hrd@garudajaya.com', 'role' => 'perusahaan'],
            ['username' => 'Haidar Jobseeker', 'email' => 'haidar@jobseeker.com', 'role' => 'pelamar'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']], // cek berdasarkan username
                [
                    'id' => Str::random(8),
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'password' => Hash::make('password'), // default password
                    'remember_token' => Str::random(10),
                ]
            );
        }
    }
}
