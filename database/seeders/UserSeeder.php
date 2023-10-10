<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #Arreglos asociativos -> funcionan como diccionarios
        User::create([
            'name' => 'Jasssy Perea',
            'email' => 'a.z23042016a@gmail.com',
            'password' => 'hola123',
        ]);
    }
}
