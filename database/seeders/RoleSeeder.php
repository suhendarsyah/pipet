<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::updateOrCreate(
            ['name' => 'admin'],
            ['name' => 'admin']);
        Role::updateOrCreate(
            ['name' => 'dinas'],
            ['name' => 'dinas']);
        Role::updateOrCreate(
            ['name' => 'medik'],
            ['name' => 'medik']);
        Role::updateOrCreate(
            ['name' => 'inseminator'],
            ['name' => 'inseminator']);
        Role::updateOrCreate(
            ['name' => 'peternak'],
            ['name' => 'peternak']);
        
    }
}
