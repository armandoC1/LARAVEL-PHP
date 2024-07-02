<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('docente')->insert([
            'nombre' => 'admin',
            'apellido' => 'admin',
            'email' => 'admi@admin.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('estudiante')->insert([
            'nombre' => 'carlos',
            'apellido' => 'hernandez',
            'email' => 'carlos@carlos.com',
            'pin' => Hash::make('12345'),
        ]);
    }
}
