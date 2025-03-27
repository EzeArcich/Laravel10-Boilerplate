<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Usuario Admin',
            'email' => 'admin@test.com',
            'email_verified_at' => null,
            'password' => '$2y$10$wEtEjvw8AQ8mHM.n5KHfu.PlctXcuG7ro8sVO4xJkO6scNkLfZeki', // Contraseña ya hasheada
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
