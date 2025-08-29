<?php

namespace Database\Seeders;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
       $roles = [
            ['name' => 'user',  'count' => 12],
            ['name' => 'modo',  'count' => 3],
            ['name' => 'admin', 'count' => 1],
        ];

        foreach ($roles as $roleData) {
            $role = Role::create(['name' => $roleData['name']]);

            User::factory($roleData['count'])->has(Avatar::factory())->create([
                'role_id' => $role->id,
            ]);
        }
    }
}
