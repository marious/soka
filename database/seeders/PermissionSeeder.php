<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            ['name' => 'alc', 'guard_name' => 'web'],
            ['name' => 'settings', 'guard_name' => 'web'],
            ['name' => 'teams', 'guard_name' => 'web'],
            ['name' => 'players', 'guard_name' => 'web'],
        ]);
    }
}
