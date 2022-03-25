<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderProduct;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // $products = DB::table('products')->get();
            $orders = Product::all();
            // dd($products);
            return view('profil')->with('order', $order);
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = session('cart');

        $order = new Order;

        $order->user_id = auth()->id();
        $order->price = session('total');

        $order->save();


        foreach(session('cart') as $id => $details)
        {
          $order_product = new OrderProduct;

          $order_product->order_id = $order->id;
          $order_product->product_id = $id;
          $order_product->quantity = $details['quantity'];
          $order_product->price = $details['price'];
          
          $order_product->save();
        }

        // session()->forget(['cart', 'total']);
        return view('confirmed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
