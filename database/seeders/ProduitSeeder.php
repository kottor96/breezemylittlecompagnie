<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produits = [
            [
                'title' => 'imprimante',
                'description' => 'super imprimante',
                'image_url' => 'https://i1.adis.ws/i/canon/5449C008-PIXMA-TS7450i-EUR-BLACK_01?w=940&bg=rgb(245,246,246)&fmt=webp&qlt=100&sm=aspect&aspect=1:1',
                'prix' => 15.99,
            ],
            [
                'title' => 'telephone',
                'description' => 'super telephone',
                'image_url' => 'https://www.backmarket.be/cdn-cgi/image/format%3Dauto%2Cquality%3D75%2Cwidth%3D260/https://d2e6ccujb3mkqf.cloudfront.net/e4d4b68e-9dec-438d-be52-d348924bfe62-1_131e50a8-aa4c-4097-93ea-ed4a76388b8b.jpg',
                'prix' => 159.99,
            ],
            [
                'title' => 'ordinateur',
                'description' => 'super ordinateur',
                'image_url' => 'https://media.s-bol.com/GNkrqvkRnvJ0/NkW74qN/550x427.jpg',
                'prix' => 350.99,
            ],
            [
                'title' => 'ventilateur',
                'description' => 'super ventilateur',
                'image_url' => 'https://img.lemde.fr/2023/03/31/0/0/3576/3576/664/0/75/0/e800d4d_1680267337584-ventilateurs-gagnants.jpg',
                'prix' => 11.99,
            ],
        ];
        foreach ($produits as $produit) {
            Produit::create($produit);
        }
    }
}
