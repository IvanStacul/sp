<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            'Ordenanzas',
            'Ordenanzas Impositivas y Tarifarias',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::factory()->create([
                'name' => $category,
                'slug' => \Illuminate\Support\Str::slug($category),
            ]);
        }

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
