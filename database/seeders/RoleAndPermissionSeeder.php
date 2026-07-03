<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Permission::truncate();
        DB::table('role_has_permissions')->truncate();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            ['name' => 'list-users'],
            ['name' => 'create-users'],
            ['name' => 'delete-users'],

            ['name' => 'change-role'],
            ['name' => 'list-role'],
            ['name' => 'create-role'],
            ['name' => 'edit-role'],
            ['name' => 'delete-role'],

            ['name' => 'list-permission'],
            ['name' => 'create-permission'],
            ['name' => 'edit-permission'],
            ['name' => 'delete-permission'],

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission['name']]);
        }

        $superAdminRole = Role::create(['name' => 'super-admin'])->givePermissionTo(Permission::all());
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
    }
}
