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
        Permission::create(["name" => "registrasi"]);

        Role::create(["name" => "administrator"]);
        Role::create(["name" => "petugas"]);

        $roleAdministrator = Role::findByName("administrator");
        $roleAdministrator->givePermissionTo("registrasi");
    }
}
