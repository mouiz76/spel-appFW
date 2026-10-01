<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'Admin')->first();
        $customerRole = Role::where('name', 'Customer')->first();

        $users = [
            [
                'name' => 'Admin Gebruiker',
                'email' => 'admin@spelapp.nl',
                'password' => Hash::make('password'),
                'role_id' => $adminRole ? $adminRole->id : 1,
            ],
            [
                'name' => 'Jan Jansen',
                'email' => 'jan@example.com',
                'password' => Hash::make('password'),
                'role_id' => $customerRole ? $customerRole->id : 2,
            ],
            [
                'name' => 'Sophie de Vries',
                'email' => 'sophie@example.com',
                'password' => Hash::make('password'),
                'role_id' => $customerRole ? $customerRole->id : 2,
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
