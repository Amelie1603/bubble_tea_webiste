<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
  public function cart() {
    return view('cart');
  }

  public function addToCart($id) {
    // get product details from product id
    $product = Product::find($id);
    if (!$product) {
      abort(404);
    }

    // get cart content
    $cart = session()->get('cart');

    // if cart empty add cart to session
    if (!$cart) {
      $cart= [
        $id => [
          'name' => $product->name,
          'description' => $product->description,
          'quantity' => 1,
          'price' => $product->price
        ]
      ];
      session()->put('cart', $cart);
      return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    // if product already in cart increment quantity
    if (isset($cart[$id])) {
      $cart[$id]['quantity']++;
      session()->put('cart', $cart);
      return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // if item is not in cart then add it with qty 1
    $cart[$id] = [
      'name' => $product->name,
      'description' => $product->description,
      'quantity' => 1,
      'price' => $product->price
    ];
    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product added to cart successfully!');
  }

  public function removeOne($id) {
    // get cart content
    $cart = session()->get('cart');

    if (isset($cart[$id])) {
      if ($cart[$id]['quantity'] > 1) {
        $cart[$id]['quantity']--;
      } else if ($cart[$id]['quantity'] === 1) {
        unset($cart[$id]);
      };
      session()->put('cart', $cart);
      return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  }

  public function confirmOrder() {

    $cart = session()->get('cart');
    $total = 0;

    foreach(session('cart') as $id => $details) {
      $total+= $details['price'] * $details['quantity'];
    };
    session()->put('total', $total);
    return view('confirmOrder');
  }
}
