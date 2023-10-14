<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Observation;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observation::unguard();

        Observation::create([
            'message' => 'Equipo revisado y en buen estado',
            'machine' => '1',
            'category' => '1',
            'owner' => '1',
        ]);

        Observation::create([
            'message' => 'Equipo revisado y en buen estado',
            'machine' => '2',
            'category' => '1',
            'owner' => '1',
        ]);

        Observation::reguard();
    }
}
