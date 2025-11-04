<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // ✅ On récupère les infos du produit depuis le formulaire
        $product = [
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => asset($request->input('image')),
        ];

        $quantity = $request->input('quantity', 1);
        $amount = $product['price'] * 100; // Stripe exige les montants en centimes

        // ✅ Création de la session Stripe Checkout
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $product['name'],
                        'description' => $product['description'],
                        'images' => [$product['image']],
                    ],
                    'unit_amount' => $amount,
                ],
                'quantity' => $quantity,
            ]],
            'mode' => 'payment',
            'success_url' => route('checkout.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.cancel'),
        ]);

        // 🔁 Redirection vers la page Stripe
        return redirect($session->url);
    }

    public function success(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = \Stripe\Checkout\Session::retrieve($request->get('session_id'));

        return view('stripe.success', ['session' => $session]);
    }

    public function cancel()
    {
        return view('stripe.cancel');
    }
}
