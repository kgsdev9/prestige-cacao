<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        // Produits statiques
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Prix pratiqué pour les clients qui sont physiquement a nos différents événements.',
                'description' => 'Prix pratiqué pour les clients qui sont physiquement a nos différents événements.',
                'price' => 26,
                'image' => 'champagne-1.png',
            ],
            2 => [
                'id' => 2,
                'name' => 'Prix de vente appliqué avec livraison inclus a votre domicile',
                'description' => 'Prix de vente appliqué avec livraison inclus a votre domicile',
                'price' => 34,
                'image' => 'champgne-3.png',
            ],
        ];

        // Vérification que le produit existe
        if (!array_key_exists($id, $products)) {
            abort(404, 'Produit introuvable');
        }

        // Récupération du produit demandé
        $product = (object) $products[$id];

        // Envoi vers la vue du produit
        return view('produit.show', compact('product'));
    }
}
