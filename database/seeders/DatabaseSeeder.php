<?php

namespace Database\Seeders;

use App\Models\Avatar;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\AvatarFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    

        $this->call([
            RoleSeeder::class,DepartementSeeder::class, EmployeSeeder::class, ProduitSeeder::class,
        ]);
        
    }
}
