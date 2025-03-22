<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Laptop Gamer',
                'description' => 'Laptop con procesador i7 y tarjeta gráfica RTX 3060.',
                'price' => 1500.00,
                'stock' => 10,
                'image' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mouse Inalámbrico',
                'description' => 'Mouse ergonómico con conexión Bluetooth.',
                'price' => 25.99,
                'stock' => 50,
                'image' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Teclado Mecánico',
                'description' => 'Teclado con switches rojos y retroiluminación RGB.',
                'price' => 70.00,
                'stock' => 30,
                'image' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
