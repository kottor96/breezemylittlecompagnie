<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
   
    public function run(): void
    {
        $departements = [
            ['name' => 'IT'],
            ['name' => 'HR'],
            ['name' => 'Finance'],
            ['name' => 'Sales'],
        ];
        foreach ($departements as $departement) {
            Departement::create($departement);
        }
    }
}
