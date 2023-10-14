<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObsevationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Computer::unguard(); 

        Computer::create([
            'message' => 'Equipo revisado y en buen estado',
            'machine' => '1',
            'owner' => '1',
            'category' => '1',
        ]);

        Computer::reguard();
    }
}
