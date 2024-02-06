<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Retrieve users and roles
         $adminRole = Role::where('name', 'admin')->first();
         $userRole = Role::where('name', 'user')->first();
 
         $adminUser = User::where('email', 'admin')->first();
         $userUser = User::where('email', 'user')->first();
 
         // Assign roles to users
         $adminUser->assignRole($adminRole);
         $adminUser->assignRole($userRole);
         $userUser->assignRole($userRole);
    }
}
