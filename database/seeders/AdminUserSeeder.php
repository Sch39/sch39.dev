<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'manage article']);
        $permission->assignRole($adminRole);

        $adminUser = User::create([
            'name' => 'sukron@sch39.dev',
            'email' => 'sukron@sch39.dev',
            'password' => bcrypt('sch39'),
        ]);

        $adminUser->assignRole('admin');
    }
}
