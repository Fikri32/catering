<?php

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
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // this can be done as separate statements
        Role::create(['name' => 'Dept Head']);
        Role::create(['name' => 'Supervisior']);
        Role::create(['name' => 'Operator']);
        Role::create(['name' => 'Staff']);
        // Role::create(['name' => 'Core Team']);

    }
}
