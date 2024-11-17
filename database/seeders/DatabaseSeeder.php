<?php

namespace Database\Seeders; // Cambiado a 'Seeders' con 'S' mayúscula

//use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Puedes habilitarlo si lo necesitas
use Illuminate\Database\Seeder; // Cambiado a 'Illuminate' con 'I' mayúscula

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Producto::factory(100)->create();

        \App\Models\User::factory()->create([
            "name" => "Administrador",
            "email" => "admin@email.co",
        ]);
    }
}
