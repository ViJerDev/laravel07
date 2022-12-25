<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $user = \App\Models\User::create([
             'name' => 'Test User',
             'email' => 'admin@admin.com',
             'password' => Hash::make('ololo')
         ]);
        $user->assingRole($role);
    }
}
