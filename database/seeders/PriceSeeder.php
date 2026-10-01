<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        $prices = [
            'Catan' => [
                ['price' => 39.99, 'effective_date' => '2026-01-01'],
            ],
            'Ticket to Ride' => [
                ['price' => 44.99, 'effective_date' => '2026-01-01'],
            ],
            'Uno' => [
                ['price' => 9.99, 'effective_date' => '2026-01-01'],
            ],
            'Exploding Kittens' => [
                ['price' => 19.99, 'effective_date' => '2026-01-01'],
            ],
            'Codenames' => [
                ['price' => 22.50, 'effective_date' => '2026-01-01'],
            ],
            'Werewolves' => [
                ['price' => 12.99, 'effective_date' => '2026-01-01'],
            ],
            'Carcassonne' => [
                ['price' => 34.95, 'effective_date' => '2026-01-01'],
            ],
            'Azul' => [
                ['price' => 37.50, 'effective_date' => '2026-01-01'],
            ],
            'Monopoly' => [
                ['price' => 29.99, 'effective_date' => '2026-01-01'],
            ],
            'Cluedo' => [
                ['price' => 27.50, 'effective_date' => '2026-01-01'],
            ],
        ];

        foreach ($prices as $productName => $productPrices) {
            $product = Product::where('name', $productName)->first();

            if ($product) {
                foreach ($productPrices as $item) {
                    Price::create([
                        'product_id' => $product->id,
                        'price' => $item['price'],
                        'effective_date' => $item['effective_date'],
                    ]);
                }
            }
        }
    }
}
