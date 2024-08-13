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
        Product::create([
            "title" => 'Tempor consequat culpa mollit magna.',
            "price" => 19.03,
            "quantity" => 3,
            "category_id" => 1,
            "brand_id"=>1,
            "description"=>"Reprehenderit non labore dolore sunt proident tempor eu aliqua est incididunt. Do commodo ullamco sint non quis anim. Esse velit quis id labore cillum exercitation minim consectetur duis et sit incididunt aliquip. Proident enim proident excepteur exercitation dolor. Consectetur eu quis ipsum non cupidatat nisi eiusmod Lorem cillum ex. Laboris dolor esse anim velit est laborum dolore."
        ]);
    }
}
