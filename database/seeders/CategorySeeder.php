<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Computer::unguard(); 
        
        Computer::create([
            'name' => 'Mantenimiento preventivo',
        ]);

        Computer::create([
            'name' => 'Instalación de software',
        ]);

        Computer::create([
            'name' => 'Mantenimiento correctivo',
        ]);

        Computer::create([
            'name' => 'Cambio de hardware',
        ]);

        Computer::reguard();
    }
}
