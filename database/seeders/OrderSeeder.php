<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderRow;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::pluck('id', 'email');
        $products = Product::pluck('id', 'name');

        $orders = [
            [
                'email' => 'jan@example.com',
                'ordered_at' => '2026-03-10 11:15:00',
                'status' => 1, // Betaald
                'items' => ['Catan', 'Uno'],
            ],
            [
                'email' => 'sophie@example.com',
                'ordered_at' => '2026-03-12 16:45:00',
                'status' => 2, // Verzonden
                'items' => ['Ticket to Ride', 'Azul'],
            ],
            [
                'email' => 'jan@example.com',
                'ordered_at' => '2026-03-18 09:20:00',
                'status' => 0, // In behandeling
                'items' => ['Carcassonne', 'Exploding Kittens', 'Codenames'],
            ],
            [
                'email' => 'admin@spelapp.nl',
                'ordered_at' => '2026-03-19 14:00:00',
                'status' => 3, // Afgerond
                'items' => ['Monopoly', 'Cluedo', 'Werewolves'],
            ],
        ];

        foreach ($orders as $orderData) {
            $userId = $users[$orderData['email']] ?? User::first()?->id;

            if ($userId) {
                $order = Order::create([
                    'user_id' => $userId,
                    'ordered_at' => $orderData['ordered_at'],
                    'status' => $orderData['status'],
                ]);

                foreach ($orderData['items'] as $productName) {
                    if (isset($products[$productName])) {
                        OrderRow::create([
                            'order_id' => $order->id,
                            'product_id' => $products[$productName],
                        ]);
                    }
                }
            }
        }
    }
}
