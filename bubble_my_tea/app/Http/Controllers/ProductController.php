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
