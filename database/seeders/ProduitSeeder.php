<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        $produits = [
            [
                'nom'         => 'Tomates',
                'description' => 'Tomates fraîches du jardin',
                'prix'        => 2.50,
                'quantite'    => 100,
            ],
            [
                'nom'         => 'Pommes',
                'description' => 'Pommes biologiques',
                'prix'        => 3.00,
                'quantite'    => 50,
            ],
            [
                'nom'         => 'Oranges',
                'description' => 'Oranges importées',
                'prix'        => 1.50,
                'quantite'    => 75,
            ],
            [
                'nom'         => 'Bananes',
                'description' => 'Bananes fraîches',
                'prix'        => 1.20,
                'quantite'    => 60,
            ],
            [
                'nom'         => 'Mangues',
                'description' => 'Mangues de saison',
                'prix'        => 4.00,
                'quantite'    => 30,
            ],
        ];

        foreach ($produits as $produit) {
            Produit::create($produit);
        }
    }
}