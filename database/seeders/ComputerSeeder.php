<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computer;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Computer::unguard();

        Computer::create([
            'name' => 's7e3',
            'brand' => 'HP',
            'ram' => 16,
            'cpu' => 'Intel i5',
            'owner' => '1',
        ]);
        
        Computer::create([
            'name' => 's6e2',
            'brand' => 'HP',
            'ram' => 16,
            'cpu' => 'Intel i5',
            'owner' => '1',
        ]);

        Computer::create([
            'name' => 's9e1',
            'brand' => 'HP',
            'ram' => 16,
            'cpu' => 'Intel i5',
            'owner' => '1',
        ]);

        Computer::reguard();
    }
}
