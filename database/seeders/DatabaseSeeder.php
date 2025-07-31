<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Larmes de Troll',
                'description' => 'Fromage crémeux adoucissant fabriqué avec du lait de vaches géantes des marais et saumure de troll pétrifié.',
                'price' => 45,
                'weight' => 850,
                'picture' => 'images/cheese4.png',
                'stock_quantity' => 6,
                'category_id' => 1,
                'available' => 1,
            ],
            [
                'name' => 'Fumée du Griffon',
                'description' => 'Fromage fumé dans des plumes de griffon carbonisées, à la saveur boisée sauvage.',
                'price' => 52,
                'weight' => 780,
                'picture' => 'images/cheese5.png',
                'stock_quantity' => 4,
                'category_id' => 1,
                'available' => 1,
            ],
            [
                'name' => 'Écaille de Chimère',
                'description' => 'Fromage dur à croûte écailleuse, conçu avec du lait de chèvres de montagne ayant survécu à des attaques de chimères.',
                'price' => 68,
                'weight' => 920,
                'picture' => 'images/cheese6.png',
                'stock_quantity' => 7,
                'category_id' => 2,
                'available' => 1,
            ],
            [
                'name' => 'Brume du Loup-Garou',
                'description' => 'Fromage affiné à la pleine lune, enveloppé de feuilles argentées, réputé pour apaiser les malédictions lunaires.',
                'price' => 50,
                'weight' => 600,
                'picture' => 'images/cheese7.png',
                'stock_quantity' => 5,
                'category_id' => 3,
                'available' => 1,
            ],
            [
                'name' => 'Crâne-Sorcier',
                'description' => 'Fromage bleu vieilli dans des crânes de géants, souvent utilisé dans les rituels occultes.',
                'price' => 73,
                'weight' => 950,
                'picture' => 'images/cheese8.png',
                'stock_quantity' => 3,
                'category_id' => 4,
                'available' => 1,
            ],
            [
                'name' => 'Mousse des Dryades',
                'description' => 'Fromage tendre affiné dans de la mousse enchantée, fabriqué avec du lait de biches féeriques.',
                'price' => 47,
                'weight' => 700,
                'picture' => 'images/cheese9.png',
                'stock_quantity' => 8,
                'category_id' => 2,
                'available' => 1,
            ],
            [
                'name' => 'Souffle du Kraken',
                'description' => 'Fromage salin vieilli dans des jarres d’algues géantes, au goût marin ancestral.',
                'price' => 65,
                'weight' => 880,
                'picture' => 'images/cheese10.png',
                'stock_quantity' => 2,
                'category_id' => 4,
                'available' => 1,
            ],
            [
                'name' => 'Velours du Basilic',
                'description' => 'Fromage vert pâle à pâte molle, affiné dans des cavernes obscures près de créatures pétrifiées.',
                'price' => 48,
                'weight' => 900,
                'picture' => 'images/cheese11.png',
                'stock_quantity' => 3,
                'category_id' => 3,
                'available' => 1,
            ],
            [
                'name' => 'Chant de la Harpie',
                'description' => 'Fromage filandreux produit sur les falaises, dont le goût varie avec la lune.',
                'price' => 32,
                'weight' => 400,
                'picture' => 'images/cheese12.png',
                'stock_quantity' => 12,
                'category_id' => 3,
                'available' => 1,
            ],
            [
                'name' => 'Givre du Yéti',
                'description' => 'Fromage bleu glacé, croquant et frais, qui laisse un souffle givré sur la langue.',
                'price' => 58,
                'weight' => 750,
                'picture' => 'images/cheese13.png',
                'stock_quantity' => 4,
                'category_id' => 4,
                'available' => 1,
            ],
        ]);
        DB::table("users")->insert([
            [
                'name'=>'Paul',
                'email'=>'paul.montoussy@gmail.com',
                'email_verified_at'=> null,
                'password'=> "123"
            ]
        ]);
        DB::table("orders")->insert([
            ["id"=>1,
            'user_id'=>1],
            ["id"=>2,
            'user_id'=>1],
            ["id"=>3,
            'user_id'=>1],
            ["id"=>4,
            'user_id'=>1]
        ]);
        DB::table("order_product")->insert([
            [
                "order_id" => 1,
                "product_id" => 1,
                "quantity" => 4
            ],[
                "order_id" => 1,
                "product_id" => 3,
                "quantity" => 1
            ],[
                "order_id" => 1,
                "product_id" => 9,
                "quantity" => 2
            ],[
                "order_id" => 2,
                "product_id" => 6,
                "quantity" => 8
            ],[
                "order_id" => 3,
                "product_id" => 3,
                "quantity" => 4
            ],[
                "order_id" => 3,
                "product_id" => 10,
                "quantity" => 2
            ],[
                "order_id" => 4,
                "product_id" => 6,
                "quantity" => 4
            ],[
                "order_id" => 4,
                "product_id" => 2,
                "quantity" => 4
            ],[
                "order_id" => 4,
                "product_id" => 8,
                "quantity" => 4
            ],[
                "order_id" => 4,
                "product_id" => 5,
                "quantity" => 4
            ],
        ]);
    }
}
