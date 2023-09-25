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
        $productsByCategory = [
        'health' => [
            'Band-Aids',
            'Johnson’s Baby Powder',
            'Tylenol'
        ],
        'tech' => [
            'GoPro Action Camera',
            'FitBit Fitness Watch',
            'Nintendo Switch'
        ],
        'books' => [
            'The Martian',
            'The Great Gatsby',
            'Joy Luck Club'
        ]
    ];

        foreach($productsByCategory as $category => $products) {
            $category_id = DB::table('categories')->insertGetId(['name' => $category]);
        
            foreach($products as $product) {
                DB::table('products')->insert(['name' => $product, 'category_id' => $category_id]);
            }
        }

    }
}
