<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "username" => "admin",
            "password" => bcrypt("4dm1n")
        ]);
        User::create([
            "name" => "Muhamad Dwi Putra Novriansyah",
            "username" => "dwiputra",
            "password" => bcrypt("dwptra")
        ]);

        $adminAccount = User::where("name", "=", "Admin")->first();
        $adminAccount->assignRole("administrator");

        $petugasAccount = User::where("name", "=", "Muhamad Dwi Putra Novriansyah")->first();
        $petugasAccount->assignRole("petugas");
    }
}
