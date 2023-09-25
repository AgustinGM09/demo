<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProductsByCategory($category = null)
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

        $categories = array_keys($productsByCategory);

        $products = $productsByCategory[$category] ?? null;

        return view('products')
            ->with('products', $products)
            ->with('category', $category)
            ->with('categories', $categories);
    }
}
