<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleUser  = Role::create(['name' => 'User']);

        Permission::create(['name' => 'user'])->assignRole($roleAdmin);
        Permission::create(['name' => 'inicio'])->syncRoles([$roleAdmin, $roleUser]);
        Permission::create(['name' => 'dashboard'])->syncRoles([$roleAdmin, $roleUser]);
    }
}
