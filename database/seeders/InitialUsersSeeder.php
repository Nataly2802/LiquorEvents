<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InitialUsersSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@liquorevents.test'],
            ['name' => 'Administrador', 'password' => Hash::make('admin123'), 'rol' => 'administrador']
        );

        User::updateOrCreate(
            ['email' => 'empleado@liquorevents.test'],
            ['name' => 'Empleado', 'password' => Hash::make('empleado123'), 'rol' => 'empleado']
        );

        User::updateOrCreate(
            ['email' => 'participante@liquorevents.test'],
            ['name' => 'Participante', 'password' => Hash::make('participante123'), 'rol' => 'participante']
        );
    }
}
