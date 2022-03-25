<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
  public function index() {
    // $products = DB::table('products')->get();
    $products = Product::all();
    // dd($products);
    return view('products')->with('products', $products);
  }

  public function indexAdmin() {
    $products = Product::all();
    return view('admin')->with('products', $products);
  }

  public function create() {
    return view('product.create');
  }

  public function store(Request $request) {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required'
    ]);
    Product::create($request->all());

    return redirect()->route('admin');
  }

  public function show(Product $product) {
    return view('adminProduct', compact('product'));
  }

  public function edit(Product $product) {
    return view('product.edit', compact('product'));
  }

  public function update(Request $request, Product $product) {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required'
    ]);
    $product->update($request->all());
    return redirect()->route('admin');
  }

  public function destroy(Product $product) {
    $product->delete();
    return redirect()->route('admin');
  }

}
