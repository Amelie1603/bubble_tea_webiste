@extends('layouts.default')

@section('content')
  <div class="products-page">
      <div class="product-list">
        @foreach ($products as $product)
          <div class="product-tile">
            <h3>{{$product->name}}</h3>
            <p>{{$product->description}}</p>
            <span>{{number_format($product->price, 2, ',', ' ')}} €</span>
            <p><a href={{ url('addToCart/'.$product->id) }}>+</a></p>
          </div>
        @endforeach    
      </div>
      @if(session('cart'))
      <div class="cart-container">
        <h2>Shopping Cart</h2>
      <?php $total = 0 ?>
      @foreach(session('cart') as $id => $details)
      <?php $total += $details['price'] * $details['quantity'] ?>
        <h3><span>x {{$details['quantity']}}</span>  {{$details['name']}}</h3>
        <div class="cart-detail">
          <span>{{number_format($details['price'], 2, ',', ' ')}} €</span>
        </div>
        <p><a href={{ url('removeOne/'.$id) }}>-</a></p>
        <p><a href={{ url('addToCart/'.$id) }}>+</a></p>
      @endforeach
      <div class="total">
        <h4>Total : </h4>
        <span>{{number_format($total, 2, ',', ' ')}} €</span>
      </div>
      <form action="order">
        @csrf
        <button type="submit">Commander</button>
      </form>
    </div>
  </div>
  
  @endif
  <style>
    body {
      background-color: #FFF4F4;
    }
    .products-page {
      display: flex;
      width: 1244px;
      /* border: 1px solid black; */
      margin: 80px auto;
      justify-content: space-between;
    }
    .product-list {
      /* border: 1px solid pink; */
      width: 75%;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
    }
    .product-tile {
      /* border: 1px solid green; */
      height: 260px;
      width: 200px;
      background-color: #FFF4F4;
      border-radius: 10px;
      padding: 10px;
    }
    .product-tile>h3 {
      font-weight: 600;
    }
    .product-tile>p {
      font-size: 14px;
      margin: 10px 0;
    }

    .cart-container {
      padding: 20px;
      width: 22%;
      display: flex;
      flex-direction: column;
      border-radius: 10px;

    }
    .cart-container h2 {
      font-weight: bold;
      margin: 10px 0;

    }
    .total {
      display: flex;
      justify-content: space-between;
      padding-top: 20px;
      margin-top: 20px;
      border-top: 1px solid black;
    }
    .cart-container {
      background-color: #fff;

    }
    .cart-detail {
      display: flex;
      justify-content: flex-end;
    }
    .cart-container button {
      border: 1px solid black;
      border-radius: 20px;
      padding: 10px;
    }
  </style>
@endsection