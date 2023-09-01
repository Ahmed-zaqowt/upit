<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Role::factory()->create([
            'name' => 'admin'
        ]);
        Role::factory()->create([
            'name' => 'user'
        ]);
        Role::factory()->create([
            'name' => 'editor'
        ]);
        Role::factory()->create([
            'name' => 'future'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789') ,
            'status' => 'admin' ,
             'role_id' => 1
        ]);

    }
}
