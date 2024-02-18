<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            ['name' => 'admin',],
            ['name' => 'admin']);
        $role_dinas = Role::updateOrCreate(
            ['name' => 'dinas',],
            ['name' => 'dinas']);
        $role_medik = Role::updateOrCreate(
            ['name' => 'medik',],
            ['name' => 'medik']);
        $role_inseminator = Role::updateOrCreate(
            ['name' => 'inseminator',],
            ['name' => 'inseminator']);
        $role_peternak  = Role::updateOrCreate(
            ['name' => 'peternak',],
            ['name' => 'peternak']);

                // permissions

        $permission1 = Permission::updateOrCreate(
            ['name' => 'view_dashboard',],
            ['name' => 'view_dashboard']);

        $permission2 = Permission::updateOrCreate(
            ['name' => 'view_dinas',],
            ['name' => 'view_dinas']);

        $permission3 = Permission::updateOrCreate(
            ['name' => 'view_yankeswan',],
            ['name' => 'view_yankeswan']);
        $permission4 = Permission::updateOrCreate(
            ['name' => 'view_inseminator',],
            ['name' => 'view_inseminator']);
        $permission5 = Permission::updateOrCreate(
            ['name' => 'view_peternak',],
            ['name' => 'view_peternak']);
    

        $role_admin->givePermissionTo($permission1);
        $role_admin->givePermissionTo($permission2);
        $role_admin->givePermissionTo($permission3);
        $role_admin->givePermissionTo($permission4);
        $role_admin->givePermissionTo($permission5);
        $role_dinas->givePermissionTo($permission2);
        $role_medik->givePermissionTo($permission3);
        $role_inseminator->givePermissionTo($permission4);
        $role_peternak->givePermissionTo($permission5);
        
    }
}
