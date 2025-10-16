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
                'name' => 'Inmigrantes',
                'description' => 'Historia de inmigración y comunidades',
                'color' => '#16a34a',
                'icon' => 'fas fa-people-arrows',
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
                'name' => 'Institutos Privados',
                'description' => 'Historia de instituciones educativas privadas',
                'color' => '#16a34a',
                'icon' => 'fas fa-school',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Civismo',
                'description' => 'Evolución del civismo y la participación ciudadana',
                'color' => '#16a34a',
                'icon' => 'fas fa-users',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Gestión Cultural',
                'description' => 'Tradiciones culturales y eventos históricos',
                'color' => '#16a34a',
                'icon' => 'fas fa-palette',
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'name' => 'Religión',
                'description' => 'Historia de la religión y sus instituciones',
                'color' => '#16a34a',
                'icon' => 'fas fa-landmark',
                'is_active' => true,
                'sort_order' => 7,
            ],
            [
                'name' => 'Deportes y Clubes',
                'description' => 'Historia deportiva y eventos atléticos',
                'color' => '#16a34a',
                'icon' => 'fas fa-futbol',
                'is_active' => true,
                'sort_order' => 8,
            ],
            [
                'name' => 'Oficios',
                'description' => 'Historia de oficios y profesiones en la ciudad',
                'color' => '#16a34a',
                'icon' => 'fas fa-tools',
                'is_active' => true,
                'sort_order' => 9,
            ],
            [
                'name' => 'Fundación Regimiento',
                'description' => 'Historia de la Fundación del Regimiento y su impacto en la ciudad',
                'color' => '#16a34a',
                'icon' => 'fas fa-shield-alt',
                'is_active' => true,
                'sort_order' => 10,
            ],
            [
                'name' => 'La Música',
                'description' => 'Historia de la música y sus exponentes en la ciudad',
                'color' => '#16a34a',
                'icon' => 'fas fa-music',
                'is_active' => true,
                'sort_order' => 11,
            ],
            [
                'name' => 'Agricultura',
                'description' => 'Historia de la agricultura y su evolución en la ciudad',
                'color' => '#16a34a',
                'icon' => 'fas fa-tractor',
                'is_active' => true,
                'sort_order' => 12,
            ],
            [
                'name' => 'El Comercio',
                'description' => 'Historia del comercio y su evolución en la ciudad',
                'color' => '#16a34a',
                'icon' => 'fas fa-shopping-cart',
                'is_active' => true,
                'sort_order' => 13,
            ],
            [
                'name' => 'La Salud',
                'description' => 'Historia de la salud y su evolución en la ciudad',
                'color' => '#16a34a',
                'icon' => 'fas fa-heartbeat',
                'is_active' => true,
                'sort_order' => 14,
            ],
            [
                'name' => 'El Periodismo',
                'description' => 'Historia del periodismo y su evolución en la ciudad',
                'color' => '#16a34a',
                'icon' => 'fas fa-newspaper',
                'is_active' => true,
                'sort_order' => 15,
            ],
            [
                'name' => "Post 50'",
                'description' => 'Historia de la ciudad después de los años 50',
                'color' => '#16a34a',
                'icon' => 'fas fa-clock',
                'is_active' => true,
                'sort_order' => 16,
            ],
        ];

        foreach ($categories as $category) {
            HistoricalCategory::create($category);
        }
    }
}
