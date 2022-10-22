<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::create([
            'name' => 'admin'
        ]);

        $user_role = Role::create([
            'name' => 'user'
        ]);

        User::create([
            'name' => 'janjan bermudo',
            'email' => 'janjanbermudo@gmail.com',
            'password' => Hash::make('lancel123')
        ])->assignRole($user_role);

        User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin123'),
        ])->assignRole($admin_role);
    }
}
