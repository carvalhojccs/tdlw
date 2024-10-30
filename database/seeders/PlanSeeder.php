<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'FREE',
            'price' => 0.00,
            'description' => 'Para quem está começando',
        ]);

        Plan::create([
            'name' => 'PREMIUM',
            'price' => 100.00,
            'description' => 'Para pequenos empreendimento',
        ]);

        Plan::create([
            'name' => 'BUSINESS',
            'price' => 200.00,
            'description' => 'Para empreendimento completos',
        ]);
    }
}
