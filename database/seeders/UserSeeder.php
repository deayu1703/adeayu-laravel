<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Ade Ayu Wandira',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin13'),
        ]);

        $role = Role::find(1);
        $user->assignRole($role);
    }
}
