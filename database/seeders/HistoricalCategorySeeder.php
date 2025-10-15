<?php

namespace Database\Seeders;

use App\Models\HistoricalCategory;
use Illuminate\Database\Seeder;

class HistoricalCategorySeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Teatro',
                'description' => 'Historia teatral y espectáculos de la ciudad',
                'color' => '#16a34a',
                'icon' => 'fas fa-theater-masks',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Arquitectura',
                'description' => 'Edificios históricos y patrimonio arquitectónico',
                'color' => '#16a34a',
                'icon' => 'fas fa-building',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Educación',
                'description' => 'Historia educativa y instituciones de enseñanza',
                'color' => '#16a34a',
                'icon' => 'fas fa-graduation-cap',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Comercio',
                'description' => 'Historia comercial y desarrollo económico',
                'color' => '#16a34a',
                'icon' => 'fas fa-store',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Transporte',
                'description' => 'Evolución del transporte y vías de comunicación',
                'color' => '#16a34a',
                'icon' => 'fas fa-train',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Cultura',
                'description' => 'Tradiciones culturales y eventos históricos',
                'color' => '#16a34a',
                'icon' => 'fas fa-palette',
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'name' => 'Gobierno',
                'description' => 'Historia política y administrativa',
                'color' => '#16a34a',
                'icon' => 'fas fa-landmark',
                'is_active' => true,
                'sort_order' => 7,
            ],
            [
                'name' => 'Deportes',
                'description' => 'Historia deportiva y eventos atléticos',
                'color' => '#16a34a',
                'icon' => 'fas fa-futbol',
                'is_active' => true,
                'sort_order' => 8,
            ],
        ];

        foreach ($categories as $category) {
            HistoricalCategory::create($category);
        }
    }
}
