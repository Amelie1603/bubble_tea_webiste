<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{

  /**
   * Allows mapping between controller methods & policy methods.
   */
  public function __construct()
  {
    $this->authorizeResource(Product::class, 'product');
  }

  public function index() {
    // $products = DB::table('products')->get();
    $products = Product::all();
    // dd($products);
    return view('products')->with('products', $products);
  }

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

  // public function remove(Request $request) 
  // {
  //   if ($request->id) {
  //     $cart = session()->get('cart');
  //     if (isset($cart[$request->id])) {
  //       unset($cart[$request->id]);
  //       session()->put('cart', $cart);
  //     }
  //     session()->flash('success', 'Product removed successfully');
  //   }
  // }

  public function show(Product $product) {
    return view('adminProduct', compact('product'));
  }

  /**
   * Shows admin product index page.
   */
  public function indexAdmin() {
    if (! Gate::allows('access-admin')) {
      abort(403);
    }
    $products = Product::all();
    return view('admin')->with('products', $products);
  }

  /**
   * Shows product creation form.
   */
  public function create() {
    return view('product.create');
  }

  /**
   * Saves product from request in database.
   */
  public function store(Request $request) {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required'
    ]);
    Product::create($request->all());
    return redirect()->route('admin');
  }

  /**
   * Shows given product edit form.
   */
  public function edit(Product $product) {
    return view('adminProduct', compact('product'));
  }

  /**
   * Saves edited product in database.
   */
  public function update(Request $request, Product $product) {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required'
    ]);
    $product->update($request->all());
    return redirect()->route('admin');
  }

  /**
   * Deletes given product.
   */
  public function destroy(Product $product) {
    $product->delete();
    return redirect()->route('admin');
  }

}